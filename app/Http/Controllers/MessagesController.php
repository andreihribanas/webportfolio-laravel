<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\MessageReply;
use Mail;
use Session;
use App\Mail\ReplyMessage;

class MessagesController extends Controller
{


    public function index() {
        // grab messages
        $messages = Message::paginate(20);

        // pass message to the view
        return view('admin.messages.index', compact('messages'));
    }

    public function show($id) {

        // grab message by id
        $message = Message::find($id);
        $replies = MessageReply::where('message_id', '=', $message->id)->orderBy('created_at', 'desc')->get();

        // pass message to the view
        return view('admin.messages.show', compact('message', 'replies'));
    }

    public function reply(Request $request, $id) {

      // get message
      $original = Message::find($id);

      // validate data
      $this->validate($request, [
          'reply' => 'required | min:5 | max:5000'
      ]);

      // send message reply by email, validate fields
      $fields = [
        'name' => 'Andrei Hribanas',
        'email'=> 'postmaster@andreihribanas.co.uk',
        'subject' => $request->subject,
        'to' =>  $request->from,
        'content' => $request->reply,
      ];

      // send reply mail
      \Mail::to($fields['to'])->send(new ReplyMessage($fields));

    // save reply message
    $reply = new MessageReply();
    $reply->message_id = $original->id;
    $reply->content = $request->reply;
    $reply->save();

    // set flash message
    Session::flash('success', 'Reply sent to ' . $request->from);

    // redirect user to messages index
    return redirect()->route('messages.show', $original->id);

    }


    public function destroy($id) {
        // get message
        $message = Message::find($id);
        $replies = MessageReply::where('message_id', '=', $message->id)->get();


        // delete message record and replies
        $message->delete();
        foreach ($replies as $reply) {
          $reply->delete();
        }

        // set flash  with success message
        Session::flash('success', 'The message was deleted succesfully.');

        // redirect to messages index
        return redirect()->route('messages.index');

    }

}

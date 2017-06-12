<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Message;
use Session;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('pages.index');
    }

    public function portfolio() {

        // retrieve projects existing
        $projects = Project::all();

        return view('pages.portfolio', compact('projects'));
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
          // validate input
          $this->validate($request, [
            'name' => 'required | max:255',
            'email' => 'required | email',
            'phone_no' => 'required | max:11',
            'subject' => 'required | min:3 | max:100',
            'content' => 'required | min:5'
          ]);

          // set data to pass into the view
          $data = [
            'name' => $request->name,
            'email'=> $request->email,
            'phone_no' => $request->phone_no,
            'subject' => $request->subject,
            'content' => $request->content
          ];

          // send mail
          Mail::send('emails.contact', $data, function($message) use ($data) {
              $message->from($data['email']);
              $message->to('andrei.hribanas@gmail.com');
              $message->subject($data['subject']);
          });

          // save message in the database
          $messageSent = new Message;
          $messageSent->sender = $data['name'];
          $messageSent->email = $data['email'];
          $messageSent->phone_no = $data['phone_no'];
          $messageSent->subject = $data['subject'];
          $messageSent->content = $data['content'];
          $messageSent->save();

          // set flash message
          Session::flash('success', 'Thank you for your message. You will be contacted shortly.');

          // redirect
          return redirect()->route('contact');
    }

    public function getAdmin() {
      return view('admin.index');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectImage;
use App\Message;
use App\Testimonial;
use App\Tag;
use Session;
use Mail;
use App\Mail\ReceiveContact;

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
      $testimonials = Testimonial::where('visible', '=', 1)->get();
        return view('pages.index', compact('testimonials'));
    }

    public function portfolio() {

        // retrieve projects existing
        $projects = Project::all();

        return view('pages.portfolio', compact('projects'));
    }

    public function getProject(Request $request){

          $project = Project::where('id', $request->id)->get();
          $images = ProjectImage::where('project_id', $request->id)->get();
          $tools = Project::where('id', $request->id)->with('tags')->get();


        //  return response()->json($project);
          return response()->json([
              'project' => $project,
              'images' => $images,
              'tools' => $tools
          ]);
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
          // validate input
          $this->validate($request, [
            'name' => 'required | min:3 | max:100',
            'email' => 'required | email',
            'phone_no' => 'required | digits:11',
            'subject' => 'required | min:3 | max:100',
            'content' => 'required | min:5 | max: 5000'
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
          // Mail::send('emails.contact', $data, function($message) use ($data) {
          //     $message->from('postmaster@andreihribanas.co.uk');
          //     $message->to($data['email']);
          //     $message->subject($data['subject']);
          // });

          \Mail::to($data['email'])->send(new ReceiveContact($data));

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

      $projects = Project::all();
      $messages = Message::all();
      $testimonials = Testimonial::all();
      $tags = Tag::all();

      return view('admin.index', compact('projects', 'messages', 'testimonials', 'tags'));
    }

}

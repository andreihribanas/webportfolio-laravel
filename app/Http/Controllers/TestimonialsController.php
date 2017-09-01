<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Session;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all testimonials
        $testimonials = Testimonial::paginate(20);

        // pas varialbe to view
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate input
        $this->validate($request, [
            'author' => 'required | min:3 | max: 100',
            'role' => 'nullable | min:3 | max: 50',
            'description' => 'required | min:5 | max: 100',
            'message' => 'required | min:10 | max:2000'
        ]);

        // create new testimonial object
        $testimonial = new Testimonial();
        $testimonial->author = $request->author;
        $testimonial->role = $request->role;
        $testimonial->description = $request->description;
        $testimonial->message = $request->message;
        $testimonial->visible = 0;
        $testimonial->save();

        // set flash message
        Session::flash('success', 'The testimonial was created succesfully');

        // redirect to index page
        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get testimonial
        $testimonial = Testimonial::find($id);

        // pass variable to view
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find testimonail
        $testimonial = Testimonial::find($id);

        // pass testimonial to view
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // get testimonial object
      $testimonial = Testimonial::find($id);

      // validate input
      $this->validate($request, [
          'author' => 'required | min:3 | max: 100',
          'role' => 'nullable | min:3 | max: 50',
          'description' => 'required | min:5 | max: 100',
          'message' => 'required | min:10 | max:2000'
      ]);

        // update testimonial values
      $testimonial->author = $request->author;
      $testimonial->role = $request->role;
      $testimonial->description = $request->description;
      $testimonial->message = $request->message;
      $testimonial->save();

      // set flash message
      Session::flash('success', 'The testimonial was updated succesfully');

      // redirect to index page
      return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get testimonial object
        $testimonial = Testimonial::find($id);

        // delete testimonial
        $testimonial->delete();

        // set flash message
        Session::flash('success', 'Testimonial was deleted succesfully.');

        // redirect to index page
        return redirect()->route('testimonials.index');
    }

    public function toggleVisible($id) {

        // find project
        $testimonial = Testimonial::find($id);

        if ($testimonial->visible) {
          $testimonial->visible = 0;

          // set flash message
          Session::flash('success', 'The testimonial is now hidden to users.');
        } else {
          $testimonial->visible = 1;
          // set flash message
          Session::flash('success', 'The testimonial is now visible to users.');
        }

        $testimonial->save();
        // redirect user
        return redirect()->route('testimonials.index');

    }

}

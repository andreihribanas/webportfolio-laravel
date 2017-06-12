<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Tag;
use App\ProjectImage;
use Session;
use Image;
use Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve all projects
        $projects = Project::paginate(20);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();
        return view('admin.projects.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // create new project object
        $project = new Project;

        // validate input data
        $this->validate($request, [
            'name' => 'required | min:3 | max:50',
            'description' => 'required | min:3 | max: 50',
            'content' => 'nullable | min:5 | max:5000',
            'type' => 'nullable | min:3 | max:100',
            'complexity' => 'nullable | integer | min:1 | max:5',
            'source_code' => 'nullable | url',
        ]);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->content = $request->content;
        $project->type = $request->type;
        $project->complexity = $request->complexity;
        $project->source_code = $request->source_code;
        $project->visible = 0;

        $project->save();

        // link tags to project
        $project->tags()->sync($request->tags, false);

        // set flash message
        Session::flash('success', 'The project was created succesfully.');

        // redirect to index page
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // grab project and pass the variable to the view
      $project = Project::find($id);
      return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // grab project to be edited
      $project = Project::find($id);

      // retrieve all categories and place them into an associative array
      $tags = Tag::all();
      $tags2 = array();
      foreach ($tags as $tag){
          $tags2[$tag->id] = $tag->name;
      }


      // bind product model data with the view
      return view('admin.projects.edit', compact('project', 'tags2'));
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

      // validate input data
      $this->validate($request, [
          'name' => 'required | min:3 | max:50',
          'description' => 'required',
          'content' => 'required | min:5 | max:5000',
          'type' => 'required',
          'complexity' => 'required | integer | min:1 | max:5',
          'source_code' => 'required | url'
      ]);

      $project = Project::find($id);
      $project->name = $request->name;
      $project->description = $request->description;
      $project->content = $request->content;
      $project->type = $request->type;
      $project->complexity = $request->complexity;
      $project->source_code = $request->source_code;
      $project->save();

      // link tags to project
      $project->tags()->sync($request->tags, true);

      // set flash message
      Session::flash('success', 'The project details were updated succesfully.');

      // redirect to index page
      return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find project
        $project = Project::find($id);

        // unsync tags linked to project
        $project->tags()->detach();

        // delete project
        $project->delete();

        // set flash Message
        Session::flash('success', 'The project was succesfully deleted');

        // send to index page
        return redirect()->route('projects.index');
    }

    public function toggleVisible($id) {

        // find project
        $project = Project::find($id);

        if ($project->visible) {
          $project->visible = 0;

          // set flash message
          Session::flash('success', 'The project is now hidden to users.');
        } else {
          $project->visible = 1;
          // set flash message
          Session::flash('success', 'The project is now visible to users.');
        }

        $project->save();
        // redirect user
        return redirect()->route('projects.index');

    }

    public function showImages($id){
        /// grab project
        $project = Project::find($id);
        $images = ProjectImage::all();
        return view('admin.projects.images', compact('project', 'images'));
    }

    public function uploadImages(Request $request) {

          $files = $request->file('images');

          if (!empty($files)) {
            foreach($files as $file) {
              $newImage = new ProjectImage();
              $newImage->project_id = $request->project_id;
              $newImage->filename = $file->getClientOriginalName();
              $newImage->save();
              Storage::disk('uploads')->put($file->getClientOriginalName(), file_get_contents($file));
            }
          }

        // set flash message
        Session::flash('success', 'Project images added succesfully.');

        // redirect to products
        return redirect()->route('projects.index');
    }
}

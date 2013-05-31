<?php

class ImageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('home');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
		    'image' => 'required|image'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
		    return Redirect::to('image/create')->withErrors($validator)->with('flash-error', 'Bitte überprüfe Deine Eingaben.')->withInput();
		}

		if (Input::hasFile('image')) {
		    /*$filepath = 'uploads';

		    // create random filename
		    $filename = Str::random(20) .'.'. File::extension(Input::file('image.originalName'));

		    // move uploaded file to public/uploads
		    Input::file('image')->move($filepath, $filename);

		    // if necessary, fix image orientation
		    $this->fixImageOrientation($filepath.'/'.$filename);

		    // save the image to the database
		    $image = new Image();
		    $image->fb_id = Input::get('fb_id');
		    $image->filename = $filename;
		    $image->save();*/
		}

		return Redirect::to('image')->with('flash-success', 'Ok')->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
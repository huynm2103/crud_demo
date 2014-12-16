<?php

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all students
        $students = Student::all();

        // Load the view and pass the students
        return View::make('students.index')->with('students', $students);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        // Redirect to view create
		return View::make('students.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'birth_day' => 'required|date',
            'sex' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('students/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $student = new Student();
            $student->name       = Input::get('name');
            $student->email      = Input::get('email');
            $student->birth_day = Input::get('birth_day');
            $student->sex = Input::get('sex');
            $student->save();

            // redirect
            Session::flash('message', 'Successfully added student!');
            return Redirect::to('students');
        }
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

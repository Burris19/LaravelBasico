<?php namespace Course\Http\Controllers\Admin;

use Course\Http\Requests;
use Course\Http\Controllers\Controller;

use Course\User;
use Course\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UsersProfilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = UserProfile::paginate(15);
        return view('admin.usersProfile.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $users = User::lists('first_name','id');
        return view('admin.usersProfile.create',compact('users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Redirector $redirect)
	{
        $userProfile = new UserProfile($request->all());
        $userProfile->save();
        return $redirect->route('admin.usersProfiles.index');
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

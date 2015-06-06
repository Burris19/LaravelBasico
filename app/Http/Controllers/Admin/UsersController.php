<?php namespace Course\Http\Controllers\Admin;

use Course\Http\Requests;
use Course\Http\Controllers\Controller;

use Course\User;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UsersController extends Controller {
/*
    protected $request;

    public function __construct(Request $request )
    {
        $this->request = $request;
    }
*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(15);
        return view('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Redirector $redirect)
	{
        $user = new User($request->all());
        $user->save();
        return $redirect->route('admin.users.index');
        // redirect()->route('admin.users.index');
        // \Redirect::route('admin.users.index');
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

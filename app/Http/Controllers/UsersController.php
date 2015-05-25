<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 20/05/15
 * Time: 11:51 PM
 */

namespace Course\Http\Controllers;


use Course\User;

class UsersController extends Controller
{

    public function getOrm()
    {
        $users = User::select('id','first_name')->with('profile')->get();
        dd($users->toArray()) ;
    }

/*
    public function getIndex()
    {
        $result = \DB::table('users')
            ->select(
                'users.*',
                'user_profiles.id as profile_id',
                'user_profiles.twitter',
                'user_profiles.birthdate'
            )
            ->orderBy('id','ASC')
            ->leftJoin('user_profiles','users.id','=','user_profiles.user_id')
            ->get();

        foreach ( $result as $row )
        {
            $row->full_name = $row->first_name . ' ' . $row->last_name;
            $row->age = \Carbon\Carbon::parse($row->birthdate)->age;
        }

        dd($result);

        //dd($result->first_name . ' ' . $result->last_name );
        return $result;
    }

*/


}
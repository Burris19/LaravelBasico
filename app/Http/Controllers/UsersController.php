<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 20/05/15
 * Time: 11:51 PM
 */

namespace Course\Http\Controllers;


class UsersController extends Controller
{

    public function getIndex()
    {
        $result = \DB::table('users')
            ->select(
                'users.*',
                'user_profiles.id as profile_id',
                'user_profiles.twitter'
            )
            ->orderBy('id','ASC')
            ->join('user_profiles','users.id','=','user_profiles.user_id')
            ->get();

        dd($result);
        return $result;
    }




}
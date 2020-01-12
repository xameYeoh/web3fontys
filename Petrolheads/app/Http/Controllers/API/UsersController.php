<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Validator;


class UsersController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return User::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}

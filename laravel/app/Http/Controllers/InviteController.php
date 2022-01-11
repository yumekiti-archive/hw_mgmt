<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invite;
use App\User;

class InviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::first();
        return $user->Invites()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        Auth::user()->create([
            'user_id' => Auth::user()->id,
            'token' => Str::random(80),
        ]);
      
    }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::first();
        $user->
        Invites()->
        where('invite_user_id','=',$id)->
        delete();
        return  $id;
    }

    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        Passport::refreshTokensExpireIn(now()->addDays(30));
    }

    public function invite($token)
    {
        $invite = Invite()->where('token', '=', $token);
        if($invite->firstOrFail()){
            $invite->update([
                'invite_user_id' => Auth::user()->id,
                'token' => null,
            ]);
            Auth::user()->invites()->create([
                'user_id' => Auth::user()->id,
                'invite_user_id' => $invite->user_id,
            ]);
        }
    }
}

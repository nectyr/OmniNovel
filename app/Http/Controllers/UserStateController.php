<?php

namespace App\Http\Controllers;

use App\Models\UserState;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            Auth::user()->state
        );
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
        UserState::updateOrCreate([
            'user_id' => Auth::user()->id,
        ],
            $request->all()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserState  $userState
     * @return \Illuminate\Http\Response
     */
    public function show(UserState $userState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserState  $userState
     * @return \Illuminate\Http\Response
     */
    public function edit(UserState $userState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserState  $userState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserState $userState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserState  $userState
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserState $userState)
    {
        //
    }
}

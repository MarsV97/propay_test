<?php

namespace App\Http\Controllers;

use App\Models\Interests;
use App\Models\Languages;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserDetailsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user-details.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user-details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $userDetails = UserDetails::where('id', $id)->first();

        return view('user-details.update', compact('userDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $userDetails)
    {
        $user = $userDetails->user;

        $userDetails->delete();

        if ($user) {
            $user->delete();
        }

        return redirect()->route('user-details.index')->with(
            'success',
            'User deleted successfully!'
        );
    }

}

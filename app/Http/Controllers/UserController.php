<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users =  User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users =  User::all();
        return view('admin.user.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        User::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)

        ]);
        return redirect("admin/user");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user =  User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $user =  User::find($request->id);
        $user->update($request->except(['_token','id']));
        return redirect("admin/user");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $user =  User::find($id);
        $user->delete();
        return redirect('admin/user');
    }
}
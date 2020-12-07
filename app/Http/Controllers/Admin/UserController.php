<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'ureg';
        $users = User::all()->where('role_id', 3);
        return view('admin.user.list.user', compact('pages', 'users'));
    }

    public function admin()
    {
        $ids = Auth::id();
        $pages = 'uadm';
        $admin = User::all()->where('role_id', 1)->where('id', '!=', $ids);
        return view('admin.user.list.admin', compact('pages', 'admin'));
    }

    public function creator()
    {
        $pages = 'ucrt';
        $creator = User::all()->where('role_id', 2);
        return view('admin.user.list.creator', compact('pages', 'creator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'uadd';
        $roles = Role::all();
        return view('admin.user.crud.create', compact('pages', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = 'uedt';
        $user = User::findOrFail($id);
        return view('admin.user.crud.edit', compact('pages', 'user'));
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
        //
    }

    public function deactivate(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update(['is_login' => '0', 'is_active' => '0']);
        return redirect()->back()->with('Success', 'User Deactivated');
    }

    public function activate(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update(['is_login' => '0', 'is_active' => '1']);
        return redirect()->back()->with('Success', 'User Activated');
    }
}

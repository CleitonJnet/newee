<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Church;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->paginate(10);

        return view('admin.office.user.index',compact('users'));
    }
    public function show($id)
    {
        $user = User::find($id);
        $teacherMain = $user->teacher;
        $teacherAux = $user->teacherA;
        $student = $user->events;
        $roles = $user->roles;

        return view('admin.office.user.show',compact('user','teacherMain','teacherAux','student','roles'));
    }
    public function create()
    {
        $churches = Church::orderBy('name')->get();
        return view('admin.office.user.create',compact('churches'));
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $user = User::find($id);
        $churches = Church::orderBy('name')->get();
        return view('admin.office.user.edit',compact('user','churches'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('user.show',$id);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
    public function destroy_show($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index');
    }
}

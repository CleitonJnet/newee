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

        return view('admin.office.user.show',compact('user'));
    }
    public function create()
    {
        $churches = Church::orderBy('name')->get();
        return view('admin.office.user.create',compact('churches'));
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return view('admin.office.user.index');
    }
}

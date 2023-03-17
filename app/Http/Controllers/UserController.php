<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register',$data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:tb_user',
            'fakultas' => 'required',
            'prodi' => 'required',
            'nim' => 'required|unique:tb_user',
            'nomor' => 'required',
        ]);
        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'nim' => $request->nim,
            'nomor' => $request->nomor,
        ]);
        $user->save();
        return redirect()->route('register')-> with('success','Registration Success');
    }
}

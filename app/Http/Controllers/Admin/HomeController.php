<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $user = $this->user->findOrFail(auth()->user()->id);
        if($request->has('old_password')) {
            if(!Hash::check($request->old_password, $user->password) || $request->password != $request->retype) {
                return redirect()->back();
            }
        }
        $data['password'] = bcrypt($request->password);
        $user->update($data);
        return redirect('admin/ganti-password');
    }
}

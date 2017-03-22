<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kodeine\Acl\Models\Eloquent\Role;
use App\User;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.index', ['usuarios' => User::all()]);
    }
    
    public function assignRoles(Request $request)
    {
        $usuario = User::where('email', $request['email'])->first();
        $roles = Role::select('slug')->get();
        foreach ($roles as $role) 
        {
            if ($request[($role->slug)])
            {
                if (!$usuario->hasRole($role->slug))
                    $usuario->assignRole($role->slug);
            }
            else
            {
                if ($usuario->hasRole($role->slug))
                    $usuario->revokeRole($role->slug);
            }
        }
        return redirect()->route('admin.index');
    }
}

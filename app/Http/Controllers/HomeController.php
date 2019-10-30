<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $permission = Role::create(['name'=>'superadmin']);

//        $role = Role::findById(4);
//
//        $permission = Permission::findById(3);
//
//        $role->givePermissionTo($permission);

//        $permission->removeRole($role);


//        auth()->user()->givePermissionTo('edit post');

//        auth()->user()->assignRole('editor');

//        return auth()->user->getAllPermissions();;

//        return User::role('editor')->get();

        return view('home');
    }
}

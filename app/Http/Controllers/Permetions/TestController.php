<?php

namespace App\Http\Controllers\Permetions;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class TestController extends Controller
{
    public function createRole()
    {
        // CREATE PERMITIONS
        $newPost = Permission::create(['name'   => 'New Post']);
        $editPost = Permission::create(['name'  => 'Edit Post']);
        $Category = Permission::create(['name' => 'category']);
        $Role = Permission::create(['name' => 'role']);

        // CREATE ROLE NAME ADMIN
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo($Category);
        $role->givePermissionTo($editPost);
        $role->givePermissionTo($newPost);

        Auth::user()->assignRole('editor');

        // ASSIGN PERMITION DIRECT TO USERS
        Auth::user()->givePermissionTo($newPost);
        Auth::user()->givePermissionTo($editPost);
        Auth::user()->givePermissionTo($Role);
        return \redirect()->back()->with('created Successfaly');
    }
}

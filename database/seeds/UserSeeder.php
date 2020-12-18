<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name'      => 'ahmed',
                'email'     => 'ahmed@gmail.com',
                'password'  => bcrypt('ahmed1191'),
                'roles-name'=> ['suberAdmin'],
                'status'    => 'active'
            ]);

            

                $role = Role::create(['name' => 'suberAdmin']);
                $permissions = Permission::pluck('id','id')->all();
                $role->syncPermissions($permissions);
                $user->assignRole([$role->id]);
    }
}

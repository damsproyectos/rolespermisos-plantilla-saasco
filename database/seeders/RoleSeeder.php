<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //video 227
        //Roles
        // $role1 = Role::create(['name' => 'Admin']);
        // $role2 = Role::create(['name' => 'Editor']);

        //Post
        // Permission::create(['name' => 'editor.post.index']);
        // Permission::create(['name' => 'editor.post.show']);
        // Permission::create(['name' => 'editor.post.create']);
        // Permission::create(['name' => 'editor.post.update']);
        // Permission::create(['name' => 'editor.post.destroy']);


        //Category
        // Permission::create(['name' => 'editor.category.index']);
        // Permission::create(['name' => 'editor.category.show']);
        // Permission::create(['name' => 'editor.category.create']);
        // Permission::create(['name' => 'editor.category.update']);
        // Permission::create(['name' => 'editor.category.destroy']);


        //User
        // Permission::create(['name' => 'editor.user.index']);
        // Permission::create(['name' => 'editor.user.show']);
        // Permission::create(['name' => 'editor.user.create']);
        // Permission::create(['name' => 'editor.user.update']);
        // Permission::create(['name' => 'editor.user.destroy']);

        //video 228
        // Permission::find(1)->assignRole(Role::find(1));
        // Permission::find(1)->assignRole(Role::find(2));

        // $role2 = Role::find(2);

        //Solo es de referencia
        // Permission::find(1)->assignRole($role2);
        // Permission::find(2)->assignRole($role2);
        // Permission::find(3)->assignRole($role2);
        // Permission::find(4)->assignRole($role2);
        // Permission::find(5)->assignRole($role2);
        // Permission::find(6)->assignRole($role2);
        // Permission::find(7)->assignRole($role2);
        // Permission::find(8)->assignRole($role2);
        // Permission::find(9)->assignRole($role2);
        // Permission::find(10)->assignRole($role2);
        // Permission::find(11)->assignRole($role2);
        // Permission::find(12)->assignRole($role2);
        // Permission::find(13)->assignRole($role2);
        // Permission::find(14)->assignRole($role2);
        // Permission::find(15)->assignRole($role2);

        //video 229
        $role2 = Role::find(2);

        $permission1 = Permission::find(1);
        $permission2 = Permission::find(2);
        $permission3 = Permission::find(3);
        $permission4 = Permission::find(4);
        $permission5 = Permission::find(5);
        $permission6 = Permission::find(6);
        $permission7 = Permission::find(7);
        $permission8 = Permission::find(8);
        $permission9 = Permission::find(9);
        $permission10 = Permission::find(10);
        $permission11 = Permission::find(11);
        $permission12 = Permission::find(12);
        $permission13 = Permission::find(13);
        $permission14 = Permission::find(14);
        $permission15 = Permission::find(15);

        $role2->givePermissionTo($permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8, $permission9, $permission10, $permission11, $permission12, $permission13, $permission14, $permission15);

    }
}

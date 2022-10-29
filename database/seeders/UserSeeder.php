<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Owner User
        $owner = User::create([
            'name' => 'Owner',
            'email' => 'owner@eats.lk',
            'password' => bcrypt('12345678')
        ]);
        $ownerrole = Role::create(['name' => 'Owner']);
        $ownerrole->givePermissionTo('fooditem-list', 'fooditem-create', 'fooditem-edit', 'fooditem-delete');
        $owner->assignRole([$ownerrole->id]);

        // Basic User
        $customeruser = User::create([
            'name' => 'Customer',
            'email' => 'customer@eats.lk',
            'password' => bcrypt('12345678')
        ]);
        $customerrole = Role::create(['name' => 'Customer']);
        $customerrole->givePermissionTo('fooditem-list', 'fooditem-create', 'fooditem-edit', 'fooditem-delete');
        $customeruser->assignRole([$customerrole->id]);
    }
}

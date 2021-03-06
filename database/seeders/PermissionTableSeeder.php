<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'basic-user',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'fooditem-list',
            'fooditem-create',
            'fooditem-edit',
            'fooditem-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

<?php

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::where('id', '>', '0')->delete();

        Role::insertOrIgnore([
            'name' => 'owner',
            'guard_name' => 'web',
        ]);

        Role::insertOrIgnore([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
    }
}

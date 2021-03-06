<?php

namespace Modules\Admin\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUserTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Backend\SuperAdmin;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $superadmin=SuperAdmin::create([
            "username"=>"prabinkatuwal",
            "email"=>"superadmin@gmail.com",
            "password"=>bcrypt('11111111')
        ]);
    }
}

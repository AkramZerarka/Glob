<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Super Admin';
        $user->email = 'admin@admin.site';
        $user->password = bcrypt('secret');
        $user->save();
    }
}

<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->name = 'Md Rasel Ahmed';
        $user->email = 'admin@test.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}

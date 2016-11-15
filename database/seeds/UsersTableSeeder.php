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
//        DB::table('users')->insert([
//            'name' => 'Benny Alves Ryuuzaki',
//            'email' => 'beny@gmail.com',
//            'password' => 'secret',
//        ]);
//        DB::table('users')->delete();

        User::create(array(
            'name'     => 'Bernardo Alves',
            'email'    => 'beny.alves@gmail.com',
            'password' => Hash::make('123456'),
        ));
    }
}

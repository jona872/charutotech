<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory('App\User', 50)->create()->each(function($u) {
        $u->posts()->save(factory('App\Post')->make());
    });	
        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail22.com',
            'password' => bcrypt('secret'),
        ]);*/ 
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *     
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
				'id'=> '1',
				'name'=> 'panhao',
				'email'=> 'horn.pan@gmail.com',
				'password'=>Hash::make('jiu'),
        	]);
    }
}

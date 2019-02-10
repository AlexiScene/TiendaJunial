<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array (
        	[
        		'name' => 'Alexis',
        		'last_name' => 'Aciar',
        		'email' => 'aciaralexis@gmail.com',
        		'user' => 'AlexiScene',
        		'password' => \Hash::make('1234567'),
        		'type' => 'admin',
        		'active' => 1,
        		'address' => 'Venezuela 171',
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,
        	],
        	[
        		
        		'name' => 'Roman',
        		'last_name' => 'Riquelme',
        		'email' => 'JRR10@gmail.com',
        		'user' => 'JRR10',
        		'password' => \Hash::make('1234567'),
        		'type' => 'user',
        		'active' => 1,
        		'address' => 'Sarmiento 562',
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,
        	],
        );

        User::insert($data);
    }
}

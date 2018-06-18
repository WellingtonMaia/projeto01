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
    	User::create([
    		'name'      => 'Wellington Henrique',
    		'email'		=> 'wellington.henrique@engeselt.com.br',
    		'password'	=>  bcrypt('123456'),
    	]);
        User::create([
            'name'      => 'João Silva',
            'email'     => 'joao.silva@hotmail.com',
            'password'  =>  bcrypt('123456'),
        ]);
    }
}

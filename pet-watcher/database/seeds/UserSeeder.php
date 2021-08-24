<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=> 'joao',
            'email'=>'joao@gmail.com',
            'password'=>bcrypt('123456'),
            'tipo_conta' => '0',
        ]);
    }
}

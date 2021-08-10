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
        //

        User::create([
            'name' => 'a',
            'cpf'=>'123',
            'telefone'=>'123',
            'endereco'=>'123',
            'email'=>'a@b',
            'password'=>'a'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Evandro Oliveira',
            'email'  =>  'evandro.oliveira@edu.unipar.br',
            'password' => bcrypt('123456'),
            'biography' => 'Usuário Fulano de Tal',
        ]);
    }
}

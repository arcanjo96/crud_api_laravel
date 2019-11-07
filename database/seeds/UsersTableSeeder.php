<?php

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
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Lucas",
            'email' => 'lucas@teste.com',
            'cpf' => '12312312312',
            'phone' => '82 999999999',
            'status' => 'Não Validado',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'skill_id' => 1
        ]);
    }
}

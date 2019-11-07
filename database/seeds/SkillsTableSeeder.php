<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        $skills = [
            ['id' => 1, 'name' => 'Gerência de Projetos', 'created_at' => now()->format('Y-m-d H:i:s')],
            ['id' => 2, 'name' => 'Controle Financeiro', 'created_at' => now()->format('Y-m-d H:i:s')],
            ['id' => 3, 'name' => 'Controle de Estoque', 'created_at' => now()->format('Y-m-d H:i:s')],
            ['id' => 4, 'name' => 'Desenvolvimento Front End', 'created_at' => now()->format('Y-m-d H:i:s')],
            ['id' => 5, 'name' => 'Banco de Dados', 'created_at' => now()->format('Y-m-d H:i:s')],
            ['id' => 6, 'name' => 'Desenvolvimento Back End', 'created_at' => now()->format('Y-m-d H:i:s')],
            ['id' => 7, 'name' => 'DevOps', 'created_at' => now()->format('Y-m-d H:i:s')],
        ];

        foreach($skills as $skill) {
            DB::table('skills')->insert($skill);
        }
    }
}

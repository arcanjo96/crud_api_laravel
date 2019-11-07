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
            ['id' => 1, 'name' => 'Gerência de Projetos'],
            ['id' => 2, 'name' => 'Controle Financeiro'],
            ['id' => 3, 'name' => 'Controle de Estoque'],
            ['id' => 4, 'name' => 'Desenvolvimento Front End'],
            ['id' => 5, 'name' => 'Banco de Dados'],
            ['id' => 6, 'name' => 'Desenvolvimento Back End'],
            ['id' => 7, 'name' => 'DevOps'],
        ];

        foreach($skills as $skill) {
            DB::table('skills')->insert($skill);
        }
    }
}

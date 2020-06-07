<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'id' => 1,
            'name' => 'Разработчик',
            'department_id' => 1
        ]);
        DB::table('positions')->insert([
            'id' => 2,
            'name' => 'Начальник отдела',
            'department_id' => 1
        ]);
        DB::table('positions')->insert([
            'id' => 3,
            'name' => 'Дизайнер',
            'department_id' => 1
        ]);
        DB::table('positions')->insert([
            'id' => 4,
            'name' => 'Тестировщик',
            'department_id' => 1
        ]);
        DB::table('positions')->insert([
            'id' => 5,
            'name' => 'Менеджер по продажам',
            'department_id' => 2
        ]);
        DB::table('positions')->insert([
            'id' => 6,
            'name' => 'Аккаунт-менеджер',
            'department_id' => 2
        ]);
        DB::table('positions')->insert([
            'id' => 7,
            'name' => 'Проект-менеджер',
            'department_id' => 3
        ]);
        DB::table('positions')->insert([
            'id' => 8,
            'name' => 'Менеджер по продвижению',
            'department_id' => 4
        ]);
    }
}

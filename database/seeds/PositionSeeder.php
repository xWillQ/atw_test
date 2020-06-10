<?php

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'id' => 1,
            'name' => 'Разработчик',
            'department_id' => 1
        ]);
        Position::create([
            'id' => 2,
            'name' => 'Начальник отдела',
            'department_id' => 1
        ]);
        Position::create([
            'id' => 3,
            'name' => 'Дизайнер',
            'department_id' => 1
        ]);
        Position::create([
            'id' => 4,
            'name' => 'Тестировщик',
            'department_id' => 1
        ]);
        Position::create([
            'id' => 5,
            'name' => 'Менеджер по продажам',
            'department_id' => 2
        ]);
        Position::create([
            'id' => 6,
            'name' => 'Аккаунт-менеджер',
            'department_id' => 2
        ]);
        Position::create([
            'id' => 7,
            'name' => 'Проект-менеджер',
            'department_id' => 3
        ]);
        Position::create([
            'id' => 8,
            'name' => 'Менеджер по продвижению',
            'department_id' => 4
        ]);
    }
}

<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'id' => 1,
            'name' => 'Отдел разработки'
        ]);
        Department::create([
            'id' => 2,
            'name' => 'Отдел продаж'
        ]);
        Department::create([
            'id' => 3,
            'name' => 'Отдел управления проектами'
        ]);
        Department::create([
            'id' => 4,
            'name' => 'Отдел продвижения'
        ]);
    }
}

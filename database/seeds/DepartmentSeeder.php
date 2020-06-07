<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'id' => 1,
            'name' => 'Отдел разработки'
        ]);
        DB::table('departments')->insert([
            'id' => 2,
            'name' => 'Отдел продаж'
        ]);
        DB::table('departments')->insert([
            'id' => 3,
            'name' => 'Отдел управления проектами'
        ]);
        DB::table('departments')->insert([
            'id' => 4,
            'name' => 'Отдел продвижения'
        ]);
    }
}

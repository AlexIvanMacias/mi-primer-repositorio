<?php

use Illuminate\Database\Seeder;

class rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['descripcion' => 'Docente'],
            ['descripcion' => 'Aprendiz'],
            
        ];
        DB::table('rol')->insert($data);
    }
}

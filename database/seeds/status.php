<?php

use Illuminate\Database\Seeder;

class status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['descripcion' => 'Aprobado'],
            ['descripcion' => 'Rechazado'],
            
        ];
        DB::table('status')->insert($data);
    }
}

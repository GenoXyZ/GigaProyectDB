<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Tipo_EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['Mouse','Teclado,','Cables','Computador','Cargador','Sonido'];
        $faker=Faker::Create();
        for($i=0;$i<=5;$i++){
            DB::table('tipo_equipos')->insert([
                'nombre_tipo_equipo'=>$data[$i],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Tipo_VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['Motocicleta','Carro','Bicicleta'];
        $faker=Faker::Create();
        for($i=0;$i<=2;$i++){
            DB::table('tipo_vehiculos')->insert([
                'nombre_tipo_vehiculo'=>$data[$i],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}

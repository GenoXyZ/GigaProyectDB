<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Pas_Servicio;
use App\Tipo_Vehiculo;
use App\Parqueadero;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pas_servicio=Pas_Servicio::all()->pluck('id_pas_servicio')->toArray();
        $tipo_vehiculo=Tipo_Vehiculo::all()->pluck('id_tipo_vehiculo')->toArray();
        $parqueadero=Parqueadero::all()->pluck('id_parqueadero')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=60;$i++){
            DB::table('vehiculos')->insert(array(
                'placa'=>$faker->ein,
                'marca'=>$faker->company,
                'descripcion'=>$faker->sentence,
                'estado'=>$faker->boolean,
                'fk_pas_servicio'=>$faker->randomElement($pas_servicio),
                'fk_tipo_vehiculo'=>$faker->randomElement($tipo_vehiculo),
                'fk_parqueadero'=>$faker->randomElement($parqueadero),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

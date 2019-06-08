<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Parqueadero;


class Pas_ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parqueadero=Parqueadero::all()->pluck('id_parqueadero')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=39;$i++){
            DB::table('pas_servicios')->insert(array(
                'fk_parqueadero'=>$faker->randomElement($parqueadero),
                'hora_entrada'=>$faker->datetime,
                'hora_salida'=>$faker->datetime,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ));
        }
    }
}

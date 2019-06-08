<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Egresado;
use App\Pregunta;


class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $egresado=Egresado::all()->pluck('id_egresado')->toArray();
        $pregunta=Pregunta::all()->pluck('id_pregunta')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=20;$i++){
            DB::table('respuestas')->insert(array(
                'respuesta'=>$faker->sentence,
                'fk_pregunta'=>$faker->randomElement($pregunta),
                'fk_egresado'=>$faker->randomElement($egresado),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

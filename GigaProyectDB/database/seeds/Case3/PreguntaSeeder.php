<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Encuesta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $encuesta=Encuesta::all()->pluck('id_encuesta')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=9;$i++){
            DB::table('preguntas')->insert(array(
                'pregunta'=>$faker->sentence,
                'fk_encuesta'=>$faker->randomElement($encuesta),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

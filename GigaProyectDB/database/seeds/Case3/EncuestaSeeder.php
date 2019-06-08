<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Institucion;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institucion=Institucion::all()->pluck('id_institucion')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=24;$i++){
            \DB::table('encuestas')->insert(array(
                'nombre_encuesta'=>$faker->word,
                'proposito'=>$faker->sentence,
                'descripcion'=>$faker->sentence,
                'fk_institucion'=>$faker->randomElement($institucion),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

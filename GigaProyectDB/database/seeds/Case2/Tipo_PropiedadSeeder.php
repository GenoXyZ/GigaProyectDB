<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Tipo_PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::Create();
        for($i=0;$i<=4;$i++){
            DB::table('tipo_propiedades')->insert(array(
                'nombre_tipo_propiedad'=>$faker->word,
                'descripcion'=>$faker->sentence,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ));
        }
    }
}

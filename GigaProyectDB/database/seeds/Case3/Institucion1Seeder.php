<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Institucion1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::Create();
        for($i=0;$i<=14;$i++){
            DB::table('instituciones')->insert(array(
                'nombre_institucion'=>$faker->company,
                'NIT'=>$faker->ean8,
                'telefono'=>$faker->e164PhoneNumber,
                'direccion'=>$faker->address,
                'descripcion'=>$faker->sentence,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

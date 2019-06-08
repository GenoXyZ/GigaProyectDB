<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Equipo_SoporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::Create();
        for($i=0;$i<=3;$i++){
            DB::table('equipo_soporte')->insert(array(
                'telefono'=>$faker->e164PhoneNumber,
                'horario_inicio'=>$faker->time,
                'horario_fin'=>$faker->time,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ParqueaderoSeeder extends Seeder
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
            DB::table('parqueaderos')->insert(array(
                'horario_inicio'=>$faker->datetime,
                'horario_fin'=>$faker->datetime,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

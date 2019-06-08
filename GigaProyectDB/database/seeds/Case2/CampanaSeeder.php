<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Campana;
use App\Banco;

class CampanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_campana=Tipo_Campana::all()->pluck('id_tipo_campana')->toArray();
        $banco=Banco::all()->pluck('id_banco')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=9;$i++){
            DB::table('campanas')->insert(array(
                'nombre_campana'=>$faker->company,
                'fk_tipo_campana'=>$faker->randomElement($tipo_campana),
                'fk_banco'=>$faker->randomElement($banco),
                'proposito'=>$faker->sentence,
                'descripcion'=>$faker->sentence,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

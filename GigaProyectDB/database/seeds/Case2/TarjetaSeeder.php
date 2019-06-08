<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Tarjeta;
use App\Banco;


class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_tarjeta=Tipo_Tarjeta::all()->pluck('id_tipo_tarjeta')->toArray();
        $banco=Banco::all()->pluck('id_banco')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=9;$i++){
            DB::table('tarjetas')->insert(array(
                'nombre_tarjeta'=>$faker->word,
                'fk_tipo_tarjeta'=>$faker->randomElement($tipo_tarjeta),
                'fk_banco'=>$faker->randomElement($banco),
                'cuota_manejo'=>$faker->numberBetween($min=10000,$max=100000),
                'ingresos_minimos'=>$faker->numberBetween($min=1000000,$max=10000000),
                'cupo_minimo'=>$faker->numberBetween($min=1000000,$max=10000000),
                'cupo_maximo'=>$faker->numberBetween($min=1000000,$max=10000000),
                'tasa_efectiva_mensual'=>$faker->randomFloat(2,0,10),
                'tasa_efectiva_anual'=>$faker->randomFloat(2,0,10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

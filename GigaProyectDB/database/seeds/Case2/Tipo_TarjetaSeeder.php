<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Tipo_TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::Create();
        $data=['Débito','Crédito','Otro'];
        for($i=0;$i<=2;$i++){
            \DB::table('tipo_tarjetas')->insert(array(
                'nombre_tipo_tarjeta'=> $data[$i],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ));
        }
    }
}

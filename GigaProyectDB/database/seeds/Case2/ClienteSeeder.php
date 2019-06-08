<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Genero;
use App\Tipo_Documento;
use App\Tarjeta;
use App\Propiedad;
use App\Banco;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero=Genero::all()->pluck('id_genero')->toArray();
        $tipo_documento=Tipo_Documento::all()->pluck('id_tipo_documento')->toArray();
        $tarjeta=Tarjeta::all()->pluck('id_tarjeta')->toArray();
        $propiedad=Propiedad::all()->pluck('id_propiedad')->toArray();
        $banco=Banco::all()->pluck('id_banco')->toArray();        
        $faker=Faker::Create();
        for($i=0;$i<=34;$i++){
            DB::table('clientes')->insert(array(
                'nombres'=>$faker->name,
                'apellidos'=>$faker->lastname,
                'documento'=>$faker->ean8,
                'fk_tipo_documento'=>$faker->randomElement($tipo_documento),
                'fk_genero'=>$faker->randomElement($genero),
                'fk_tarjeta'=>$faker->randomElement($tarjeta),
                'fk_propiedad'=>$faker->randomElement($propiedad),
                'fk_banco'=>$faker->randomElement($banco),
                'correo'=>$faker->email,
                'direccion'=>$faker->address,
                'ingresos_mensuales'=>$faker->numberBetween($min=1000000,$max=10000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }

    }
}

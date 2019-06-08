<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Documento;
use App\Genero;
use App\Vehiculo;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_documento=Tipo_Documento::all()->pluck('id_tipo_documento')->toArray();
        $genero=Genero::all()->pluck('id_genero')->toArray();
        $vehiculo=Vehiculo::all()->pluck('id_vehiculo')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=30;$i++){
            DB::table('usuarios')->insert(array(
                'nombres'=>$faker->name,
                'apellidos'=>$faker->lastname,
                'documento'=>$faker->ean8,
                'fk_tipo_documento'=>$faker->randomElement($tipo_documento),
                'edad'=>$faker->numberBetween($max=150),
                'fk_genero'=>$faker->randomElement($genero),
                'fk_vehiculo'=>$faker->randomElement($vehiculo),
                'telefono'=>$faker->e164PhoneNumber,
                'correo'=>$faker->email,
                'direccion'=>$faker->address,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

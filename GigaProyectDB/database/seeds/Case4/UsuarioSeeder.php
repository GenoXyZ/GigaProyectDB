<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Documento;
use App\Genero;
use App\Rol_Usuario;


class UsuarioSeeder extends Seeder
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
        $rol_usuario=Rol_Usuario::all()->pluck('id_rol_usuario')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=30;$i++){
            DB::table('usuarios')->insert(array(
                'nombres'=>$faker->name,
                'apellidos'=>$faker->lastname,
                'documento'=>$faker->ean8,
                'fk_tipo_documento'=>$faker->randomElement($tipo_documento),
                'edad'=>$faker->numberBetween($max=150),
                'fk_genero'=>$faker->randomElement($genero),
                'fk_rol_usuario'=>$faker->randomElement($rol_usuario),
                'telefono'=>$faker->e164PhoneNumber,
                'correo'=>$faker->email,
                'direccion'=>$faker->address,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

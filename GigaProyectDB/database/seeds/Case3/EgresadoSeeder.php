<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Documento;
use App\Genero;
use App\Institucion;
use App\Nivel_Educativo;

class EgresadoSeeder extends Seeder
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
        $institucion=Institucion::all()->pluck('id_institucion')->toArray();
        $nivel_educativo=Nivel_Educativo::all()->pluck('id_nivel_educativo')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=24;$i++){
            \DB::table('egresados')->insert(array(
                'nombres'=>$faker->name,
                'apellidos'=>$faker->lastname,
                'documento'=>$faker->ean8,
                'fk_tipo_documento'=>$faker->randomElement($tipo_documento),
                'edad'=>$faker->numberbetween($max=150),
                'fk_genero'=>$faker->randomElement($genero),
                'fk_institucion'=>$faker->randomElement($institucion),
                'fk_nivel_educativo'=>$faker->randomElement($nivel_educativo),
                'telefono'=>$faker->e164PhoneNumber,
                'correo'=>$faker->email,
                'direccion'=>$faker->address,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

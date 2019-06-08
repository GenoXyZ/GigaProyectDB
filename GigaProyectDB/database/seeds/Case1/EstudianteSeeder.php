<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Curso;
use App\Genero;
use App\Institucion;
use App\Tipo_Documento;




class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::all()->pluck('id_curso')->toArray();
        $genero = Genero::all()->pluck('id_genero')->toArray();
        $tipo_documento = Tipo_Documento::all()->pluck('id_tipo_documento')->toArray();
        $institucion = Institucion::all()->pluck('id_institucion')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=20;$i++){
            \DB::table('estudiantes')->insert(array(
                'nombres'=>$faker->name,
                'apellidos'=>$faker->lastname,
                'documento'=>$faker->ean8,
                'fk_tipo_documento'=>$faker->randomElement($tipo_documento),
                'fk_genero'=>$faker->randomElement($genero),
                'edad'=>$faker->numberBetween($min=0, $max=150),
                'fk_institucion'=>$faker->randomElement($institucion),
                'fk_curso'=>$faker->randomElement($curso),
                'correo'=>$faker->email,
                'telefono'=>$faker->e164PhoneNumber ,
                'direccion'=>$faker->address,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

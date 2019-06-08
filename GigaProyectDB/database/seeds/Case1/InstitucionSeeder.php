<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Institucion;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_institucion = Tipo_Institucion::all()->pluck('id_tipo_institucion')->toArray();
        $faker=Faker::Create();
        for($i=0; $i<=9; $i++){
            \DB::table('instituciones')->insert(array(
                'nombre_institucion'=>$faker->company,
                'NIT'=>$faker->ean8,
                'fk_tipo_institucion'=>$faker->randomElement($tipo_institucion),
                'caracter'=>$faker->sentence,
                'enfasis'=>$faker->sentence,
                'correo_institucional'=>$faker->email,
                'telefono'=>$faker->e164PhoneNumber,
                'direccion'=>$faker->address,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

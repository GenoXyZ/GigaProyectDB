<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Institucion;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institucion = Institucion::all()->pluck('id_institucion')->toArray();
        $data =["Transición","Primero","Segundo","Tercero","Cuarto","Quinto","Sexto","Séptimo","Octavo","Noveno","Décimo","Once"];
        $faker=Faker::Create();
        for($i=0;$i<=11;$i++){
            \DB::table('cursos')->insert(array(
                'nombre_curso' => $data[$i],
                'fk_institucion'=> $faker->randomElement($institucion),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

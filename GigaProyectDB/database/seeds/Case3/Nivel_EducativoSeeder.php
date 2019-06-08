<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Nivel_EducativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::Create();
        $data=['Auxiliar','Técnico','Tecnólogo','Profesional','Licenciado','Profesional','Ingeniero','Especializado','Maestría','Doctorado'];
        for($i=0;$i<=8;$i++){
            DB::table('niveles_educativos')->insert(['nombre_nivel_educativo'=>$data[$i],'created_at' => Carbon::now(),'updated_at' => Carbon::now()]);
        }
    }
}

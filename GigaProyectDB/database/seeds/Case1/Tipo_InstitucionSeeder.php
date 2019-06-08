<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Tipo_InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=["Público","Privado","Concertado","Otro"];
        for($i=0; $i<=3; $i++){
            DB::table('tipo_instituciones')->insert(['nombre_tipo_institucion'=> $data[$i],'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        }
    }
}

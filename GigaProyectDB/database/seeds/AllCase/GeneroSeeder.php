<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =["Masculino","Femenino","Otro"];
        for($i=0;$i<=2;$i++){
            DB::table('generos')->insert(['nombre_genero' => $data[$i],'created_at' => Carbon::now(),'updated_at' => Carbon::now()]);
        }
    }
}

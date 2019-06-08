<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Tipo_DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =["TI","CC","DNI"];
        for($i=0;$i<=2;$i++){
            DB::table('tipo_documentos')->insert(['nombre_tipo_documento' => $data[$i],'created_at' => Carbon::now(),'updated_at' => Carbon::now()]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Rol_UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['Instructor','Estudiante'];
        $faker=Faker::Create();
        for($i=0;$i<=1;$i++){
            DB::table('rol_usuarios')->insert([
                'rol_usuario'=>$data[$i],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}

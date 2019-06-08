<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Equipo;


class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_equipo=Tipo_Equipo::all()->pluck('id_tipo_equipo')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=9;$i++){
            Db::table('equipos')->insert(array(
                'descripcion'=>$faker->sentence,
                'fk_tipo_equipo'=>$faker->randomElement($tipo_equipo),
                'estado'=>$faker->boolean,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ));
        }
    }
}

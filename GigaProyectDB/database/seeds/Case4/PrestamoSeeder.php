<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Equipo;
use App\Usuario;
use App\Equipo_Soporte;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipo_soporte=Equipo_Soporte::all()->pluck('id_equipo_soporte')->toArray();
        $equipo=Equipo::all()->pluck('id_equipo')->toArray();
        $usuario=Usuario::all()->pluck('id_usuario')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=19;$i++){
            Db::table('prestamos')->insert(array(
                'descripcion'=>$faker->sentence,
                'hora_inicial'=>$faker->datetime,
                'hora_final'=>$faker->datetime,
                'fk_equipo_soporte'=>$faker->randomElement($equipo_soporte),
                'fk_equipo'=>$faker->randomElement($equipo),
                'fk_usuario'=>$faker->randomElement($usuario)
            ));
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tipo_Propiedad;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_propiedad=Tipo_Propiedad::all()->pluck('id_tipo_propiedad')->toArray();
        $faker=Faker::Create();
        for($i=0;$i<=19;$i++){
            DB::table('propiedades')->insert(array(
                'nombre_propiedad'=>$faker->word,
                'fk_tipo_propiedad'=>$faker->randomElement($tipo_propiedad),
                'valor_propiedad'=>$faker->numberBetween($min=10000,$max=1000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }
}

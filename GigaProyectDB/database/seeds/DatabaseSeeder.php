<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeders AllCase //

        $this->call('GeneroSeeder');
        $this->call('Tipo_DocumentoSeeder');

        // Seeders Case1 //

        // $this->call('Tipo_InstitucionSeeder');
        // $this->call('InstitucionSeeder'); 
        // $this->call('CursoSeeder');
        // $this->call('EstudianteSeeder');

        //Seeders Case2 //

        // $this->call('Tipo_TarjetaSeeder');
        // $this->call('Tipo_CampanaSeeder');
        // $this->call('Tipo_PropiedadSeeder');
        // $this->call('BancoSeeder');
        // $this->call('CampanaSeeder');
        // $this->call('TarjetaSeeder');
        // $this->call('PropiedadSeeder');
        // $this->call('ClienteSeeder');

        // Seeders Case3 //

        // $this->call('Nivel_EducativoSeeder');
        // $this->call('Institucion1Seeder'); // Change for Case1 //
        // $this->call('EgresadoSeeder');
        // $this->call('EncuestaSeeder');
        // $this->call('PreguntaSeeder');
        // $this->call('RespuestaSeeder');

        // Seeders Case4 //

        // $this->call('Rol_UsuarioSeeder');
        // $this->call('Tipo_EquipoSeeder');
        // $this->call('EquipoSeeder');
        // $this->call('Equipo_SoporteSeeder');
        // $this->call('PrestamoSeeder');
        // $this->call('UsuarioSeeder');

        // Seeders Case5 //

        $this->call('Tipo_VehiculoSeeder');
        $this->call('ParqueaderoSeeder');
        $this->call('Pas_ServicioSeeder');
        $this->call('VehiculoSeeder');
        $this->call('UsuariosSeeder'); // Change for Case4 //
    }
}

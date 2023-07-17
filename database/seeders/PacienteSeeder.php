<?php
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class PacienteSeeder extends Seeder
    {
        public function run()
        {
            DB::table('pacientes')->insert([
                'id' => '1',
                'nombres' => 'Geraldin',
                'apellidos' => 'Villarreal',
                'fecha_nacimiento' => '03/08/2006',
                'direccion' => 'Belen',
                'telefono' => '3124489562',
                'id_medico' => '1',
                // Otros campos de pacientes
            ]);

            // Agrega más registros de pacientes aquí...
        }
    }
?>
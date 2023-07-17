<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class MedicoSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run()
            {
                DB::table('medicos')->insert([
                    'id_medico' => '1',
                    'nombres' => 'Guillermo',
                    'apellidos' => 'Carrascal',
                    'fecha_nacimiento' => '13/10/1997',
                    'direccion' => 'Parnaso',
                    'telefono' => '3004969886',
                    'especialidad' => 'Medico General',
                    'id_contrato' => '1',
                    // Otros campos de pacientes
                ]);

                // Agrega más registros de pacientes aquí...
            }
    }
?>

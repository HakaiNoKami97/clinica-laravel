<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class HistorialSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run()
            {
                DB::table('historiales')->insert([
                'id' => '1',
                'id_paciente' => '1',
                'id_enfermedad' => '1',
                    // Otros campos de pacientes
                ]);

                // Agrega más registros de pacientes aquí...
            }
    }
?>

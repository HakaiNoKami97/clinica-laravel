<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class TipoContratoSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run()
            {
                DB::table('tipos_contrato')->insert([
                    'id' => '1',
                    'nombre' => 'Consulta Medica',
                    // Otros campos de pacientes
                ]);

                // Agrega más registros de pacientes aquí...
            }
    }
?>

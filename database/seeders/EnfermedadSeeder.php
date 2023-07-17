<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class EnfermedadSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run()
            {
                DB::table('enfermedades')->insert([
                'id' => '1',
                'nombre' => 'Gripa',
                'afecta' => 'Garganta',
                'descripcion' => 'Es una enfermedad infecciosa aguda, que afecta al aparato respiratorio y produce también una serie de síntomas generales característicos.',
                    // Otros campos de pacientes
                ]);

                // Agrega más registros de pacientes aquí...
            }
    }
?>

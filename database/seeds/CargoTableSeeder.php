<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {

            switch ($i) {
                case 1:
                    $nome = 'Assistente';
                    break;
                case 2:
                    $nome = 'Diretor';
                    break;
                case 3:
                    $nome = 'Motorista';
                    break;

                default:
                    $type = 'Não informado';
                    $nome;
            }

            factory(App\Cargo::class, 1)->create([
                'nome'       => $nome,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}

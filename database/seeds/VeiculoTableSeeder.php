<?php

use Illuminate\Database\Seeder;

class VeiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Veiculo::class, 50)->create();
    }
}

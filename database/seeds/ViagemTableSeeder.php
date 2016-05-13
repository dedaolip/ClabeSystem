<?php

use Illuminate\Database\Seeder;

class ViagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Viagem::class, 50)->create();
    }
}

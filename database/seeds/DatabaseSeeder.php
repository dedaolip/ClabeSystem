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
        // $this->call(UsersTableSeeder::class);
        $this->call(CargoTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(FuncionarioTableSeeder::class);
    }
}

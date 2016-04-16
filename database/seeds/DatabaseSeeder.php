<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CarsTableSeeder');
        // $this->call(UsersTableSeeder::class);
        // $this->call(DiaDiemTableSeeder::class);
        // $this->call(PricesTableSeeder::class);
        //$this->call(CustomersTableSeeder::class);

        Model::reguard();
    }
}

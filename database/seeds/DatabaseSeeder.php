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

        // $this->call(AgencyAddressTableSeeder::class);
        // $this->call(CartypesTableSeeder::class);
        // $this->call(CustomerAddressTableSeeder::class);
        $this->call(DiaDiemTableSeeder::class);
        // $this->call(TinTucTableSeeder::class);
        // $this->call(CarsTableSeeder::class);
        // $this->call(CustomersTableSeeder::class);
        // $this->call(AgencyTableSeeder::class);
        //$this->call(BookingTableSeeder::class);
        // $this->call(CommentTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(VoteTableSeeder::class);
        //$this->call(PricesTableSeeder::class);

        Model::reguard();
    }
}

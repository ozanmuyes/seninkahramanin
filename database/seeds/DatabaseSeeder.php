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

        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(AddressesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(OrdersTableSeeder::class);

        // $this->call(SlidersTableSeeder::class);
        // $this->call(ImagesTableSeeder::class);

        Model::reguard();
    }
}

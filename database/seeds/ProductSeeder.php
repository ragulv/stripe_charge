<?php

use Illuminate\Database\Seeder;
use App\products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'TV',
                'price' => '36000.00',
                'description' => 'This is a brand new smart TV',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Chair',
                'price' => '400.00',
                'description' => 'This is a plastic chair',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Laptop',
                'price' => '50000.00',
                'description' => 'This is a brand new Laptop',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        // products::factory()->count(3)->create();
    }
}

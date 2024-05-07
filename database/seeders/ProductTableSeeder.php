<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condition = ['Baru', 'Bekas'];
        for ($i=0; $i <5; $i++) {
            DB::table('products')->insert([
               'name' => 'product'. $i,
               'price' => rand(1000, 100000),
               'stock' => rand(1, 100),
               'weight' => rand(1, 10),
               'image' => 'https://source.unspash.com/featured/150X200',
               'condition' => $condition[rand(0, 1)],
               'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, placeat quasi  ipsa labore reprehenderit quos autem non, impedit odit nihil iusto debitis similique voluptas qui, provident repellat earum fugit. Nam.',  
               'created_at' => now(),
               'updated_at' => now(),  
             ]);
        }
    }
}

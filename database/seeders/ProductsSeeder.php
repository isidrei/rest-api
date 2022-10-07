<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Blonde Album',
            'description' => 'Made by Frank Ocean',
            'currency' => 'PHP',
            'price' => 800.00,
            'brand' => 'Blonde',
            'category' => 'Album',
            'image' => 'https://preview.redd.it/sbbgz064d5kz.jpg?auto=webp&s=1a10658235fc5dc98799680931fdb6d32ea4c416',
        ]);

        DB::table('products')->insert([
            'title' => 'Travis Scott Jordan 1',
            'description' => 'Made by Travis Scott',
            'currency' => 'PHP',
            'price' => 9000.00,
            'brand' => 'Jordan',
            'category' => 'shoes',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmJoqbdZEqcCOELJ7JEImSqQzgSFF_IbF7DQ&usqp=CAU'
        ]);

        DB::table('products')->insert([
            'title' => 'Supreme x LV',
            'description' => 'Collaboration between LV and Supreme',
            'currency' => 'PHP',
            'price' => 9000.00,
            'brand' => 'Supreme',
            'category' => 'shirt',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3ZwEQTaMV6xq0Dt2NJpWn2rlzbt3JVzfQkEROXYkgJipFqv2RDyZrEKGGKrzNxZ-6fs4&usqp=CAU'
        ]);
    }
}
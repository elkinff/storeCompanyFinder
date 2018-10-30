<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    
    public function run(){
        $this->call(BrandsSeeder::class);
        $this->call(ClothingsSeeder::class);
    }
}

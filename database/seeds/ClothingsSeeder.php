<?php

use Illuminate\Database\Seeder;

class ClothingsSeeder extends Seeder{
    
    public function run(){
        DB::table("clothings")->insert([
        	["id" => 1, "name" => "denim"],
        	["id" => 2, "name" => "pants"],
        	["id" => 3, "name" => "sweaters"],
        	["id" => 4, "name" => "skirts"],
        	["id" => 5, "name" => "dresses"]
        ]);
    }
}

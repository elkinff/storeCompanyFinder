<?php

use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder{
    
    public function run(){
        DB::table("brands")->insert([
        	["id" => 1, "name" => "gap"],
        	["id" => 2, "name" => "banana"],
            ["id" => 3, "name" => "republic"],
        	["id" => 4, "name" => "boss"],
        	["id" => 5, "name" => "hugo"],
        	["id" => 6, "name" => "taylor"],
        	["id" => 7, "name" => "rebecca"]
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Clothing;

class HomeController extends Controller{
    
    public function find(Request $request){
    	$search = $request->search;
    	$brands = Brand::all();
    	$clothings = Clothing::all();
    	$words = explode(" ", $search);
    	$wordFinal = array();

    	foreach ($words as $key => $word){
    		if ($brands->contains("name", strtolower($word))){
    			$wordFinal[$key] = "<b>".$word."</b>";
    		}elseif ($clothings->contains("name", strtolower($word))) {
    			$wordFinal[$key] = "<i>".$word."</i>";
    		}else{
				$wordFinal[$key] = $word;
    		}
    	}

    	$succession = implode(" ", $wordFinal);
    	
    	return view("welcome", compact("succession", "search"));
    }
}

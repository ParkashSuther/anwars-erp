<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnwarsController extends Controller
{
   public function add_customer(Request $req)
   {
   		print_r($req->all());
   	  	return "hi";
   }
}

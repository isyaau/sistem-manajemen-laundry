<?php

namespace App\Controllers;

class Visi extends BaseController
{
    public function index()
    {
    	$data = [
    		'title' =>'visi | SIA'

    	];
       return view ('visi/index', $data);
    }
     public function create()
    {
    	$data = [
    		'title' =>'Visi| SIA'

    	];
       return view ('visi/create', $data);
    }
}
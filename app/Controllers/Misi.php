<?php

namespace App\Controllers;

class Misi extends BaseController
{
    public function index()
    {
    	$data = [
    		'title' =>'misi | SIA'

    	];
       return view ('misi/index', $data);
    }
     public function create()
    {
    	$data = [
    		'title' =>'Misi| SIA'

    	];
       return view ('misi/create', $data);
    }
}
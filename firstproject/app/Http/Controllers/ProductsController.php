<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
    	$data = [
    		'title' => "Laravel Course",
    		'descriptop' => "Practic on laravel 8"
    	];

    	// // Using Comact to pass data
    	// return view('index', compact('data'));

    	// // using with topass data
    	// return view('index')->with('data' , $data);

    	// pass data directorlly
    	return view('index' , [
    		'data' => $data
    	]);
    }
    public function about() {
    	return "welcome tp about pages";
    }

    public function show($id) {
    	$data = [
    		'iphone' => 'iPhone',
    		'samsung' => 'Samsung'
    	];

    	return view('index', [
    		'data' => $data[$id] ?? "Product ".$id." does not exists"
    	]);
    }

}

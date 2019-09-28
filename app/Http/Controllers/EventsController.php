<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show($id)
    {
    	$data=[
    		'name' => 'Laravel Hacking and Coffee',
    		'date' => date('Y-m-d')
    	];
    	return view('events.show')->with($data);
    }
    public function category($category, $subcategory = "all"){
    	dd("Category: {$category} SubCategory:{$subcategory}");
    }
    public function index(){
    	$events=[
    		'Laravel Hacking and Coffee',
    		'IoT with Raspberry Pi',
    		'Free VueJS Lessons'
    	];
    	return view('events.index') -> with ('events', $events);
    }
}

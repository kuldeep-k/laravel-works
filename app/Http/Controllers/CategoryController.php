<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
      $links = \App\Category::paginate(2);
      echo '<pre>';
      print_r($links);
      return view('categories.index', ['links' => $links]);
    }
}

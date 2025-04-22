<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryKopi;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = CategoryKopi::getAllCategories();
    return view('categories.index', compact('categories'));
  }
}

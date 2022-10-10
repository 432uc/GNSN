<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class IndexController extends Controller
{
  public function func() {
    return view('index');
  }
}
<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class IndexController extends Controller
{
  public function func() {
    return view('index');
  }    

  public function index()
  {
      $NormalPrayers = DB::select('select * from mtb_NormalPrayer');
      return view("index")->with("NormalPrayers",$NormalPrayers);
  }
}
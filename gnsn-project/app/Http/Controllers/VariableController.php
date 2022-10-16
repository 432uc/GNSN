<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class VariableController extends Controller
{
    // class名など省略
    public function test(){
        // 連想配列を用意
        $user = array(
            'id' => 0,
            'name' => 'テストさん',
            'gender' => '男性', 
        );
        return view('test', compact('user')); // user変数をbladeに送る、$マークがいらない。    
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = array();

        // データ格納
        $data['name'] = 'yuuki';
        $data['message'] = 'こんにちは';
    
        // 現在日時
        date_default_timezone_set('Asia/Tokyo');
        $data['today'] = date('Y年m月d日 H:i:s');
    
        return view('hello', $data);
    }
}

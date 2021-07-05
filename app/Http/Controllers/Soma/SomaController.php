<?php

namespace App\Http\Controllers\Soma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SomaController extends Controller
{
    public function soma(string $operation ,int $v1, int $v2 ){
        switch($operation){
            case 'soma':
                
                $operationName = 'soma';
                $result = $v1 + $v2;
               
                break;
        }
        
        return view('soma',
        [
        'operationName'=> $operationName,
        'v1'=> $v1, 
        'v2'=> $v2,
        'result' => $result
        ]);
    }
}

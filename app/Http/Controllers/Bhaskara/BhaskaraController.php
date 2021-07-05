<?php

namespace App\Http\Controllers\Bhaskara;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BhaskaraController extends Controller
{
    public function bhaskara(string $operation ,int $v1, int $v2){
        switch($operation){
            case 'bhaskara':
                


                $a = 1;
                $b = -5;
                $c = 6;
                //Delta
                $delta = ($b*$b)-((4*$a)*$c);
                //Equação
                $x1 = (-$b + sqrt ($delta)) / (2 * $a);
                $x2 = (-$b - sqrt ($delta)) / (2 * $a);
                
                
                
                $operationName = 'bhaskara';
                $delta = $v1 + $v2;
                $result = $v1 - $v2;
                break;
        }
        if($result >= 0){
            echo "Possui raízes reais";
        }
        else{
            echo "Não possui raízes reais";
        }
        return view('bhaskara',
        [
        'operationName'=> $operationName,
        'v1'=> $v1, 
        'v2'=> $v2,
        'delta' => $delta,
        'result' => $result
        ]);
    }
}

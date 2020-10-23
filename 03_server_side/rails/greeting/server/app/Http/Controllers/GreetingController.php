<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show1($greeting)
    {
        switch($greeting) {
        case 'morning':
            $time_zone = "朝の挨拶";
            $greeting = 'おはようございます';
        break;
            
        case 'afternoon':
            $time_zone = "昼の挨拶";
            $greeting ='こんにちは';
        break;
        
        case 'evening':
            $time_zone = "夕方の挨拶";
            $greeting ='こんばんは';
        break;
        
        case 'night':
            $time_zone ='夜の挨拶';
            $greeting ='おやすみ';
        break;
        
        default:
        echo '間違ってます';
        break;
        }

        return view('greeting.show1', ['time_zone' => $time_zone, 'greeting' => $greeting]);
    }


    public function show2($word)
    {
        return view ('greeting.show2', ['word'=>$word]);  
    }


    public function show3()
    {
        $greetings = ['おはよう','こんにちは','こんばんは','おやすみ'];        
        return view ('greeting.show3', ['greetings'=>$greetings[array_rand($greetings)]]);
    }
}

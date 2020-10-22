<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show($greeting)
    {
        switch($greeting) {
        case 'morning':
            $greeting1 = "朝の挨拶";
            $greeting2 = 'おはようございます';
        break;
            
        case 'afternoon':
            $greeting1 = "昼の挨拶";
            $greeting2 ='こんにちは';
        break;
        
        case 'evening':
            $greeting1 = "夕方の挨拶";
            $greeting2 ='こんばんは';
        break;
        
        case 'night':
            $greeting1 ='夜の挨拶';
            $greeting2 ='おやすみ';
        break;
        
        default:
        echo '間違ってます';
        break;
        }

        return view('greeting.show', ['greeting1' => $greeting1, 'greeting2' => $greeting2]);

    }


    public function show1($fight)
    {
        
        return view ('greeting.show1', ['fight'=>$fight]);
        
    }


    public function show2()
    {

        $greetings = array('おはよう' => 0,'こんにちは' => 1,'こんばんは' => 2,'おやすみ' =>3);
        $rand_greeting = array_rand($greetings, 1);
        
        return view ('greeting.show2', ['rand_greeting'=>$rand_greeting]);

    }


}

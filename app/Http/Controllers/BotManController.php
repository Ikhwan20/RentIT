<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;


class BotManController extends Controller
{
    public function index()
    {
        $botman = app('botman');
        $botman->hears('Hi',function($bot)
        {
            
            $bot->ask('Please Enter your Name',function(Answer $answer)
            {
                $this->fname = $answer->getText();
                $this->say('Nice to meet you ' .$this->fname);
                $this->ask('What can i help you? Choose 1 - 5 if your question is on the list' , function(Answer $answer)
                {
                    $this->chs = $answer->getInt();
                    if(chs=='1')
                    {
                        $this->say('Our platform is to help renteer and renter to rent our their utilities ');
                    }
                });
            });
        });
        
        
        $botman->listen();
    }

    

    
}
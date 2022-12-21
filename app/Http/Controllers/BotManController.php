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
        
       $botman->fallback(function($bot)
       {
            $message = $bot->getMessage();
            $bot->reply('Sorry i do not understand this message :  '. $message->getText());
            $bot->reply('To use this chatBot, please enter : start');
       });
       $botman->hears('start', function($bot,$start)
       {
            $bot->ask('Please enter your name?' .function(Answer $answer)
            {
                $this->fname=$answer->getText();
                $this->say('Nice to meet you '. $this->fname);
                $this->ask('What can we help you? Please Choose 1 until 5 '. function(Answer $answer)
                {
                    $this->chs = $answer->getText();
                    if($answer == '1')
                        $botman->reply("Our company policy is to ensure our renter and rentee can rent out their utilities through our platform safely");
                    elseif($answer == '2')
                        $botman->reply("No, our company do not provide any delivery service for user");
                    elseif($answer == '3')
                        $botman->reply("Any type of delivery service is allowed , but our company is not responsible for it");
                    elseif($answer == '4')
                        $botman->reply("Our based company is at University Teknologi Malaysia , Skudai");
                    elseif($answer == '5')
                        $botman->reply("You can refer to our FAQ to see if your item can be rent out through our platform");
                    else
                        $botman->reply("You can contanct our customer service hepline for any inquiry : 011-37318975");
                });
            });
       });

        
        $botman->listen();
    }

    

    
}
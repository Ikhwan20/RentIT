<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Http\Controllers\Controller;

class BotManController extends Controller
{
    public function index()
    {
        $botman = app('botman');

        $botman->fallback(function($bot)
       {
            $bot->reply('Sorry, I do not understand this message. Please select one of the options below:');
            $botman->reply('1. What are your hours of operation?<br>
                    2. How can I contact customer support?<br>
                    3. What is your return policy?<br>
                    4. How do I rent equipment?<br>
                    5. What types of equipment do you offer?<br>
                    6. How do I pay for my rental?<br>
                    7. Other inquiries');
       });
        $botman->hears('{option}', function($botman, $option)
       {
            switch ($option) {
                case '1':
                    $botman->reply('Our hours of operation are Monday-Friday 9am-5pm EST.');
                    break;
                case '2':
                    $botman->reply('You can contact customer support by emailing support@example.com or by calling 555-555-5555.');
                    break;
                case '3':
                    $botman->reply('Our return policy is as follows:');
                    $botman->reply('- Items must be returned within 30 days of purchase.');
                    $botman->reply('- Items must be in original condition and packaging.');
                    $botman->reply('- Refunds will be issued in the original form of payment.');
                    break;
                case '4':
                    $botman->reply('You can rent equipment by visiting our website and browsing our inventory. Once you have selected the equipment you would like to rent, you can add it to your cart and proceed to checkout.');
                    break;
                case '5':
                    $botman->reply('We offer a wide range of equipment for rent including:');
                    $botman->reply('- Generators');
                    $botman->reply('- Air compressors');
                    $botman->reply('- Power tools');
                    $botman->reply('- Construction equipment');
                    $botman->reply('- And more!');
                    break;
                case '6':
                    $botman->reply('You can pay for your rental by credit card or debit card.');
                    break;
                case '7':
                    $botman->ask('What other inquiries do you have?', function(Answer $answer) {
                        $botman->reply('Thank you for your inquiry. We will get back to you as soon as possible.');
                    });
                    break;
                default:
                    $botman->reply('Please select one of the options below:');
                    $botman->reply('1. What are your hours of operation?<br>
                    2. How can I contact customer support?<br>
                    3. What is your return policy?<br>
                    4. How do I rent equipment?<br>
                    5. What types of equipment do you offer?<br>
                    6. How do I pay for my rental?<br>
                    7. Other inquiries');
                    break;
                }
           });
            
            $botman->listen();
        }
    }
<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer as IncomingAnswer;
use BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()

    {

        $botman = app('botman');

  

        $botman->hears('{message}', function($botman, $message) {
            $checkfor = ['mark', 'credit', 'indigene', 'semester', 'lectures', 'fee', 'hostel', 'acceptance', 'admission'];


            if ($message == 'hi' OR $message == 'Hi' OR $message == 'hello') {

                $this->askName($botman);

            }
            elseif(strpos($message, $checkfor[0]) !== false){
                $botman->reply('https://schoolings.org/federal-polytechnic-ilaro-cut-off-mark-for-all-course-201718-academic-session/#:~:text=ILARO%20POLY%20CUT%2DOFF%20MARK,the%20prospective%20students%20or%20applicants.');
            }
            elseif(strpos($message, $checkfor[1]) !== false){
                $botman->reply('Minimum of 6 credit');
            }
            elseif(strpos($message, $checkfor[2]) !== false){
                $botman->reply('The admission of student into Federal polytechni, ilaro is not limited to student indigine of the state but outsiders as well');
            }
            elseif(strpos($message, $checkfor[3]) !== false){
                $botman->reply('Semester runs for the period of 4 months');
            }
            elseif(strpos($message, $checkfor[4]) !== false){
                $botman->reply("Lectures are well organize with conducive learning environment");
            }
            elseif(strpos($message, $checkfor[5]) !== false){
                $botman->reply("School fees ranges from 40 - 120 per semester, and it can be paid once into banks specify by the school authority");
            }
            elseif(strpos($message, $checkfor[6]) !== false){
                $botman->reply("Hostel are available for student who will love to live within the school premises, and it must be booked after your acceptance payment");
            }
            elseif(strpos($message, $checkfor[7]) !== false){
                $botman->reply("Kindly, keep checking the school website for payment of acceptance fee, https://federalpolyilaro.edu.ng/");
            }
            elseif(strpos($message, $checkfor[8]) !== false){
                $botman->reply("Kindly, keep checking the school website for admission update, https://federalpolyilaro.edu.ng/");
            }
            // elseif($message == 'hey man'){
            //     $botman->reply('hello');
            // }
            // elseif($message == 'hey man'){
            //     $botman->reply('hello');
            // }
            else{

                $botman->reply("write 'hi' for testing...");

            }


        });

  

        $botman->listen();

    }

  

    /**

     * Place your BotMan logic here.

     */

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(IncomingAnswer $answer) {
            $name = $answer->getText();
             $this->say('How can I help you'.$name);
          
        });

    }
    public function thanks()
    {
        $this->say('Thank you');
    }
}
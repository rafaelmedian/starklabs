<?php

namespace App\Http\Controllers;

use App\Bot;
use App\Mail\Bot as BotMail;
use App\Mail\BotEmail;

use App\Customer;
use App\BotTypes;
use App\Mail\Customer as CustomerMail;

use function dd;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;


class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("bot.index", compact("types"));
    }

    /**
     * Create the bot.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */


    public function create(Request $request)
    {
        /** Add a form validation
        // @see https://laravel.com/docs/5.4/validation
        */
        $this->validate($request, [
            "type" => 'required',
            "estimated_budget" =>'required',
            "description" =>'required',
            "full_name" =>'required',
            "email" =>'required',
            "location" =>'required'
        ]);

        /**
         * Models:
         * @see https://laravel.com/docs/5.4/eloquent
         */

//        $typeString = implode(", ", $request->get('type'));
        // $typeString should return a value of 'chatbot, workflow, custom' check it out just in case.
        // You can probably do something with $request->merge() to cut down on individual values in the array and cut down on the code here.




        // Create the bot
        $bot = new Bot();
        $bot->estimated_budget = $request->estimated_budget;
        $bot->description = $request->description;
        $bot->save();

        // Create the bot types
        foreach($request->type as $type) {
            $botType = new BotTypes();
            $botType->bot_id = $bot->id;
            $botType->type = $type;
            $botType->save();
        }

        // Create the customer
        $customer = new Customer();
        $customer->bot_id = $bot->id;
        $customer->full_name = $request->full_name;
        $customer->company_name = $request->company_name;
        $customer->email = $request->email;
        $customer->location = $request->location;
        $customer->save();

        $this->sendEmail($bot, $customer);

        return redirect('bot/thank-you');
    }

    public function thankYou()
    {
        return view("bot/thank-you");
    }

    public function sendEmail($bot, $customer) {
        Mail::to($customer)->send(new BotEmail($bot, $customer));
    }
}

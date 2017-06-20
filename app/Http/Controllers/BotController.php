<?php

namespace App\Http\Controllers;

use App\Bot;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("bot.index");
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
            "company_name" =>'required',
            "email" =>'required',
            "location" =>'required'
        ]);

        /**
         * Models:
         * @see https://laravel.com/docs/5.4/eloquent
         */
        // Create the bot
        $bot = new Bot();
        $bot->type = $request->type;
        $bot->estimated_budget = $request->estimated_budget;
        $bot->description = $request->description;
        $bot->save();

        // Create the customer
        $customer = new Customer();
        $customer->bot_id = $bot->id;
        $customer->full_name = $request->full_name;
        $customer->company_name = $request->company_name;
        $customer->email = $request->email;
        $customer->location = $request->location;
        $customer->save();

        return redirect('bot/thank-you');
    }

    public function thankYou()
    {
        return view("bot.thank-you");
    }
}

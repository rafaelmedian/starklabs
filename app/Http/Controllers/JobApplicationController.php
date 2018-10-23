<?php

namespace App\Http\Controllers;

use App\JobApplication;
use App\Mail\JobApplication as JobApplicationMail;

use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("jobapplication.index");
    }

    /**
     * Create the job application.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        /** Add a form validation
        // @see https://laravel.com/docs/5.4/validation
        */
        $this->validate($request, [
            "full_name" => 'required',
            "years_experience" =>'required',
            "email" =>'required',
            "location" =>'required',
            "portfolio" =>'required',
            "hourly_rate" =>'required',
            "availability" =>'required'
        ]);

        /**
         * Models:
         * @see https://laravel.com/docs/5.4/eloquent
         */
        // Create the job_applications
        $jobApplication = new jobApplication();
        $jobApplication->full_name = $request->full_name;
        $jobApplication->years_experience = $request->years_experience;
        $jobApplication->email = $request->email;
        $jobApplication->location = $request->location;
        $jobApplication->hourly_rate = $request->hourly_rate;
        $jobApplication->portfolio = $request->portfolio;
        $jobApplication->availability = $request->availability;
        $jobApplication->description = $request->description;
        $jobApplication->save();

        $this->sendEmail($jobApplication);

        return redirect('jobapplication/thank-you');
    }

    public function thankYou()
    {
        return view("jobapplication/thank-you");
    }

    public function sendEmail($jobApplication) {
        
        Mail::to("hello@rafaelmedina.me")->send(new JobApplicationMail($jobApplication)); 
    }
}

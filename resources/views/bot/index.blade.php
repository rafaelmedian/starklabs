@extends('layout')

<header class="w-100 bg-white bg-right pv3">
  @include('layouts.navbar')
</header>

<section class="mt5 mw8 w-100 center ph3-m ph2-l">
    <div class="mb5 pa3 pa0-l">
        <h1 class="mb2">Tell us your needs.</h1>
        <p>Hire our top-notch team of developers to bring AI and chatbots to your organization.</p>
    </div>

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach

    <form method="POST" action="/bot/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="f5 b db mb2">What whould you like to build?</label>
            <div class="dt">
                <div class="fl tc w-100 w-30-ns ba br3 bw2 b--black-10 pa4 ma2 ml0-l">
                    <img class="db center" src="{{ url('/dist/img/icon_bot.svg')}}"  alt="">
                    <input type="radio" value="1" name="type" required></input>
                    <h4 class="mb1">Custom Chatbot</h4>
                    <p>A customized chatbot build to fit your needs</p>
                </div>
                <div class="fl tc w-100 w-30-ns ba br3 bw2 b--black-10 pa4 ma2">
                    <img class="db center" src="{{ url('/dist/img/icon_workflow.svg')}}"  alt="">
                    <input class="ba1 pa4" type="radio" value="2" name="type" required></input>
                    <h4 class="mb1">Workflow Automation</h4>
                    <p>A workflow automation build around the apps your use</p>
                </div>
                <div class="fl tc w-100 w-30-ns ba br3 bw2 b--black-10 pa4 ma2">
                    <img class="db center" src="{{ url('/dist/img/icon_custom.svg')}}" alt="">
                    <input class="ba1 pa4" type="radio" value="3" name="type" required></input>
                    <h4>A specific need</h4>
                    <p>Create AI applications to fit your specific case</p>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <div class="w-80 w-40-l dt pa3 pl0-l">
                <label class="f5 b db mb2">What's your stimated budget?</label>
                <select class="measure input-reset ba br3 bw2 b--black-10 pa2 ph3 mb2 db w-100 " required name="estimated_budget">
                    <option value="1">200 - 500</option>
                    <option value="2">500 - 700</option>
                    <option value="3">700 - 900</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="fl w-100 w-80-l dt mb4 pa3 pl0-l">
                <label for="comment" class="f5 b db mb2">Project Details</label>
                <textarea id="comment" class="input-reset ba br3 bw2 b--black-10 pa1 ph3 pt3 pb6 mb2 br2 w-100" name="description" required aria-describedby="comment-desc" placeholder="Tell us about any additional project details that we should know"></textarea>
                <!-- <small id="comment-desc" class="f6 black-60">Helper text for a form control. Can use this text to <a href="#" class="link underline black-80 hover-blue">link to more info.</a></small> -->
            </div>
        </div>

        <div class="form-group mb6">
            <div class="w-100 dt">
                <div class="fl w-100 w-40-l pa3 pl0-l">
                    <label for="full_name" class="f5 b db mb2">Full Name</label>
                    <input id="full_name" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="full_name" type="text" aria-describedby="name-desc" placeholder="Jhon Smith">
                    <!-- <small id="name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
                </div>
                <div class="fl w-100 w-40-l pa3 pl0-l ml1-ns">
                    <label for="company_name" class="f5 b db mb2">Company Name</label>
                    <input id="company_name" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="company_name" type="text" aria-describedby="company_name-desc" placeholder="Company Inc.">
                    <!-- <small id="company_name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
                </div>
            </div>

            <div class="w-100 dt mb4">
                <div class="fl w-100 w-40-l pa3 pl0-l">
                    <label for="email" class="f5 b db mb2">Email</label>
                    <input id="email" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="email" type="email" aria-describedby="email-desc" placeholder="example@gmail.com">
                    <!-- <small id="email-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
                </div>
                <div class="fl w-100 w-40-l pa3 pl0-l ml1-ns">
                    <label for="location" class="f5 b db mb2">What's your location?</label>
                    <input id="location" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="location" type="text" aria-describedby="location-desc" placeholder="United States">
                    <!-- <small id="location-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
                </div>
            </div>

            <div class="pa3 pa0-l">
                <button type="submit" class="f6 f5-ns dib br-pill ba ph4 pl3-m pv2 cta">Get started with your project <img class="ml2" src="{{ url('/dist/img/r-arrow.svg')}}"  alt=""></button>
            </div>
        </div>
    </form>
</section>

@include('layouts.footer')

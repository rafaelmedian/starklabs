@extends('layout')

@section('content')

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach

    <form method="POST" action="/bot/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Job Application</label>
            <div class="form-group">
                <div>
                    <input type="radio" value="1" name="type" required> Custom Chatbot
                </div>
                <div>
                    <input type="radio" value="2" name="type" required> Workflow Automation
                </div>
                <div>
                    <input type="radio" value="3" name="type" required>  A specific need
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>What's your stimated budget?</label>
            <select class="form-control" required name="estimated_budget">
                <option value="1">200 - 500</option>
                <option value="2">500 - 700</option>
                <option value="3">700 - 900</option>
            </select>
        </div>

        <div class="form-group">
            <label>Tell us about any additional project details that we should knowDescription</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>

        <div class="form-group">
            <div>
                <label>Full name</label>
                <input class="form-control" type="text" name="full_name">
            </div>

            <div>
                <label>Company Name</label>
                <input class="form-control" type="text" name="company_name">
            </div>

            <div>
                <label>Email</label>
                <input class="form-control" type="email" name="email">
            </div>

            <div>
                <label>What's your location?</label>
                <input class="form-control" type="location" name="location">
            </div>
        </div>

        <button type="submit" class="btn btn-default">Get started with your project</button>
    </form>

@endsection

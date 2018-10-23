<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Job Application</h3>
    <p><b>Name:</b> {{ $jobApplication->full_name }}</p>
    <p><b>Years of Experience:</b>  {{ $jobApplication->years_experience }}</p>
    <p><b>Email address:</b>  {{ $jobApplication->email }}</p>
    <p><b>Location:</b>  {{ $jobApplication->location }}</p>
    <p><b>Hourly rate:</b>  {{ $jobApplication->hourly_rate }}</p>
    <p><b>Portfolio site:</b>  {{ $jobApplication->portfolio }}</p>
    <p><b>Availability:</b>  {{ $jobApplication->availability }}</p>
    <p><b>Description:</b>  {{ $jobApplication->description }}</p>
</body>
</html>

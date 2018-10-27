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
    <p><b>Name:</b> {{ $full_name }}</p>
    <p><b>Years of Experience:</b>  {{ $years_experience }}</p>
    <p><b>Email address:</b>  {{ $email }}</p>
    <p><b>Location:</b>  {{ $location }}</p>
    <p><b>Hourly rate:</b>  {{ $hourly_rate }}</p>
    <p><b>Portfolio site:</b>  {{ $portfolio }}</p>
    <p><b>Availability:</b>  {{ $availability }}</p>
    <p><b>Description:</b>  {{ $description }}</p>
</body>
</html>

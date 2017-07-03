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
    <h3>Hi {{ $jobApplication->full_name }}</h3>
    <p> {{ $jobApplication->full_name }}</p>
    <p> {{ $jobApplication->years_experience }}</p>
    <p> {{ $jobApplication->email }}</p>
    <p> {{ $jobApplication->location }}</p>
    <p> {{ $jobApplication->hourly_rate }}</p>
    <p> {{ $jobApplication->portfolio }}</p>
    <p> {{ $jobApplication->availability }}</p>
    <p> {{ $jobApplication->description }}</p>
</body>
</html>

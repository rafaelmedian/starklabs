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
    <h3>Bot development request</h3>
    <h3>Type of bot {{ $bot->type }} </h3>
    <p><b>Budget:</b>  {{ $bot->estimated_budget }} </p>
    <p><b>Description:</b> {{ $bot->description }} </p>
    <p><b>Name:</b> {{ $customer->full_name }} </p>
    <p><b>Company name:</b> {{ $customer->company_name }} </p>
    <p><b>Email:</b> {{ $customer->email }}</p>
    <p><b>Location:</b> {{ $customer->location }}</p>
</body>
</html>

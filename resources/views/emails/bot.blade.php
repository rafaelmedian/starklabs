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
    <h3>Hi {{ $bot->type }} </h3>
    <p> {{ $bot->estimated_budget }} </p>
    <p> {{ $bot->description }} </p>
    <p> {{ $customer->full_name }} </p>
    <p> {{ $customer->company_name }} </p>
    <p> {{ $customer->email }}</p>
    <p> {{ $customer->location }}</p>
</body>
</html>

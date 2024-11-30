<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('routes.store') }}">
        
        <p>craete a create a new bus name</p>
        <input name="name" id="" cols="30" rows="10"></input>
        <input name="bus_capacity" id="" cols="30" rows="10"></input>
        <input name="route_id" id="" cols="30" rows="10"></input>
        <button>create</button>
</body>
</html>
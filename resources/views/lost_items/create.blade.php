<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('lost_items.store') }}">
        @csrf
        <p>create a lost item</p>
        <p>route id</p>
        <p><input name="route_id" type="number"></p>
        <p>route name</p>
       <p> <input name="name" id="" cols="30" rows="10"></input></p>
       <p>title of lost item</p>
       <p>  <input name="title" id="" cols="30" rows="10"></input> <p> 
        <p>description of lost item</p>
        <p>  <input name="description" id="" cols="30" rows="10"></input> <p> 
            <p>current status of lost item</p>
       <p>  <input name="status" id="" cols="30" rows="10"></input> <p> 
        <p>when was it lost</p>
        <p>  <input name="lost_at" type="datetime-local" value="{{ old('lost_at') }}"> <p> 



        <button>create</button>
</body>
</html>
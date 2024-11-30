<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('pickUpPoint.store') }}">
        @csrf
        <p>craete a pick_up_point</p>
        <p>pickup point name</p>
       <p> <input name="name" id="" cols="30" rows="10"></input></p>
       <p>the latitude</p>
      <p>  <input name="latitude" id="" cols="30" rows="10"></input></p>
      <p>longitude</p>
       <p><input name="logitude" id="" cols="30" rows="10"></input></p> 
        <button>create</button>
</body>
</html>
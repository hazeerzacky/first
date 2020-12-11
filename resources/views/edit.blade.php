<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/update" method="post">
@csrf <!--CSRF protection middleware can validate the request. For convenience, 
you may use the @csrf Blade directive to generate the hidden token input field:-->
<label>Id: </label>
<input type="text" name = 'id' value="{{$d->id}}" readonly><br>
    <label>Name: </label>
    <input type="text" name="name" value="{{$d->name}}"/>
    <label>Number: </label>
    <input type="number" name="number" value="{{$d->number}}"/><br>
    <label>Age: </label>
    <input type="number" name="age" value="{{$d->age}}"/><br>
    <label>Email: </label>
    <input type="email" name="email" value="{{$d->email}}"/><br>

    <input type="submit" value="Update"/>
</form>

</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/send" method="post">
@csrf <!--CSRF protection middleware can validate the request. For convenience, 
you may use the @csrf Blade directive to generate the hidden token input field:-->
    <label>Name: </label>
    <input type="text" name="name"/>
    <label>Number: </label>
    <input type="number" name="number"/>
    <label>Age: </label>
    <input type="number" name="age"/>
    <label>Email: </label>
    <input type="email" name="email"/>

    <input type="submit" value="Submt"/>
</form>


    
</body>
</html>
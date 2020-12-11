<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
    <a href="/add">Add Contact</a>
    <table border ="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Age</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
     @foreach($a as $cnt)
     <tr>
        <td>{{$cnt->name}}</td>
        <td>{{$cnt->number}}</td>
        <td> {{$cnt->email}}</td>
        <td> {{$cnt->age}}</td>
        <td><a href="{{route('delete', $cnt->id)}}">Delete</a></td>
        <td><a href="{{route('edit',['id' => $cnt->id])}}">Edit</a></td>
    </tr>
    @endforeach
        </tbody>
    </table>
    
    @if($msg = session()->get('msg'))
    <p>{{ session()->get('msg') }}</p>
    
@endif
   
</body>
</html>
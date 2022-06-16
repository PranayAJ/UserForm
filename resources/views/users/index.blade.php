<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>User Form</title>
</head>
<body>
        <h1>User Details</h1>
        <ul>
        @foreach($data as $user)
        <li> {{ $user->id}}  </li>
        <li> {{ $user->firstName}}</li>
        <li> {{ $user->lastName}}</li>
        <li> {{ $user->dob}}</li>
        <li> {{ $user->email}}</li>
        <li> {{ $user->password}}</li>
        <li> {{ $user->address1}}</li>
        <li> {{ $user->address2}}</li>
        <li> {{ $user->state}}</li>
        <li> {{ $user->country}}</li>
        <li> {{ $user->status}}</li>
        </ul>
         <a class="btn btn-primary" href="{{ route('Users.show',$user->id) }}">Show</a>
        @endforeach
        <div style="margin-top: 2rem"><a href="{{ route('Users.create')}}" class="Button btn btn-success">Create</a></div>
</body>
</html>



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
        <h1>{{ $user->firstName }}Details</h1>
        <ul>
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
         <a class="btn btn-primary" href="{{ route('Users.edit',$user->id) }}">Edit</a>
        <form  method="Post" action="{{ route('Users.destroy', $user->id) }}">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
</body>
</html>



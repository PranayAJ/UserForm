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
<div class="container .d-md-flex justify-content-center">
<div>
    <h3>User Details</h3>
</div>
<div>
<form method="POST" action="{{ route('Users.update', $user->id)}}">
  @csrf
  @method("PUT")
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
  </div>
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">Last Name</label>
   <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlInput1">Date Of Birth</label>
    <div><input type="date" class="form-control" name="dob" value="{{ $user->dob}}"></div>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlInput1">Email</label>
    <div><input type="email" class="form-control" name="email" value="{{ $user->email }}"></div>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlInput1">Password</label>
    <div><input type="password" class="form-control" name="password" value="{{ $user->password}}"></div>
  </div>
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">Address 1</label>
    <textarea type="date" class="form-control" name="address1">{{ $user->address1 }}"</textarea>
  </div>
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">Address 2</label>
    <textarea type="date" class="form-control" name="address2">{{ $user->address2 }}"</textarea>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlSelect1">State</label>
    <select class="form-control" name="state">
    <option selected>{{ $user->state}}</option>
    <option>Maharashtra</option>
      <option>Nashik</option>
      <option>Rajasthan</option>
      <option>California</option>
      <option>Hiroshima</option>
    </select>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlSelect2">Country</label>
    <select class="form-control" name="country">
      <option selected>{{ $user->country }}</option>
      <option>India</option>
      <option>America</option>
      <option>Japan</option>
    </select>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlTextarea1">Status</label>
    <select class="form-control" id="status" name=status>
    <option selected>{{ $user->status }}</option>
    <option>Active</option>
    <option>Inactive</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>
</div>
</div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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
<form method="POST" action="{{ route('Users.store')}}">
  @csrf
    <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="text" class="form-control" name="firstName" placeholder="">
  </div>
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">Last Name</label>
    <input type="text" class="form-control" name="lastName" placeholder="">
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlInput1">Date Of Birth</label>
    <div><input type="date" class="form-control" name="dob" placeholder=""></div>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlInput1">Email</label>
    <div><input type="email" class="form-control" name="email" placeholder=""></div>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlInput1">Password</label>
    <div><input type="password" class="form-control" name="password" placeholder=""></div>
  </div>
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">Address 1</label>
    <textarea type="date" class="form-control" name="address1" placeholder=""></textarea>
  </div>
  <div class="form-group col-xl-5">
    <label for="exampleFormControlInput1">Address 2</label>
    <textarea type="date" class="form-control" name="address2" placeholder=""></textarea>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlSelect1">State</label>
    <select class="form-control" name="state">
    <option>Choose</option>
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
      <option>Choose</option>
      <option>India</option>
      <option>America</option>
      <option>Japan</option>
    </select>
  </div>
  <div class="form-group col-xl-2">
    <label for="exampleFormControlTextarea1">Status</label>
    <select class="form-control" id="status" name=status>
    <option>Choose</option>
      <option>Active</option>
      <option>Inactive</option>
    </select>
  </div>
<button type="submit" class="btn btn-success">submit</button>
</form>
<a class="Button btn btn-danger" href="{{ route('Users.index')}}">Back</a>
</div>
</div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

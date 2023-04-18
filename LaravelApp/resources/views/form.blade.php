<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form | Laravel</title>
  </head>
  <body>
    <div class="container mt-3 mb-3" style="width: 50%">
        <h1 class=" mb-4 text-center">Student Registration Form</h1>
        <form action="{{url('/')}}/register"  method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="Fname" class="form-control" placeholder="Enter your full name" value="{{old('Fname')}}">
                <span class="text-danger">
                    @error('Fname')
                        {{ $message = "The name field is required." }}
                    @enderror
                </span>
            </div>
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email Address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
              </span>
            </div>
           
            <div class="mb-3">
                <label for="name" class="form-label">Contact</label>
                <input type="text" name="Cnumber" value="{{old('Cnumber')}}" class="form-control" placeholder="Enter your contact number">
                <span class="text-danger">
                    @error('Cnumber')
                        {{ $message }}
                    @enderror
                </span>
            </div>
           
            <div class="mb-3">Gender: &nbsp;&nbsp;
                <input type="radio" value="male" name="gender"> Male
                <input type="radio" value="female" name="gender"> Female<br>
                <span class="text-danger">
                    @error('gender')
                        {{ $message = "The gender field is required."}}
                    @enderror
                </span>
            </div>
           
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
              <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
              </span>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="Cpassword" value="{{old('Cpassword')}}" class="form-control" id="exampleInputPassword1" placeholder="Enter your confirm password">
                <span class="text-danger">
                    @error('Cpassword')
                        {{ $message }}
                    @enderror
                </span>
            </div>
           <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary" style="width: 18%;font-size:17px;font-weight:500;">Submit</button>
           </div>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
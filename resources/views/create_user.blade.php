<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mx-auto">
            <div class="col-8">
                <h2>
                    Create User
                </h2>
            </div>
            <div class="col-8">
                <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-1">
                        <label for="input-username">Username</label>
                        <input type="text" class="form-control" id="input-username" aria-describedby="username" placeholder="Enter Username" name="username" value="{{ old('username') }}">
                        @if ($errors->has('username'))
                            <div class="alert alert-danger" role="alert">{{ $errors->first('username') }}</strong></div>
                        @endif                          
                    </div>
                    <div class="form-group my-1">
                        <label for="input-email">Email address</label>
                        <input type="email" class="form-control" id="input-email" aria-describedby="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</strong></div>
                        @endif                          
                    </div>
                    <div class="form-group my-1">
                        <label for="input-phone">Phone number</label>
                        <input type="text" class="form-control" id="input-phone" aria-describedby="phone" placeholder="Enter Contact number" name="contact_number" value="{{ old('contact_number') }}">
                        @if ($errors->has('contact_number'))
                            <div class="alert alert-danger" role="alert">{{ $errors->first('contact_number') }}</strong></div>
                        @endif                          
                    </div>
                    <div class="form-group my-1">
                        <label for="input-image">Image</label>
                        <input type="file" class="form-control" id="input-image" aria-describedby="image" placeholder="{{ old('image') ?? 'Please provide image'}}" name="image">
                        @if ($errors->has('image'))
                            <div class="alert alert-danger" role="alert">{{ $errors->first('image') }}</strong></div>
                        @endif                          
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>  
    </div>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script></script>
</html>
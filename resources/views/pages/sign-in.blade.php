<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card-header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
        }
        .btn-primary {
            background: linear-gradient(90deg, #007bff, #0056b3);
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #007bff);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
        
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{route('signin.submit')}}"  method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
                             @csrf
                    
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{old('email')}}">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" value="{{old('password')}}">
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
       
                                
                            <!-- Remember Me -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                                @error('checkbox')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Login Button -->
                            <div class="d-grid  gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="{{ route('signup.submit') }}" class="btn btn-secondary">Registration</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
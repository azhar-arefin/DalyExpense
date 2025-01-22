


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(90deg, #007bff, #0056b3);  /* Added linear gradient */
            color: white;
            border-radius: 0.25rem 0.25rem 0 0;
        }

        .btn-primary {
            background: linear-gradient(90deg, #007bff, #0056b3);  /* Added linear gradient */
            border-color: #0056b3;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #007bff);  /* Reversed gradient for hover effect */
            border-color: #007bff;
        }

        .text-danger {
            font-size: 0.875rem;
        }
    </style>
</head>  
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Registration Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{route('signup.submit')}}"  method="POST">
                          @csrf

                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" id="fullName" value="{{old('name')}}" placeholder="Enter your full name">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>



                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Enter your email">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
        

                            <div class="mb-3">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="phone" class="form-control" name="phone" id="phone" value="{{old('phone')}}" placeholder="Enter your phone number">
                                @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label"> Password </label>
                                <input type="password" class="form-control" name="password" id="phone" value="{{old('password')}}" placeholder="Enter the password">
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label"> Confirm Password </label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter the Confirm password">
                                @error('confirm_password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <!-- Login Button -->
                            <div class="d-grid  gap-2">
                                <button type="submit" class="btn btn-primary">Registration</button>
                                <a href="{{ route('signin.submit') }}" class="btn btn-secondary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


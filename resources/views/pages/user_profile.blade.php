
@extends('layout.app')

    @section('pages')


                    
    <div class="profile-container">
        <div class="profile-header">
            <h1>{{ $users->name }}</h1>
            <p>Web Designer & Developer</p>
            <p><strong>Email:</strong> {{ $users->email }}</p>

        </div>
        <div class="profile-content">
            <div class="profile-picture">
                <img src="{{asset('img/6082570476468684567.jpg')}}" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>About Me</h2>
                <p>Hello! I'm a passionate web designer and developer with expertise in HTML, CSS, Bootstrap, PHP, Laravel, and SQL. I create user-friendly and responsive websites.</p>
                <a href="#" class="btn">Contact Me</a>
            </div>
        </div>
    </div>




@endsection 
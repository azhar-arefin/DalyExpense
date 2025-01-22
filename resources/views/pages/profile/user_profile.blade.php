
@extends('layout.app')

    @section('pages')


                    
    <div class="profile-container">
        <div class="profile-header">
            <h1>Name: {{ $users->name }}</h1>
            <p><strong>Email:</strong> {{ $users->email }}</p>

        </div>
        <div class="profile-content">
            <div class="profile-picture">
                <img src="{{asset('imgs/customer02.jpg')}}" alt="Profile Picture">
            </div>
           
        </div>
    </div>




@endsection 
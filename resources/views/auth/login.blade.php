@extends('auth.layout.master')

@section('content')
    <section class="login">
        <div class="login-container">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
               
                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="login-buttons">
                    <div class="forgot-password">
                        <a href="#">Forgot Password</a>
                    </div>
        
                    <button type="submit">Log In</button>
                </div>
            </form>
        </div>
    </section>
@endsection
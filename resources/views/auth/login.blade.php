@extends('layout.default')


@section('title', 'Login')


@section('content')

   
    <section>
        <h1>Log in</h1>
        <form action="">
            <div>
                <img src="" alt="">
                <input type="text" name="login" id="login" placeholder="Email or Username">
            </div>
            <div>
                <img src="" alt="">
                <input type="text" name="passoword" id="passoword" placeholder="passoword">
            </div>
            <div>
                <button type="submit">Sign in</but>
            </div>
            <div>
                <p>
                    <a href="{{route('forgetPass')}}">Forget account</a>
                </p>
                <p>
                    <a href="{{route('accountCreate')}}">Create an account</a>
                </p>
            </div>
            
    
        </form>
    </section>
    
@endsection
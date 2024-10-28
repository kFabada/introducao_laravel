@extends('layout.default')

@section('title', 'CreateAccount')

@section('content')
    <section>
        <div> 
            <h1>Create Account</h1>
        </div>
        <form action="">
            <div>
                <input type="text" id="email" name="email" placeholder="email" required >
            </div>
            <div>
                <input type="text" id="name" name="name" placeholder="name" required >
            </div>
            <div>
                <input type="date" id="bty" name="bty" placeholder="birtyday" required >
            </div>
            <div>
                <input type="text" id="cpf" name="cpf" placeholder="cpf" required >
            </div>
            <div>
                <input type="text" id="rg" name="rg" placeholder="rg" required >
            </div>
            <div>
                <input type="text" id="cep" name="cep" placeholder="cep" required >
            </div>
            <div>
                <input type="text" id="address" name="address" placeholder="address" required >
            </div>
            <div>
                <input type="text" id="phone" name="phone" placeholder="phone" required >
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

    </section>
@endsection
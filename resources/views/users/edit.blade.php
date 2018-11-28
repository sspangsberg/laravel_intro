@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">

                    <h3>Your Profile</h3>

                    {!! Form::open(['action' => [ 'UserController@update', $user ] , 'method' => 'POST']) !!}
                   
                    <div class="form-group">
                        {{ Form::label('username','Username') }} 
                        {{ Form::text('username', $user->name, ['class' => 'form-control', 'placeholder' => 'Username']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email','Email') }} 
                        {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password','Password') }} 
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password_confirmation','Confirmation') }} 
                        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                    </div>
    
                    {{ Form:: hidden('_method', 'PATCH') }} {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }} {!! Form::close() !!}



                    <form method="post" action="{{ route('users.update', $user) }}">
                        
                        {{ csrf_field() }} {{ method_field('patch') }}
                        <input type="text" name="name" value="{{ $user->name }}" /><br>
                        <input type="email" name="email" value="{{ $user->email }}" /><br>
                        <input type="password" name="password" /><br>
                        <input type="password" name="password_confirmation" />
                        <button type="submit">Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
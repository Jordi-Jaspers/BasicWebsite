@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <!-- Authentication -->
            @guest	
            @if (Route::has('register'))
                <div class="card-header">{{ __('Error 403: Forbidden - User not authorised') }}</div>
            @endif
            @else
                @if (Auth::user()->id == 1)
                    <div class="card-header">{{ __('Admin Access: Show all received messages.') }}</div>
                @elseif (Auth::user()->id >1)
                    <div class="card-header">{{ __('Error 403: Forbidden - User not authorised') }}</div>
                @endif    
            @endguest  

                <div class="card-body">
                    <!-- Messages -->
                    <div id="message">
                        <section id="messages" class="one">
                            <div class="container">
                            
                                <!-- Authentication -->
                                @guest	
                                @if (Route::has('register'))
                                    <center><h2>Please log in before proceeding</h2></center>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                <a class="nav-link" href="{{ route('login') }}" style="color: #ffffff;"> {{ __('Proceed To Login Page') }} </a>
                                            </button>
                                        </div>
                                    </div>  
                                @endif

                                @else
                                    @if (Auth::user()->id == 1)
                                        <header>
                                            <h2>Messages</h2>
                                        </header>

                                        <form style='margin-bottom:1rem; margin-top:1rem' action="/home/message/deleteall/" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="col-12-mobile" id ="DeletePostbtn" method="POST">
                                                <button type="submit" class ="btn btn-outline-danger">Delete all posts</Button>
                                            </div>
                                        </form> 

                                        @if(count($messages) > 0)
                                            @foreach($messages as $message)

                                            <div class="card" style='margin-bottom:1rem'>
                                                <div class="card-header"><b> Message-ID:  </b> {{$message->id}}</div>
                                                <div class="card-body">
                                                    <ul class="list-group" style='margin-bottom:1rem'>
                                                        <li class="list-group-item"><b> Name: </b> {{$message->name}}</li>
                                                        <li class="list-group-item"><b> E-mail:  </b> {{$message->email}}</li>
                                                        <li class="list-group-item"><b> Message:  </b> 
                                                            <p>{{$message->message}}</p> 
                                                        </li>
                                                    </ul> 
                                                
                                                    <form action="/home/message/delete/{{$message -> id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="col-12-mobile" id = "DeletePostbtn" method="POST">
                                                        <button type="submit" class ="btn btn-outline-danger">Delete Post</Button>
                                                    </div>
                                                    </form> 
                                                </div>    
                                            </div>    
                                            @endforeach   
                                        @endif 
                                    @elseif (Auth::user()->id > 1)
                                    <center><h2>No Administrative Access!</h2></center>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                <a class="nav-link" href="{{ route('login') }}" style="color: #ffffff;"> {{ __('Return to Homepage') }} </a>
                                            </button>
                                        </div>
                                    </div>  
                                    
                                    @endif
                            </div>
                            @endguest  
                        </section>  
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
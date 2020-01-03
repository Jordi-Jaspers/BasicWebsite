
        
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <!-- Authentication -->
            @guest	
            @if (Route::has('register'))
                <div class="card-header">{{ __('Error 403: Forbidden - User not authorised') }}</div>
            @endif
            @else
            <div class="card-header">{{ __('Admin Access: Show all received messages.') }}</div>
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
                                <header>
                                    <h2>Messages</h2>
                                </header>

                                @if(count($messages) > 0)
                                    @foreach($messages as $message)
                                        <ul class="list-group">
                                            <li class="list-group-item"><b> Message-ID:  </b> {{$message->id}}</li>
                                            <li class="list-group-item"><b> Name: </b> {{$message->name}}</li>
                                            <li class="list-group-item"><b> E-mail:  </b> {{$message->email}}</li>
                                            <li class="list-group-item"><b> Message:  </b> {{$message->message}}</li>
                                        </ul> 
                                        <div> ----------------- </div>
                                    @endforeach   
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

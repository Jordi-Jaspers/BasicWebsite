
        
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <!-- Messages -->
                    <div id="message">
                        <section id="messages" class="one">
                            <div class="container">

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
                        </section>  
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

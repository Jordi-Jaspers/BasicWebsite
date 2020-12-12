
        
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                                 
                                @if(session('success'))	
                                <div class="alert-confirmation">
                                <h2 style="color:green;">Blog was succesfully edited</h2>
                                </div>
                                @elseif(session('deleted'))
                                <div class="alert-confirmation">
                                <h2 style="color:red;">Blog was succesfully deleted</h2>
                                </div>
                                @elseif(session('created'))
                                <div class="alert-confirmation">
                                <h2 style="color:green;">Blog was succesfully created</h2>
                                </div>
                                @endif
                                
                            <div class="row">
                                @if(count($blogs) > 0)
                                    @foreach($blogs as $blog)
                                        <div class = "col-md-6">
                                            <div class="card">

                                                <div class="card-header">
                                                    <a>{{ $blog->title}}</a>
                                                </div>
                                                <div class="card-body">
                                                    <a> <strong>Creator: {{$blog -> creator}} </strong></a><br>
                                                    <a> <strong>Posted: {{$blog -> created_at ->diffForHumans()}} </strong></a>
                                                    <br>
                                                    <br>
                                                    <h5> <strong>Content: </strong></h5>
                                                    <p><i>"{{$blog->content}}"</i></p>
                                                    @if (Auth::user()->id == 1)
                                                    <form action="/blog/edit/{{$blog -> id}}">
                                                    @csrf
                                                    @method('GET')
                                                        <div class="col-12-mobile" id = "EditPostbtn">
                                                            <button type="submit" class ="btn btn-primary">Edit Post</Button>
                                                        </div>
                                                    </form>
                                                    <br>
                                                    <form action="/blog/delete/{{$blog -> id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <div class="col-12-mobile" id = "DeletePostbtn" method="POST">
                                                            <button type="submit" class ="btn btn-outline-danger">Delete Post</Button>
                                                        </div>
                                                    </form>
                                                    @endif
                                                </div>  
                                            </div>
                                            <br>
                                            <br>
                                        </div> 
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

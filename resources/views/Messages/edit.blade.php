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
            <div class="card-header">{{ __('User Logged in: ' ) }} {{ Auth::user()->name }} {{ Auth::user()->surname }}</div>
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
                                    <h2>Create Blogpost</h2>
                                </header>

                                <div class="form-notifications">
                                    @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <div class="alert-danger">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @elseif(session('success'))	
                                        <div class="alert-confirmation">
                                                <p>Message was succesfully sent!</p>
                                        </div>
                                    @endif
                                </div>		
                                <form action="/blog/update/{{$blog -> id}}" method="POST">
                                    <div class="row">
                                        <div class="col-6 col-12-mobile">
                                                <label for = "title">Title</label>
                                                <input type = "text" name="title" class="form-control" value="{{$blog -> title}}">
                                        </div>
                                        <div class="col-6 col-12-mobile">
                                                <label for = "creator">Creator</label>
                                                <input type = "text" name="creator" class="form-control" value="{{Auth::user()->email}}" readonly></input>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <label for = "content">Content</label>
                                            <textarea  name="content" rows = "10" class="form-control" value="{{$blog -> title}}">{{$blog -> content}}</textarea>
                                        </div>
                                        <form action="/blog/update/{{$blog -> id}}" method="POST">
                                            <div class="col-12" id = "updatePostbtn">
                                            <br>
                                                @csrf
                                                @method('PUT')
                                                <div class="col-12-mobile" id = "UpdatePostbtn"  method="POST">
                                                    <button type="submit" class ="btn btn-primary">Update Post</Button>
                                                </div>
                                            </div>
                                    </div>
                                </form>
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

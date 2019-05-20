@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
                    <div class="container bootstrap snippet">

                      <div class="header">
                        <h3 class="text-muted prj-name">
                            <span class="fa fa-users fa-2x principal-title"></span>
                          Edit Posts
                        </h3>
                    </div>

                     <div class="jumbotron list-content">
                        <form method="POST" action="{{ url('/posts/' . $post->id . '/update') }}">
                        @csrf

                        <div class="form-group row" style = "padding-left: 20px; padding: auto;">
                           

                            <div class="col-md-12">
                               

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                            </button>
                                @enderror
                            </div>
                        </div>
                   
                    

                     

                <div class="card-body bg-dark text-white">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                   
                      <section class = "row new-post">
                        <div class = "col-md-12 col-md-offset-3">
                            <header><h3>Edit Title</h3> </header>
                           
                                <div class ="form-group">
                                    <textarea class = "form-control" name = "title" id = "edit-post" rows = 2>{{$post->title}}</textarea>
                                    
                            </div>
                    
                        <div class = "">
                            <header><h3>Edit Post</h3> </header>
                            
                                <div class ="form-group">
                                    <textarea class = "form-control" name = "text" id = "edit-post" rows = 5 >{{$post->text}}</textarea>
                                    
                            </div>
                            <button name= "edit-btn" type = "submit" class = "btn btn-primary">Update</button>
                        </form>
                    </div>
                </section>
                <hr>
              
                        </article>
                    </div>
                </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
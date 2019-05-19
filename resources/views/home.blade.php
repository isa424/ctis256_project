@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                     <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
                    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
                    <div class="container bootstrap snippet">

                      <div class="header">
                        <h3 class="text-muted prj-name">
                            <span class="fa fa-users fa-2x principal-title"></span>
                            Home Page
                        </h3>
                    </div>

                     <div class="jumbotron list-content">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style = "padding-left: 20px; padding: auto;">
                            <button type="submit" class="btn btn-primary" label for="search" class="col-md-4 col-form-label text-md-right right">{{ __('Search Friend 🔍') }}</label>

                            <div class="col-md-12">
                                <input id="search" type="search" class="form-control @error('search') is-invalid @enderror" name="search" value="{{ old('email') }}" required autocomplete="search">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                            </button>
                                @enderror
                            </div>
                        </div>
                    </form>
                    <div>
                        <a href = "/friendslist" >View All Friends </a>
                    </div>

                        

                <div class="card-body bg-dark text-white">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                   
                    <section class = "row new-post">
                        <div class = "col-md-12 col-md-offset-3">
                            <header><h3>Create New Post</h3> </header>
                            <form action = "">
                                <div class ="form-group">
                                    <textarea class = "form-control" name = "new-post" id = "new-post" rows = 5 placeholder="What's on your mind?"></textarea>
                                    <div class = "col-md-9 col-md-offset-3">
                                    <label for="postPic" class=" col-form-label text-md-right">{{ __('Upload Image') }}</label>
                                     <input id="postPic" type = "file" name = "post_pic" class="form-control @error('Post Picture') is-invalid @enderror" name="postPic" value="{{ old('postPic') }}" autocomplete="postPic"> 


                                     @error('postPic')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type = "submit" class = "btn btn-primary">New Post</button>
                        </form>
                    </div>
                </section>
                <hr>
                <section class = "row posts">
                    <div class = "col-md-6 col-md-offset-3">
                        <header><h3>Posts from other people...</h3></header>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Daniyal on 19 May 2019 at 22:05
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>    
                           
                            <div class = "interaction">
                                <a href="#">
                                       <i class="far fa-thumbs-up"></i>
                                </a>
                                <a href = "#"> <img src = "images/votes/up.png" style="width:20px;height:20px;" >like (19) </a> 
                                <a href = "#"> <img src = "images/votes/down.png" style="width:20px;height:20px;" >dislike (2) </a> 
                                <a href = "#"> <img src = "images/votes/reply.png" style="width:15px;height:15px;" > reply </a>
                                <br>
                                <a href = "#">  <img src = "images/votes/edit.png" style="width:15px;height:15px;" > edit </a> 
                                <a href = "#">  <img src = "images/votes/dlt.png" style="width:15px;height:15px;" > delete </a>
                           </div>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Faran on 19 May 2019 at 10:05
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                             <div class = "interaction">
                                <a href = "#"> <img src = "images/votes/up.png" style="width:20px;height:20px;" > like </a> 
                                <a href = "#"> <img src = "images/votes/down.png" style="width:20px;height:20px;" >dislike (2) </a> 
                                <a href = "#"> <img src = "images/votes/reply.png" style="width:15px;height:15px;" > reply </a>
                                <br>
                                <a href = "#">  <img src = "images/votes/edit.png" style="width:15px;height:15px;" > edit </a> 
                                <a href = "#">  <img src = "images/votes/dlt.png" style="width:15px;height:15px;" > delete </a>
                           </div>                            <article class = "reply">
                                <div class = "info">
                                    Replied by: Faran on 19 May 2019 at 10:30
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                                 <div class = "interaction">
                                <a href = "#"> <img src = "images/votes/up.png" style="width:20px;height:20px;" >like (19) </a> 
                                <a href = "#"> <img src = "images/votes/down.png" style="width:20px;height:20px;" >dislike (2) </a> 
                                <a href = "#"> <img src = "images/votes/reply.png" style="width:15px;height:15px;" > reply </a>
                                <br>
                                <a href = "#">  <img src = "images/votes/edit.png" style="width:15px;height:15px;" > edit </a> 
                                <a href = "#">  <img src = "images/votes/dlt.png" style="width:15px;height:15px;" > delete </a>
                           </div>
                            </article>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Isa on 18 May 2019 at 10:20
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>                           
                            <div class = "interaction">
                                <a href = "#"> <img src = "images/votes/up.png" style="width:20px;height:20px;" >like (19) </a> 
                                <a href = "#"> <img src = "images/votes/down.png" style="width:20px;height:20px;" >dislike (2) </a> 
                                <a href = "#"> <img src = "images/votes/reply.png" style="width:15px;height:15px;" > reply </a>
                                <br>
                                <a href = "#">  <img src = "images/votes/edit.png" style="width:15px;height:15px;" > edit </a> 
                                <a href = "#">  <img src = "images/votes/dlt.png" style="width:15px;height:15px;" > delete </a>
                           </div>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Serkan on 18 May 2019 at 12:00
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>           
                            <div class = "interaction">
                                <a href = "#"> <img src = "images/votes/up.png" style="width:20px;height:20px;" >like (19) </a> 
                                <a href = "#"> <img src = "images/votes/down.png" style="width:20px;height:20px;" >dislike (2) </a> 
                                <a href = "#"> <img src = "images/votes/reply.png" style="width:15px;height:15px;" > reply </a>
                                <br>
                                <a href = "#">  <img src = "images/votes/edit.png" style="width:15px;height:15px;" > edit </a> 
                                <a href = "#">  <img src = "images/votes/dlt.png" style="width:15px;height:15px;" > delete </a>
                           </div>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Admaney on 16 May 2019 at 22:05
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                            <div class = "interaction">
                                <a href = "#"> <img src = "images/votes/up.png" style="width:20px;height:20px;" >like (19) </a> 
                                <a href = "#"> <img src = "images/votes/down.png" style="width:20px;height:20px;" >dislike (2) </a> 
                                <a href = "#"> <img src = "images/votes/reply.png" style="width:15px;height:15px;" > reply </a>
                                <br>
                                <a href = "#">  <img src = "images/votes/edit.png" style="width:15px;height:15px;" > edit </a> 
                                <a href = "#">  <img src = "images/votes/dlt.png" style="width:15px;height:15px;" > delete </a>
                           </div>
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
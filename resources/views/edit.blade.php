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
                          Edit Posts
                        </h3>
                    </div>

                     <div class="jumbotron list-content">
                        <form method="POST" action="{{ route('login') }}">
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
                    </form>
                    

                        

                <div class="card-body bg-dark text-white">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                   
                      <section class = "row new-post">
                        <div class = "col-md-12 col-md-offset-3">
                            <header><h3>Edit Title</h3> </header>
                            <form action = "">
                                <div class ="form-group">
                                    <textarea class = "form-control" name = "Edit-post" id = "edit-post" rows = 2 ></textarea>
                                    
                            </div>
                    
                        <div class = "col-md-12 col-md-offset-3">
                            <header><h3>Edit Post</h3> </header>
                            
                                <div class ="form-group">
                                    <textarea class = "form-control" name = "Edit-post" id = "edit-post" rows = 5 ></textarea>
                                    
                            </div>
                            <button name= "edit-btn" type = "submit" class = "btn btn-primary">Edit</button>
                        </form>
                    </div>
                </section>
                <hr>
               <!--  <section class = "row posts">
                    <div class = "col-md-12 col-md-offset-3">
                        <header><h3>Posts from other people...</h3></header>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Daniyal on 19 May 2019 at 22:05
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.Cattle them herb there bearing tree great...</p>    
                           
                            <div class = "col-md-12">

                                <a href="#">
                                       <i class="far fa-thumbs-up"> like (19) </i>
                                </a>
                                 <a href="#">
                                       <i class="far fa-thumbs-down"> dislike (2) </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-share"> reply </i>
                                </a>
                                
                                 <a href="#">
                                       <i class="fas fa-edit"> edit  </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-trash-alt"> delete </i>
                                </a>
                                 
                           </div>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Faran on 19 May 2019 at 10:05
                            </div>
                          <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.Cattle them herb there bearing tree great...</p>    
                           
                            <div class = "col-md-12">

                                <a href="#">
                                       <i class="far fa-thumbs-up"> like (19) </i>
                                </a>
                                 <a href="#">
                                       <i class="far fa-thumbs-down"> dislike (2) </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-share"> reply </i>
                                </a>
                                
                                 <a href="#">
                                       <i class="fas fa-edit"> edit  </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-trash-alt"> delete </i>
                                </a>
                                 
                           </div>
                           <article class = "reply">
                                <div class = "info">
                                    Replied by: Faran on 19 May 2019 at 10:30
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                                 <div class = "col-md-12">

                                <a href="#">
                                       <i class="far fa-thumbs-up"> like (19) </i>
                                </a>
                                 <a href="#">
                                       <i class="far fa-thumbs-down"> dislike (2) </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-share"> reply </i>
                                </a>
                                
                                 <a href="#">
                                       <i class="fas fa-edit"> edit  </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-trash-alt"> delete </i>
                                </a>
                                 
                           </div>
                            </article>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Isa on 18 May 2019 at 10:20
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.Cattle them herb there bearing tree great...</p>    
                           
                            <div class = "col-md-12">

                                <a href="#">
                                       <i class="far fa-thumbs-up"> like (19) </i>
                                </a>
                                 <a href="#">
                                       <i class="far fa-thumbs-down"> dislike (2) </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-share"> reply </i>
                                </a>
                                
                                 <a href="#">
                                       <i class="fas fa-edit"> edit  </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-trash-alt"> delete </i>
                                </a>
                                 
                           </div>
                        </article>
                        <article class = "post">
                            <div class = "info">
                                Posted by: Admaney on 16 May 2019 at 22:05
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.Cattle them herb there bearing tree great...</p>    
                           
                            <div class = "col-md-12">

                                <a href="#">
                                       <i class="far fa-thumbs-up"> like (19) </i>
                                </a>
                                 <a href="#">
                                       <i class="far fa-thumbs-down"> dislike (2) </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-share"> reply </i>
                                </a>
                                
                                 <a href="#">
                                       <i class="fas fa-edit"> edit  </i>
                                </a>
                                 <a href="#">
                                       <i class="fas fa-trash-alt"> delete </i>
                                </a>
                                 
                           </div> -->
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
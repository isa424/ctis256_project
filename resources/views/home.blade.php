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
                                <textarea class = "form-control" name = "post-title" id = "post-title" rows = 1 placeholder="Post Title" required></textarea>
                                <br>
                                <textarea class = "form-control" name = "new-post" id = "new-post" rows = 5 placeholder="What's on your mind?" required></textarea>
                            <button type = "submit" class = "btn btn-primary">New Post</button>
                        </form>
                    </div>
                </section>
                <hr>
                <section class = "row posts">
                    <div class = "col-md-12 col-md-offset-3">
                        <header><h3>Posts from other people...</h3></header>


                        @for ($i = 0; $i <10; $i++)

                        <article class = "post">
                            <div class = "postTitle">
                                Lorem Ipsum
                            </div>
                            <div class = "info">
                                Posted by: Daniyal on 19 May 2019 at 10:05
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.Cattle them herb there bearing tree great...</p>    

                            <div class = "col-md-12">

                                <a href="#">
                                    <i class="far fa-thumbs-up mr-2"> like (19) </i>
                                </a>
                                <a href="#">
                                   <i class="far fa-thumbs-down mr-2"> dislike (2) </i>
                               </a>
                               <a href="#">
                                   <i class="fas fa-share mr-2"> reply </i>
                               </a>

                               <a href="#">
                                   <i class="fas fa-edit mr-2"> edit  </i>
                               </a>
                               <a href="#">
                                   <i class="fas fa-trash-alt me-2"> delete </i>
                               </a>

                           </div>
                           <article class = "reply">
                            <div class = "info">
                                Replied by: Faran on 19 May 2019 at 10:30
                            </div>
                            <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                            <div class = "col-md-12">

                                <a href="#">
                                    <i class="far fa-thumbs-up mr-2"> like (19) </i>
                                </a>
                                <a href="#">
                                   <i class="far fa-thumbs-down mr-2"> dislike (2) </i>
                               </a>
                               <a href="#">
                                   <i class="fas fa-share mr-2"> reply </i>
                               </a>

                               <a href="#">
                                   <i class="fas fa-edit mr-2"> edit  </i>
                               </a>
                               <a href="#">
                                   <i class="fas fa-trash-alt me-2"> delete </i>
                               </a>

                           </div>
                       </article>
                   </article>
                   @endfor
               </div>
           </section>
       </div>
   </div>
</div>
</div>
</div>
</div>
@endsection
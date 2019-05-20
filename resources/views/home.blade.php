@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header">

       <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
       <div class="container bootstrap snippet">

        <div class="header">
          <h3 class="text-muted prj-name">
            <span style="color:navy"class="fas fa-home fa-2x principal-title"></span>
            <span style="color:navy">Home Page</span>
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
                <form action="{{url('/posts')}}" method="POST">
                  <div class ="form-group">
                    @csrf()
                    <textarea class = "form-control" name = "title" id = "post-title" rows = 1 placeholder="Post Title" required></textarea>
                    <br>
                    <textarea class = "form-control" name = "text" id = "new-post" rows = 5 placeholder="What's on your mind?" required></textarea>
                    <br>
                    <button type = "submit" class = "btn btn-primary">Make Post</button>
                  </form>
                </div>
              </section>
            </div>
            <div>
              <hr>
              <section class = "row posts">
                <div class = "col-md-12 col-md-offset-3">
                  <header><h3>Posts from other people...</h3></header>
                  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
                  <script>  
                    function myFunction(x) {
                      x.classList.toggle("likeToggle fa-thumbs-down");
                      x.classList.toggle("fa-thumbs-down");
                    }



                  </script>  

                  @foreach($posts as $post)

                  <article class = "post">
                    <div class = "postTitle">
                      {{$post->title}}
                    </div>
                    <div class = "info">
                      Posted by: {{$post->user->name}} on {{$post->updated_at->diffForHumans()}}
                    </div>
                    <p>{{$post->text}}</p>    

                    <div class = "interactions col-md-12">




                     <a  class="like-button" id="likeButton">
                      <i onclick="myFunction(this)" class="far fa-thumbs-up">like</i>
                      (<span class ="num">19</span>)
                    </a>

                    

                    <a href="{{url('/posts/' . $post->id . '/edit')}}">
                     <i class="fas fa-edit mr-2"> edit  </i>
                   </a>
                   <a href="{{url('/posts/' . $post->id . '/delete')}}">
                     <i class="fas fa-trash-alt me-2"> delete </i>
                   </a>

                 </div>
                 <div class = "replyBox col-md-12" style="padding:10px; margin-top: 13px; margin-bottom: 10px">

                  <textarea class = "form-control" name = "reply-to-post" id = "reply-to-post" rows = 1 placeholder="Type your reply"></textarea>    
                  <button type = "submit" class = "btn btn-primary  " style=" margin-top: 5px; margin-right:10px">Reply</button>
                </div>


                <article class = "reply">
                  <div class = "info">
                    Replied by: Faran on 19 May 2019 at 10:30
                  </div>
                  <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                  <div class = "interactions col-md-12">

                    <a href="#" class="likeIt">
                      <i class="far fa-thumbs-up mr-2">like</i>
                      (<span>19</span>)
                    </a>  
                  </article>
                </article>
                @endforeach
              </div>

              {{ $posts->links() }}
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  console.log('here');

  var token = '{{ Session::token() }}';


</script>



</script>
@endsection
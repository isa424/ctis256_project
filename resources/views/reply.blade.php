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
            <span style="color:navy"class="fas fa-share fa-2x principal-title"></span>
            <span style="color:navy">Reply</span>
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
                <header><h3>Replying to [username]</h3> </header>
                <form action = "">
                  <div class ="form-group">
                    <textarea class = "form-control" name = "post-title" id = "post-title" rows = 1 placeholder="Reply Title" required></textarea>
                    <br>
                    <textarea class = "form-control" name = "new-post" id = "new-post" rows = 5 placeholder="Type your reply" required></textarea>
                    <br>
                    <button type = "submit" class = "btn btn-primary">Reply</button>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
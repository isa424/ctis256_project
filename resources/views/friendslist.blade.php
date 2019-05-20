@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header">

        <div class="card-body">

          <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
          <div class="container bootstrap snippet">

            <div class="header">
              <h3 class="text-muted prj-name">
                <span style="color:navy;"class="fa fa-users fa-2x principal-title"></span>
                <span style="color:navy">Friends List</span>
              </h3>
            </div>
            <div class="jumbotron list-content">
              <ul class="list-group">
               <li href="#" class="list-group-item title">
                You are friends with: {{count($friends)}} people
              </li>
              @foreach($friends as $friend)
              <li href="#" class="list-group-item text-left bg-dark">
                <a href="{{url('userProfile/' . $friend->id)}}" title = "Open this profile">
                  <img class="img-thumbnail"  src="images/friend_icons/friend-1.png">
                <label class="name">
                {{$friend->name}}
              </label>
            </a>
                <label class="pull-right">                     
                  <a  href="{{url('/friends/remove/' . $friend->id)}}" title="Delete this friend">
                    <i class="fas fa-trash-alt" style = "color:#FF1717; font-size: 20px;">

                    </i>
                    <!-- <img src = "images/delete.png" style="width:50px;height:50px;" > -->
                  </a>

                </label>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>                                                                                

    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection

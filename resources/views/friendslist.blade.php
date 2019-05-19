@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-body">

          <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
          <div class="container bootstrap snippet">

            <div class="header">
              <h3 class="text-muted prj-name">
                <span class="fa fa-users fa-2x principal-title"></span>
                Friends List
              </h3>
            </div>
            <div class="jumbotron list-content">
              <ul class="list-group">
               @php ($ali=1)
               <li href="#" class="list-group-item title">
                You are friends with: 8 people
              </li>
              @for ($i = 0; $i <8; $i++)
              <li href="#" class="list-group-item text-left bg-dark">
                <img class="img-thumbnail"  src="images/friend_icons/friend-1.png">
                <label class="name">
                Daniyal Admaney                    </label>
                <label class="pull-right">                     
                  <a  href="#" title="Delete">
                    <i class="fas fa-trash-alt" style = "color:red; font-size: 20px;">

                    </i>
                    <!-- <img src = "images/delete.png" style="width:50px;height:50px;" > -->
                  </a>

                </label>
              </li>
              @endfor

              <li href="#" class="list-group-item text-left text-white">
                <a class="btn btn-block btn-primary">
                  <i class="glyphicon glyphicon-refresh"></i>
                  Load more...
                </a>
              </li>
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

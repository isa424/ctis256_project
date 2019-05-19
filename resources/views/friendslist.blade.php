@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
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
                          <li href="#" class="list-group-item title">
                            You are friends with: 8 people
                        </li>
                        <li href="#" class="list-group-item text-left">
                            <img class="img-thumbnail" src="images/friend_icons/friend-1.png">
                            <label class="name">
                                Daniyal Admaney<br>
                            </label>

                            <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" width = 10px height = 10px    ></a>
  
                            </label>
                            <div class="break"></div>
                        </li>
                        <li href="#" class="list-group-item text-left">
                          <img class="img-thumbnail"  src="https://bootdey.com/img/Content/user_1.jpg">
                          <label class="name">
                              James Rodriguez (10)
                          </label>

                          <label class="pull-right">
                            <a  class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
                            <a  class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Delete"></a>
                            <a  class="btn btn-info  btn-xs glyphicon glyphicon glyphicon-comment" href="#" title="Send message"></a>
                        </label>
                        <div class="break"></div>
                    </li>
                    <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="https://bootdey.com/img/Content/user_2.jpg">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">
                        <a  class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
                        <a  class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Delete"></a>
                        <a  class="btn btn-info  btn-xs glyphicon glyphicon glyphicon-comment" href="#" title="Send message"></a>
                    </label>
                    <div class="break"></div>
                </li>
                <li href="#" class="list-group-item text-left">
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

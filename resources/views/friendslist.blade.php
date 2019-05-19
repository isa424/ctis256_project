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
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;"  ></a>
  
                            </label>
                            <div class="break"></div>
                        </li>
                        <li href="#" class="list-group-item text-left">
                          <img class="img-thumbnail"  src="images/friend_icons/friend-2.png">
                          <label class="name">
                              James Rodriguez 
                          </label>

                          <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;" ></a>
  
                            </label>
                        <div class="break"></div>
                    </li>
                    <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="images/friend_icons/friend-3.png">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;" ></a>
  
                            </label>
                    <div class="break"></div>
                </li>
                 <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="images/friend_icons/friend-4.png">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;" ></a>
  
                            </label>
                    <div class="break"></div>
                </li>
                 <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="images/friend_icons/friend-5.png">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;"width = 10px height = 10px    ></a>
  
                            </label>
                    <div class="break"></div>
                </li>
                 <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="images/friend_icons/friend-6.png">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;"width = 10px height = 10px    ></a>
  
                            </label>
                    <div class="break"></div>
                </li>
                 <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="images/friend_icons/friend-7.png">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;"width = 10px height = 10px    ></a>
  
                            </label>
                    <div class="break"></div>
                </li>
                 <li href="#" class="list-group-item text-left">
                      <img class="img-thumbnail"  src="images/friend_icons/friend-8.png">
                      <label class="name">
                        Mariana pajon
                    </label>
                    <label class="pull-right">                     
                                <a  href="#" title="Delete"><img src = "images/delete.png" style="width:50px;height:50px;" ></a>
  
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

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
                            <span style="color:navy"class="fas fa-id-badge fa-2x principal-title"></span>
                            <span style="color:navy">My Profile</span>
                        </h3>
                    </div>


                    <div class="jumbotron list-content">
                        <ul class="list-group">

                            <li href="#" class="list-group-item text-left bg-dark">
                                <img class="img-thumbnail" src="images/friend_icons/friend-1.png" style="width:200px;height:auto";>
                                <label style = "font-size:20px"class="name">
                                    <b>Daniyal Admaney</b><br>
                                    <a style = "font-size:15px">5 June 1998</a><br>
                                    Male <br>

                                </label>


                                <div class="break"></div>
                            </li>
                            <div class="break"></div>
                            <div class="form-group row" style = "padding-left: 20px; padding: auto;">
                            </div>




</ul>

                            <div class="card-body bg-dark text-white">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <section class = "row posts">
                                    <div class = "col-md-12 col-md-offset-3">
                                        <header><h3>Your Posts </h3> </header>


                                        @for ($i = 0; $i <3; $i++)

                                        <article class = "post">
                                            <div class = "postTitle" href = "#">
                                              Lorem Ipsum
                                          </div>
                                          <div class = "info">
                                              Posted by: Daniyal on 19 May 2019 at 10:05
                                          </div>
                                          <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.Cattle them herb there bearing tree great...</p>    

                                          <div class = "col-md-12">

                                             <a href="#">
                                                 <i class="fas fa-edit mr-2"> edit  </i>
                                             </a>
                                             <a href="#">
                                                 <i class="fas fa-trash-alt me-2"> delete </i>
                                             </a>

                                         </div>

                                     </article>
                                     @endfor
                                     <hr>
                                     <header><h3>Your Comments</h3> </header>

                                     @for ($i = 0; $i <3; $i++)

                                     <article class = "reply">
                                        <div class = "postTitle" href = "#">
                                          Lorem Ipsum
                                      </div>
                                      <div class = "info">
                                        Replied by: Daniyal on 19 May 2019 at 10:05
                                    </div>
                                    <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved. Cattle them herb...</p>    

                                    <div class = "col-md-12">

                                     <a href="#">
                                         <i class="fas fa-edit mr-2"> edit  </i>
                                     </a>
                                     <a href="#">
                                         <i class="fas fa-trash-alt me-2"> delete </i>
                                     </a>

                                 </div>

                             </article>
                             @endfor
                             <hr>

                             <a href="{{ route('home') }}">    <button  class = "btn btn-primary">Return to Dashboard </button>
                             </form>

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
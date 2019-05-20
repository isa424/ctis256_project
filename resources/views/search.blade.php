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
                <span style = "color:navy" class="fas fa-search-plus fa-2x principal-title"></span>
               <span style = "color:navy"> Search for friends</span>
              </h3>
            </div>
            <div class="jumbotron list-content">
              <div class = "searchContainer" style = "text-align: center;">
              <div class = "searchButton" style="display: inline-block;">
               <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row" style = "padding-left: 20px">
                  <button type="submit" class="btn btn-primary" label for="search" class="col-md-4 col-form-label text-md-right right">{{ __('Search Friend 🔍') }}</label>

                    <div class="col-md-12">
                      <input id="search" type="search" class="form-control @error('search') is-invalid @enderror" name="search" value="{{ old('search') }}" required autocomplete="search">

                      @error('search')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    </div>
                  </button>
                  @enderror
                </div>
              </div>
            </form>
          </div>
        </div>





          <ul class="list-group">
           @php ($ali=1)
           <li href="#" class="list-group-item title">
            Your search yielded 3 results
          </li>
          @for ($i = 0; $i <3; $i++)
          <li href="#" class="list-group-item text-left bg-dark">
            <a href = "#" title = "Open this profile">
              <img class="img-thumbnail"  src="images/friend_icons/friend-1.png">
              <label class="name">
                Daniyal Admaney                    
              </label>
            </a>
            <label class="pull-right">                     
              <a  href="#" title="Add Friend">
                <i class="fas fa-user-plus" style = "color:#56FF42; font-size: 20px;">

                </i>
                <!-- <img src = "images/delete.png" style="width:50px;height:50px;" > -->
              </a>

            </label>
          </li>
          @endfor


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

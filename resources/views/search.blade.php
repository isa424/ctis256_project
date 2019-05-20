@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header">

        <div class="card-body">

          <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
          <div class="container bootstrap snippet">

            <div class="header">
              <h3 class="text-muted prj-name">
                <span style = "color:navy" class="fas fa-search-plus fa-2x principal-title"></span>
               <span style = "color:navy"> Search for friends</span>
              </h3>
            </div>
            <div class="">
              <div class = "searchContainer" style = "text-align: center;">
              <div class = "searchButton" style="display: inline-block;">
               <form method="get" action="{{ url('/search') }}" class="form-check-inline">

                <div class="form-group row" style = "padding-left: 20px">
                    <div class="col-md-12">
                      <input id="search" type="search"
                        class="form-control @error('search') is-invalid @enderror"
                        name="username" value="{{ old('search') }}" required autocomplete="search">
                    </div>
                </div>

                <div class="form-group row" style = "padding-left: 20px">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">{{ __('Search Friend 🔍') }}</button>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>

          <ul class="list-group">
       
          @if($username)
           <li href="#" class="list-group-item title">
            Your search yielded {{count($users)}} results
          </li>
          @endif
          @foreach($users as $user)
          <li href="#" class="list-group-item text-left bg-dark">
            <a href = "#" title = "Open this profile">
              <img class="img-thumbnail"  src="images/friend_icons/friend-1.png">
              <label class="name">
                {{$user->name}}                    
              </label>
            </a>
            <label class="pull-right">                     
              <button class="btn btn-sm btn-primary add-friend" id="{{$user->id}}" href="#">
                <i class="fas fa-user-plus" style = "color:#56FF42; font-size: 20px;"></i>
              </button>
            </label>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>                                                                                
<script type="text/javascript">
$(document).ready(function() {
  $('.add-friend').click(function(e) {
    console.log('here');
    e.preventDefault();
    const id = $(this).attr('id');
    const self = this;

    $.post(window.url + '/api/friends/send', {
      friend: id,
      user: window.user_id,
    }).then(function(data) {
      console.log(data);
      $(self).addClass('invisible');
    }).catch(function(err) {
      console.error(err);
    });
  });
});
</script>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

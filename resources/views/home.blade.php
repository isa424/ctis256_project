@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                    <section class = "row new-post">
                        <div class = "col-md-6 col-md-offset-3">
                            <header><h3>What do you want to post?</h3> </header>
                            <form action = "">
                                <div class ="form-group">
                                    <textarea class = "form-control" name = "new-post" id = "new-post" rows = 5 placeholder="PLACEHOLDER"></textarea>
                                </div>
                                <button type = "submit" class = "btn btn-primary">New Post</button>
                            </form>
                        </div>
                    </section>
                    <section class = "row posts">
                        <div class = "col-md-6 col-md-offset-3">
                            <header><h3>Posts from other people...</h3></header>
                            <article class = "post">
                                <div class = "info">
                                    Posted by: Daniyal on 19 May 2019 at 22:05
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>      
                                <div class = "interaction"> >
                                    <a href = "#"> upvote </a> -
                                    <a href = "#"> downvote </a> -
                                    <a href = "#"> reply </a> -
                                    <a href = "#"> edit </a> -
                                    <a href = "#"> delete </a> <
                                </div>
                            </article>
                            <article class = "post">
                                <div class = "info">
                                    Posted by: Faran on 19 May 2019 at 10:05
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                                <div class = "interaction"> >
                                    <a href = "#"> upvote </a> -
                                    <a href = "#"> downvote </a> -
                                    <a href = "#"> reply </a> -
                                    <a href = "#"> edit </a> -
                                    <a href = "#"> delete </a> <
                                </div>
                                <article class = "reply">
                                    <div class = "info">
                                        Replied by: Faran on 19 May 2019 at 10:30
                                    </div>
                                    <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                                    <div class = "interaction"> >
                                        <a href = "#"> upvote </a> -
                                        <a href = "#"> downvote </a> -
                                        <a href = "#"> reply </a> -
                                        <a href = "#"> edit </a> -
                                        <a href = "#"> delete </a> <
                                    </div>
                                </article>
                            </article>
                            <article class = "post">
                                <div class = "info">
                                    Posted by: Isa on 18 May 2019 at 10:20
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>                           
                                <div class = "interaction"> >
                                    <a href = "#"> upvote </a> -
                                    <a href = "#"> downvote </a> -
                                    <a href = "#"> reply </a> -
                                    <a href = "#"> edit </a> -
                                    <a href = "#"> delete </a> <
                                </div>
                            </article>
                            <article class = "post">
                                <div class = "info">
                                    Posted by: Serkan on 18 May 2019 at 12:00
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>           
                                <div class = "interaction"> >
                                    <a href = "#"> upvote </a> -
                                    <a href = "#"> downvote </a> -
                                    <a href = "#"> reply </a> -
                                    <a href = "#"> edit </a> -
                                    <a href = "#"> delete </a> <
                                </div>
                            </article>
                            <article class = "post">
                                <div class = "info">
                                    Posted by: Admaney on 16 May 2019 at 22:05
                                </div>
                                <p> Cattle them herb there bearing tree great had days man own divided after i, brought. Fish i blessed. Lesser moved.</p>
                                <div class = "interaction"> >
                                    <a href = "#"> upvote </a> -
                                    <a href = "#"> downvote </a> -
                                    <a href = "#"> reply </a> -
                                    <a href = "#"> edit </a> -
                                    <a href = "#"> delete </a> <
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

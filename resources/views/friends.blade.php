@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    <section class = "row new-post">
                        <div class = "col-md-6 col-md-offset-3">
                            <header><h3>Your Current Friends: </h3> </header>
                            <table>
                                <tr>
                                    <th></th> <th>Full name</th>  <th>Email Address</th> <th><th>
                                </tr>
                                <tr>
                                    <td><img src = "images/person1.jpg" width = 200px height = auto></td> <td>Daniyal Admaney</td> <td>daniyaladmaney@gmail.com</td> <td><img src = "images/delete.png"></td> 
                                </tr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

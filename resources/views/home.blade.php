@extends('layouts.app')

@section('content')

@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: paleturquoise">
                <div class="card-header" style="color: royalblue">Homepage</div>

                <div class="card-body">
           <marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"> 
           <h1 style=" color: royalblue">WELCOME TO MY BLOG! </h1>                      
              </marquee>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

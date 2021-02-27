@extends('layouts.app')
@section('title', "|$post->title")


@section('content')
   <div class="container">
       <div class="row">
           <div class="container">
           <div class="col-md-8 justify-content-center">

                  <h2 class="text-center ">{{$post->title}}</h2>
                  <h2 class=" text-capitalize">{{$post->body}}</h2>
             <hr>
               <p>Posted in:{{optional($post->category)->name}}</p>
               <hr>
                 <p>Tags{{optional($post->tag)->name}}</p>
           </div>
           </div>
       </div>
   </div>

@endsection


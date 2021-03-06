@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show')



<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
@include('adminpages.partials.usernavbar')
<div id="page-top">
    <div id="wrapper">


                    @include('adminpages.partials.alert')

                    <div class="container">
                      <a href="{{route('posts.index')}}" class="m-2" >
                                                <i class="btn btn-danger " >GO back</i>
                                            </a>



                        <div class="row ">

                            <div class="col-8" style="background: blue;">
                                <div class="col-md-8">

                                    <h1 class="text-center">{{ $post->title }} </h1>
                                    <p>{{ $post->slug }}</p>
                                    <p>{{ $post->body }}</p>
                                </div>
                            </div>


                                <dl class="dl-horizontal">
                                    <dt>URL:</dt>
                                    <a href="{{($post->slug)}}"><dd>{{url($post->slug)}}</dd></a>
                                    <dl class="dl-horizontal">
                                        <dt>Created AT:</dt>
                                        <dd>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                                    </dl>

                                    <dl class="dl-horizontal">
                                        <dt> Last Updated AT:</dt>
                                        <dd>{{date ('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                                    </dl>
                                    <dl class="dl-horizontal">
                                        <dt> Category:</dt>
                                        <p>{{optional($post->category)->name}}</p>
                                    </dl>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href=" {{route('posts.edit', ['post'=>$post->id])}}" >
                                                <i class="btn btn-danger fas fa-edit" ></i>
                                            </a>

                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('posts.destroy', ['post'=>$post->id])}}" >
                                                <i class="btn btn-danger fas fa-trash-alt" ></i>
                                            </a>
                                        </div>
                                    </div>
                                </dl>

                        </div>
                    </div>
 </div>
    </div>
    </div>
</div>

@endsection


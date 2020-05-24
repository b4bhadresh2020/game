@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Facebook Posts</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href='{!!url("facebook_sync")!!}' class='btn btn-primary btn-inline'>Synchronize Facebook Feeds</a>
                        </div>
                    </div>

                    <div class="row feeds-wrapper mt-2">
                        @foreach ($feeds as $feed)
                        <div class="card w-100 mb-2" >
                            <div class="card-header">
                                {{$feed->post_created_time}}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Post ID : {{$feed->post_id}}</h5>
                                <p class="card-text">{!! $feed->message !!}</p>                                
                                @if (!empty($feed->picture))
                                    <img src="{{$feed->picture}}" alt="" class="feed-image">                                
                                @endif 
                            </div>
                        </div>                                                             
                        @endforeach
                    </div>  
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{$feeds->links()}}
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

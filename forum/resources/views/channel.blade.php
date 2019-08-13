@extends('layouts.app')

@section('content')

    
            @foreach($discussions as $d)

            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;

                    <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>

                    <a href="{{ route('discussion', ['slug' => $d->slug]) }}" class="btn btn-default pull-right">view</a>

                </div>

                <div class="panel-body">
                    
                     <h3 class="text-center" >
                         
                        {{ $d->title }}

                     </h3>

                     <p class="text-center" >
                         
                        {{ str_limit($d->content, 50) }}

                     </p>

                    
                </div>

                <div class="panel-footer" >
                    

                    <span>
                        
                        {{ $d->replies->count() }} Replies

                    </span>


                    <a href=" {{ route('channel', ['slug' => $d->channel->slug ]) }} " class="pull-right btn btn-default btn-xs" >
                        
                        {{ $d->channel->title  }}


                    </a>

                </div>
            </div>


            @endforeach


            <div class="text-center" >

                {{ $discussions->links() }}
                

            </div>
        

@endsection

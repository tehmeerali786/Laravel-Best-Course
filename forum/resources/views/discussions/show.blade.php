@extends('layouts.app')

@section('content')

    
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

                     <hr>

                     <p class="text-center" >
                         
                        {{ $d->content }}

                     </p>

                    
                </div>

                <div class="panel-footer" >
                    

                    <p>
                        
                        {{ $d->replies->count() }} Replies

                    </p>

                </div>
            </div>

            @foreach($d->replies as $r)


                <div class="panel panel-default">
                    <div class="panel-heading">
                        
                        <img src="{{ $r->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;

                        <span>{{ $r->user->name }}, <b>{{ $r->created_at->diffForHumans() }}</b></span>

                        

                    </div>

                    <div class="panel-body">
                        
                         

                         <p class="text-center" >
                             
                            {{ $r->content }}

                         </p>

                        
                    </div>

                    <div class="panel-footer" >
                        

                        <p>
                            
                            LIKE

                        </p>

                    </div>
                </div>

            @endforeach
        

        
            <div class="panel panel-default" >
                
                <div class="panel-body" >
                    
                    <form action="{{ route('discussion.reply', ['id' => $d->id]) }}"  method="post" >


                        {{ csrf_field() }}


                        <div class="form-group" >

                            <label for="reply">Leave a reply .... </label>
                            
                            <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"  ></textarea>


                        </div>

                        <div class="form-group">

                            <button class="btn pull-right">
                                
                                Leave a reply

                            </button>
                            

                        </div>
                        

                    </form>

                </div>

            </div>

@endsection

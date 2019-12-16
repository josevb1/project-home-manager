@extends('layouts.app')

@section('content')


    <div class="col-md-12">    
                    <div class="card">
                        <div class="card-header">{{ Auth::user()->name }}</div>

                        <div class="card-body">
                            @foreach( $errors  as $user) 
                              <h3>{{ $user->name}}</h3>
                            @endforeach
                        </div>
                    </div>
            </div>




     <div id="root">

       <network-menu :auth_user = "{{ Auth::user() }}" ></network-menu>
                
          </div>  




</div>

@stop
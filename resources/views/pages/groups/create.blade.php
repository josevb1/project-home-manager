@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    

    


<div class="container">

     <div id="root">

     

          <search></search>
           
      </div>

</div>





 @stop


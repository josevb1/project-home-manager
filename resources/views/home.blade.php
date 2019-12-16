@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 colo-md-offset-2 shadow p-4">
            <div class="card">
                <div class="card-header">Welcome {{ucwords(Auth::user()->name)}} {{ucwords(Auth::user()->last_name)}}</div>

                <img src="../img/chico.png" width="80px" height="80px" />
                <a href="#">change Image</a>

        <div id="root">


            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
            Upgrade to Business Account
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Business Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                          @csrf
                          <create-business></create-business>

                  </div>
            
                </div>
              </div>
            </div>

        </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

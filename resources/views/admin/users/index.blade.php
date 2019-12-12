@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">

    <div id="root">
        <div class="col-md-12">
            <div class="page-header">
                <h3>Search User</h3>


                <form class="form-inline mb-4">

                        <input name="name" class="form-control mr-sm-2" type="search" placeholder="Find by User Name">

                        <input name="email" class="form-control mr-sm-2" type="search" placeholder="Find by Email" aria-label="Search"> 

                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>


               <!-- <search></search> -->

            </div>

        </div>
    </div>
</div>



    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
                     <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
         
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>{{ implode(',', $user->roles()->get()->pluck('name')->toarray()) }}</th>
                                <th>

                                    <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary btn-sm"> Send Invitation </a>

                                    <!-- <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary btn-sm"> Edit Role</a> -->
                                </th>
                            </tr>
                       @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
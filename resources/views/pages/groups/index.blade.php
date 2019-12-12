@extends('layouts.app')

@section('content')


<div class="container">


    


        <div id="root">


        <main class="flex">

                  <aside class="w-1/5">

                          <section class="mb-8">

                            <h3 class="uppercase font-bold mb-4 text-base"> Groups </h3>

                            <ul class="list-reset">

                            
                              <li class="test-sm pb-4 "> Create a New group </li>

                              <li class="test-sm pb-4 "  > Manage Groups</li>

                            </ul>

                          </section>

                          <section class="mb-8">

                            <h3 class="uppercase font-bold mb-4 text-base"> Notificationes </h3>

                            <ul class="list-reset">

                                <li class="test-sm pb-4 ">Add permissionsr</li>

                            </ul>

                          </section>

                          <section class="mb-8">

                            <h3 class="uppercase font-bold mb-4 text-base"> Contacts </h3>

                            <ul class="list-reset">

                              <li class="test-sm pb-4 ">Search user</li>

                              <li class="test-sm pb-4 ">Search email</li>

                              <li class="test-sm pb-4 ">Manage contacts</li>

                            </ul>

                          </section>


                  </aside>

                <aside class="w-3/5">

                        <router-view></router-view>

                </aside>


         </main>




         <groups></groups> 
        <create-group></create-group>

            <!-- <app></app> -->

          
            
        </div>


</div>



@stop
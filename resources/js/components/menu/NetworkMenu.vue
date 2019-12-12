 <template>
 

    <div class="container mx-auto">
                <header>
                        <h3><eva-icon name="person" animation="pulse" fill="gray"></eva-icon>User Profile</h3>
                </header>

                 <main class="flex float-left">

                        <aside class="w-1/20">

                                 <section class="mb-4 mt-4">
                                        <h5>GROUPS</h5> 
                                                <ul class="list-reset">
                                                      <li class="mb-4" v-bind:style="{ listStyle: style }"><eva-icon name="briefcase" animation="pulse" fill="gray"></eva-icon><router-link :to= " { name: 'create' } "> Create Group </router-link></li>

                                                        <li class="mb-4" v-bind:style="{ listStyle: style }"><eva-icon name="file-text" animation="pulse" fill="gray"></eva-icon><router-link :to= " { name: 'show' } "> Manage Groups </router-link></li>

                                                </ul>
                                </section>

                                <section class="mb-4">
                                        <h5>USERS</h5> 
                                                <ul class="list-reset">
                                                        <li class="mb-4" v-bind:style="{ listStyle: style }"><eva-icon name="people" animation="pulse" fill="gray"></eva-icon><router-link :to= " { name: 'contacts' } "> Search Users </router-link></li>
                                                        
                                                        <li v-bind:style="{ listStyle: style }"><eva-icon name="person-add" animation="pulse" fill="gray"></eva-icon><router-link :to= " { name: 'main' } "> My Contacts </router-link></li>
                                                </ul>
                                </section>


                        </aside>


                </main>

                <div class="row align-items-end">

                        <router-view></router-view>

                        </div>

     

                <!-- <network-menu></network-menu> -->
                
        </div>  
    

</template>

<script>
  import { EvaIcon } from 'vue-eva-icons'

  export default {
    components: {
      [EvaIcon.name]: EvaIcon
    },

data() {
    return {
      
      style: 'none'
    }
  },


  }
</script>

<template>

        <div class="col-md-12"> 

                    <div class="card">

                        <div class="card-header">Manage Groups
                        </div>


                        <div class="card-body">

                                <input  v-model="search" class="form-control mb-2 my-0 py-1" type="text" placeholder="Search Users" aria-label="Search">
                  
                            <table class="table">
                      
                                <thead>
                                    <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                       <th scope="col">id</th>
                                    <th scope="col">Actions</th>

                                    
                
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <tr v-for="user in filter.slice(0, 2)" :key="user.id">
                                        <th>{{ user.name }}</th>
                                        <th>{{ user.email }}</th>
                                         <th>{{ user.id }}</th>

                                        <th><a href="/addfriend" class="btn btn-success btn-sm"> Send Friend Request </a></th>
                                        
                                        <th><a href="#" class="btn btn-primary btn-sm"> Send Message </a></th>
            
                                    </tr>
                    
                                </tbody>
                            </table>

                        </div>
                    </div>
        </div>

</template>

<script>
    export default {

    

        mounted() {
            console.log('Component mounted.')
        
        },

        data() {

          
            return {
                users: [],
                search: ''
                
            }
        },
        created() {
                
                axios.get('/admin/users')
                .then(response => this.users = response.data);

          
        },

        computed: {
            filter() {
                return this.users.filter( (user) => {
                    return user.name.match(this.search);
                });
            }
        }

  
    }
    

</script>
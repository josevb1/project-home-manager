<template>

<div class="col-md-12">    
                    <div class="card">
                        <div class="card-header">Manage Groups</div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actions</th>

                                    
                
                                    </tr>
                                </thead>
                                <tbody>
                              
                                    <tr v-for="friend in friends" :key="friend.id">
                                        <th>{{ friend.name }}</th>
                                        <th>{{ friend.email }}</th>
                                        <th><a href="#" class="btn btn-primary btn-sm"> Add Friend</a></th>
            
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
                friends: []
            }
        },
        created() {
                
                axios.get('/friends')
                .then(response => this.friends = response.data);

          
        },

  
    }
    

</script>

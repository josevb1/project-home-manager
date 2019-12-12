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
                                    <th scope="col">Notes</th>
                                    <th scope="col">Actions</th>

                                    
                
                                    </tr>
                                </thead>
                                <tbody>
                              
                                    <tr v-for="post in posts" :key="post.id">
                                        <th>{{ post.name }}</th>
                                        <th>{{ post.email }}</th>
                                        <th>{{ post.notes }}</th>
                                        <th><a href="#" class="fa fa-edit blue"></a></th>
                                        <th><a href="#" class="btn btn-primary btn-sm"> Add Users </a></th>
                                        <th><a href="#" class="btn btn-primary btn-sm"> Add Users </a></th>
            
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
                posts: []
            }
        },
        created() {
                
                axios.get('/groups')
                .then(response => this.posts = response.data);

          
        },

  
    }
    

</script>

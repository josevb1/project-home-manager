<template>

<div class="col-md-12">
        <form  @submit.prevent="makeg()">
            <div class="container shadow p-4">
                     <div class="form-group">

                        <label for="group-name">Group Name</label>
                            <input type="text" name="name" class="form-control" id="name" v-model="name" placeholder="Enter the Group Name"/>

                     </div>

                    <div class="form-group">
                        <label for="email">Send invite Email</label>
                            <input type="email" name="email" class="form-control" id="email" v-model="email" placeholder="Enter the email"/>

                    </div>

                    <div class="form-group">
                            <label for="group-image">Group Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                    
                    </div>

                    <div class="form-group">
                            <label for="group-notes">Notes</label>
                            <textarea class="form-control" name="notes" v-model="notes" id="notes" rows="7"></textarea>

                    </div>
                        
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" >
                    </div>
        
               </div>
            </form>
       
</div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              name: '',
              email: '',
              notes: ''
            };
        },
        methods: {
           makeg() { 
               const axios = require('axios');
                axios.post('/groups', { 
                    name: this.name, 
                    email: this.email, 
                    notes: this.notes 
                })


                 .then(data => {
                   window.location.href = "/network"
                 })
                 .catch(function (error) {
                    console.log(error.response);
                 });

            }
        }
    }
    

</script>

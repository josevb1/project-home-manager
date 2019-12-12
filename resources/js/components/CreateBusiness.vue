<template>
         
              <div class="form-group">

                        <label for="name">Business Name</label>
                            <input type="text" name="name" class="form-control mb-3" id="name" placeholder="Enter the Business name"/>

                        <label for="email">Business Email</label>
                            <input type="email" name="email" class="form-control mb-3" id="email" placeholder="Enter the email"/>
                        
                         <label for="phone">Business Phone</label>
                            <input type="tel" name="phone" class="form-control mb-3" id="phone" placeholder="Phone number"/>

                         <label for="ein">Business EIN</label>
                            <input type="text" class="form-control  mb-3" name="ein" id="ein" placeholder="Business EIN" />

                         <label for="name">Web site addres</label>
                            <input type="text" name="web" class="form-control mb-3" id="web" placeholder="www.website.com"/>

                         <label for="name">Facebook Page</label>
                            <input type="text" name="facebook" class="form-control" id="facebook" placeholder="www.facebook.com/yourpage"/>


           

                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
              </div>
                   

                  


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

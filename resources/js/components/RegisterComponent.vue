<template>
<section class="row flexbox-container">
    <div class="col-xl-8 col-10 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                    <img :src="'/images/pages/register.jpg'" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 p-2">
                        <div class="card-header pt-50 pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Create Account</h4>
                            </div>
                        </div>
                        <p class="px-2">Fill the below form to create a new account.</p>
                        <div class="card-content">
                            <div class="card-body pt-0">
    <form @submit.prevent="register">
      <div class="form-label-group">
      		 <div v-if="errors && errors.name" class="text-danger">{{errors.name[0]}}</div>
          <input type="text" id="name" name="name" class="form-control" placeholder="Name" v-model="fields.name" required>
          <label for="name">Name</label>
      </div>
      <div class="form-label-group">
       <div v-if="errors && errors.email" class="text-danger">{{errors.email[0]}}</div>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" v-model="fields.email" required>
          <label for="email">Email</label>
      </div>
      <div class="form-label-group">
      <div v-if="errors && errors.password" class="text-danger">{{errors.password[0]}}</div>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" v-model="fields.password" required>
          <label for="password">Password</label>
      </div>
      <div class="form-label-group">
          <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" v-model="fields.confirmpassword" required>
          <label for="confirmpassword">Confirm Password</label>
      </div>
      <div class="form-group row">
          <div class="col-12">
              <fieldset class="checkbox">
                <div class="vs-checkbox-con vs-checkbox-primary">
                  <input type="checkbox" checked>
                  <span class="vs-checkbox">
                    <span class="vs-checkbox--check">
                      <i class="vs-icon feather icon-check"></i>
                    </span>
                  </span>
                  <span class=""> I accept the terms & conditions.</span>
                </div>
              </fieldset>
          </div>
      </div>
      <a href="/" class="btn btn-outline-primary float-left btn-inline mb-50">Back</a>			
	<button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</button>
	<div v-if="success" class="alert alert-success mt-3">Message sent!</div>
  </form>
       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>

    export default {
        data() {
        		return {
        			fields: {},
        			errors: {},
        			success: false,
        			loaded: true,
        		}
        },
        methods: {
        // Register function
        	register(){
        	if(this.fields.password !== this.fields.confirmpassword || this.fields.password.length <= 0)
        	{
        			return alert('Passwords do not match');
        	}	
        		if(this.loaded) {
        		
        			this.loaded = false;
        			this.success = false;
        			this.errors = {};
        		
        		axios.post('api/register', this.fields).then(response => {
        				this.fields = {}; // clear input fields
        			  this.loaded = true;
        			  this.success = true;
        			  
        			  
        			  localStorage.setItem('user', JSON.stringify(response.data.user))
        			  localStorage.setItem('jwt', response.data.token)
        			  
        			  if(localStorage.getItem('jwt') != null) {
        			  		this.$emit('loggedIn')
        			  		if(this.$route.params.nextUrl != null){
                           this.$router.push(this.$route.params.nextUrl)
                         }
                        else{
                          this.$router.push('/')
                         }
        			  }
        			  
        			}).catch(error => {
		        		  this.loaded = true;
        					if(error.response.status === 422){
        							this.errors = error.response.data.errors || {};
        						}
        				});
        	}
        },
       },
    }
</script>

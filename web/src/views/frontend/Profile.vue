<template>
    <div>
        <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Profile</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Profile</a>
        </div>
      </div>
        <div class="row d-flex justify-content-center align-items-center my-5">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-body">

								<h6 class="card-title d-flex justify-content-center">Profile</h6>
                                <div class="d-flex justify-content-center">
                                    <img src="../../assets/img/phearith.jpg" alt="abc" style="width: 100px; height: 100px; border-radius: 50%;">
                                </div>
                                <input class="form-control" type="file" id="formFile" style="margin-top: 25px; margin-bottom: 25px;">  
								<form class="forms-sample">
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Username</label>
										<input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
									</div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-primary me-2">Save Changes</button>
                                    </div>
								</form>

              </div>
            </div>
        </div>
    </div>
    </div>
    
    
</template>
<script>
    import { RiArrowRightSLine, RiDeleteBinFill } from "vue-remix-icons";
import fetchData from "../../services/fetchData.js";
export default {
  components: {
    RiArrowRightSLine,
    RiDeleteBinFill,
  },}
</script>
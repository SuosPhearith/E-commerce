<template>
  <div>
    <div>
      <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">About</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">About</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center mb-3 mt-4">Our Team</h2>
          <p class="text-muted text-center mb-4 pb-2">
            Choose the features and functionality your team need today. Easily
            upgrade as your company grows.
          </p>
          <div class="container">
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body">
                    <div class="w-100 bg-primary d-flex justify-content-center">
                      <img
                        :src="phearith"
                        alt="image"
                        style="
                          width: 100%;
                          height: 100%;
                          /* border-radius: 50%; */
                          object-fit: cover;
                        "
                      />
                    </div>
                    <h3 class="mt-3">Suos Phearith</h3>
                    <h5 class="my-3 text-secondary">Backend Developer</h5>
                    <p>
                      <span
                        ><RiPhoneLine class="me-2" style="width: 20px"
                      /></span>
                      069 265 958
                    </p>
                    <p>
                      <span
                        ><RiMailLine class="me-2" style="width: 20px"
                      /></span>
                      suosphearith@gmail.com
                    </p>
                    <div class="d-grid">
                      <button class="btn btn-primary mt-4">Contact</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body">
                    <div class="w-100 bg-primary d-flex justify-content-center">
                      <img
                        :src="phearith"
                        alt="image"
                        style="
                          width: 100%;
                          height: 100%;
                          /* border-radius: 50%; */
                          object-fit: cover;
                        "
                      />
                    </div>
                    <h3 class="mt-3">Suos Phearith</h3>
                    <h5 class="my-3 text-secondary">Backend Developer</h5>
                    <p>
                      <span
                        ><RiPhoneLine class="me-2" style="width: 20px"
                      /></span>
                      069 265 958
                    </p>
                    <p>
                      <span
                        ><RiMailLine class="me-2" style="width: 20px"
                      /></span>
                      suosphearith@gmail.com
                    </p>
                    <div class="d-grid">
                      <button class="btn btn-primary mt-4">Contact</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body">
                    <div class="w-100 bg-primary d-flex justify-content-center">
                      <img
                        :src="phearith"
                        alt="image"
                        style="
                          width: 100%;
                          height: 100%;
                          /* border-radius: 50%; */
                          object-fit: cover;
                        "
                      />
                    </div>
                    <h3 class="mt-3">Suos Phearith</h3>
                    <h5 class="my-3 text-secondary">Backend Developer</h5>
                    <p>
                      <span
                        ><RiPhoneLine class="me-2" style="width: 20px"
                      /></span>
                      069 265 958
                    </p>
                    <p>
                      <span
                        ><RiMailLine class="me-2" style="width: 20px"
                      /></span>
                      suosphearith@gmail.com
                    </p>
                    <div class="d-grid">
                      <button class="btn btn-primary mt-4">Contact</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body">
                    <div class="w-100 bg-primary d-flex justify-content-center">
                      <img
                        :src="phearith"
                        alt="image"
                        style="
                          width: 100%;
                          height: 100%;
                          /* border-radius: 50%; */
                          object-fit: cover;
                        "
                      />
                    </div>
                    <h3 class="mt-3">Suos Phearith</h3>
                    <h5 class="my-3 text-secondary">Backend Developer</h5>
                    <p>
                      <span
                        ><RiPhoneLine class="me-2" style="width: 20px"
                      /></span>
                      069 265 958
                    </p>
                    <p>
                      <span
                        ><RiMailLine class="me-2" style="width: 20px"
                      /></span>
                      suosphearith@gmail.com
                    </p>
                    <div class="d-grid">
                      <button class="btn btn-primary mt-4">Contact</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { RiArrowRightSLine, RiPhoneLine, RiMailLine } from "vue-remix-icons";
import phearith from "../../assets/img/phearith.jpg";
export default {
  components: {
    RiArrowRightSLine,
    RiPhoneLine,
    RiMailLine,
  },
  data() {
    return {
      phearith: phearith,
    };
  },
};
</script>

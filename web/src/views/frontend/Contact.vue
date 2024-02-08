<template>
  <div>
    <div class="my-breadcrumb my-breadcrumb-image">
        <h2 class="my-breadcrumb-title">Contact</h2>
        <div class="my-breadcrumb-item">
          <RouterLink to="/en/home">Home</RouterLink
          ><RiArrowRightSLine style="width: 15px" />
          <a href="">Contact</a>
        </div>
      </div>
      <div class="container card my-5 p-5">
    <div class="sethy-contact-flex1">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.741180889949!2d104.89551077600457!3d11.570402744045277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517388680e15%3A0x63057e6682968f5!2sInstitute%20of%20Technology%20of%20Cambodia!5e0!3m2!1sen!2skh!4v1707295187453!5m2!1sen!2skh" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
        </div>
    <div class="sethy-contact-getintouch text-center">
      Get In Touch With Us
    </div>
    <div class="sethy-contact-flex text-center">
      <div class="sethy-contact-detail">
        For More Information About Our Product & Services. Please Feel Free To
        Drop Us An Email. Our Staff Always Be There To Help You Out. Do Not
        Hesitate!
      </div>
    </div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-12 col-md-5 sethy-contact-row2">
        <div class="sethy-contact-flex1">
          <div class="sethy-contact-address-svg">
            <i class="ri-map-pin-2-fill"></i>
          </div>
          <div class="sethy-contact-address">
            <div class="sethy-contact-address-name">Address</div>
            <div class="sethy-contact-address-info">
              Toul Kork, Phnom Penh, Cambodia
            </div>
          </div>
        </div>

        <div class="sethy-contact-flex1">
          <div class="sethy-contact-phone-name">
            <i class="ri-phone-fill"></i>
          </div>
          <div class="sethy-contact-phone">
            <div class="sethy-contact-phone-name">Phone</div>
            <div class="sethy-contact-phone-info">
              Mobile: +(855) 123456789 <br />
              Hotline: +(855) 987654321
            </div>
          </div>
        </div>

        <div class="sethy-contact-flex1">
          <div class="sethy-contact-worktime-svg">
            <i class="ri-time-fill"></i>
          </div>
          <div class="sethy-contact-worktime">
            <div class="sethy-contact-worktime-name">Working Time</div>
            <div class="sethy-contact-worktime-info">
              Monday-Friday: 9:00 - 22:00 <br />
              Saturday-Sunday: 9:00 - 21:00
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <form>
          <div class="mb-3">
            <label for="sethy-contact-name" class="form-label">Your name</label>
            <input type="text" class="form-control" id="sethy-contact-name" placeholder="Abc" />
          </div>
          <div class="mb-3">
            <label for="sethy-contact-email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="sethy-contact-address" placeholder="Abc@def.com" />
          </div>
          <div class="mb-3">
            <label for="sethy-contact-subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="sethy-contact-subject" placeholder="This is optional" />
          </div>
          <div class="mb-3">
            <label for="sethy-contact-message" class="form-label">Message</label>
            <textarea name="" id="sethy-contact-message" cols="30" rows="10" class="form-control" placeholder="Hi! I'd like to ask about"></textarea>
          </div>
          

          <button type="submit" class="btn btn-primary sethy-contact-submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </div>
 
</template>

<script>
import fetchData from "../../services/fetchData.js";
import { RiArrowRightSLine, RiDeleteBinFill } from "vue-remix-icons";
export default {
  components: {
    RiArrowRightSLine,
    RiDeleteBinFill,
  },
}
</script>
<style scoped>
/* Checkout-Html */
#billing {
  font-size: 36px;
  font-weight: 600;
  margin-bottom: 50px;
  margin-top: 50px;
}
.Label {
  font-size: 16px;
  font-weight: 600;
}
.Sethy-Product {
  display: flex;
  justify-content: space-between;
}
.Sethy-Bank {
  display: flex;
  margin-top: 30px;
}
.directBankTransfer {
  margin-left: 20px;
}
.directBankTransfer1 {
  margin-left: 20px;
  color: grey;
}
.sethy-product {
  margin-top: 50px;
  font-size: 16px;
  font-weight: 600;
}
#pname {
  font-size: 14px;
  color: grey;
  margin-top: 10px;
}
#pname span {
  font-size: 14px;
  color: black;
}
.pprice {
  font-size: 14px;
  color: black;
  margin-top: 10px;
}
#tprice {
  font-size: 24px;
  color: gold;
  margin-top: 10px;
}
.Detail {
  width: 100%;
  font-size: 14px;
  margin-top: 10px;
  color: grey;
}

#policy {
  width: 100%;
  font-size: 14px;
  margin-top: 10px;
  color: black;
}
.submitbtn {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.submitbtn button {
  border-radius: 10px;
  border: 2px solid black;
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 10px;
  padding-bottom: 10px;
}
.submitbtn button:hover {
  background-color: rgb(120, 125, 128);
}

/* Cart-Html */
#line {
  width: 100%;
  border: 1px solid grey;
}
.sethy-cart-table tr th {
  background-color: #fff9e5;
}
@media (max-width: 575.98px) {
  .sethy-cart-tablebody img {
    width: 30px;
    height: 30px;
    display: none;
  }
  .sethy-cart-qty {
    width: 10px;
  }
  .sethy-contact-detail{
    display: none;
  }
  .sethy-contact-row2{
    display: none;
}
}
@media (min-width: 576px) and (max-width: 767.98px) {
  .sethy-cart-tablebody img {
    width: 40px;
    height: 40px;
    display: none;
  }
  .sethy-cart-qty {
    width: 20px;
  }
  .sethy-contact-detail{
    display: none;
  }
  .sethy-contact-row2{
    display: none;
}
}
@media (min-width: 768px) and (max-width: 991.98px) {
  .sethy-cart-tablebody img {
    width: 50px;
    height: 50px;
  }
  .sethy-cart-tablebody img {
    width: 40px;
    height: 40px;
    display: none;
  }
  .sethy-cart-qty {
    width: 20px;
  }
  .sethy-contact-detail{
    display: none;
  }
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  .sethy-cart-tablebody img {
    width: 60px;
    height: 60px;
  }
  .sethy-cart-qty {
    width: 20px;
  }
}
@media (min-width: 1200px) {
  .sethy-cart-tablebody img {
    width: 70px;
    height: 70px;
  }
  .sethy-cart-qty {
    width: 20px;
  }
}
.sethy-cart-tablebody {
  text-align: center;
  align-items: center;
}
.sethy-cart-td {
  text-align: center;
}
.sethy-cart-td i {
  font-size: 18px;
}
.sethy-container {
  background-color: whitesmoke;
  padding-bottom: 50px;
}
.sethy-cart-body {
  width: 100vw;
  margin: 0;
  padding: 0;
}
.sethy-cart-carttotal-container {
  background-color: #fff9e5;
}
.sethy-cart-carttotal {
  font-size: 32px;
  font-weight: 600;
  margin-top: 30px;
  margin-bottom: 40px;
}
.sethy-cart-totalful {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
}
.sethy-cart-total {
  font-size: 16px;
  color: black;
  margin-bottom: 50px;
}
.sethy-cart-subprice {
  font-size: 16px;
  font-weight: 500px;
  color: grey;
}
.sethy-cart-totalprice {
  font-size: 20px;
  color: gold;
}
.sethy-cart-subtotal {
  font-size: 16px;
  font-weight: 500px;
  color: black;
}
.sethy-checkout {
  border: 2px solid black;
  border-radius: 10px;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-bottom: 60px;
  background-color: #fff9e5;
}
.sethy-checkout:hover {
  background-color: #e9d595;
}
.sethy-inputNumber {
  width: 70px;
}
.sethy-contact-getintouch {
  font-size: 32px;
  font-weight: 700px;
  margin-bottom: 20px;
}
.sethy-contact-flex {
  display: flex;
  justify-content: center;
}
.sethy-contact-flex1 {
  display: flex;
  margin-bottom: 30px;
}
.sethy-contact-detail {
  width: 50%;
  margin-bottom: 40px;
}
.sethy-contact-address-name{
    margin-bottom: 5px;
}
.sethy-contact-phone-name{
    margin-bottom: 5px;
}
.sethy-contact-worktime-name{
    margin-bottom: 5px;
}
#sethy-contact-message{
    height: 100px !important;
}
.sethy-contact-submit{
    width: 200px;
    background-color: white !important;
    border-radius: 10px !important;
    color: black !important;
    border: 1px solid black !important;
}
.sethy-contact-submit:hover{
    background-color: grey !important;
}
</style>

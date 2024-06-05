<?php
require_once(APPPATH . 'views/header.php');
?>





<div class="account_signup">

    <h5 class="account_login" style="font-family: Roboto Slab, serif;">SIGNUP PAGE</h5>

    <div class="account-fileds-signup">
        <input type="text" placeholder="First Name" style="text-transform: capitalize;" name="firstname" class="form-control account-text">
        <input type="text" placeholder="Last Name " style="text-transform: capitalize;" name="Lastname" class="form-control account-text">
        <input type="email" placeholder="Email" style="text-transform: capitalize;" name="email" class="form-control account-text">
        <input type="password" placeholder="Password" name="password" class="form-control account-text">
        <input type="confirm_password" placeholder="Confirm Password" name="confirm_password" class="form-control account-text">
        <button class="login_btn">Sign Up</button>
        <p class="signup">Already have an account? <a class="signup" href="account">Log In</a></p>
    </div>


    




</div>

























<hr>




<?php
require_once(APPPATH . 'views/footer.php');
?>
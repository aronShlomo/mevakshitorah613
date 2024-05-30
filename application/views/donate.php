<?php
require_once(APPPATH . 'views/header.php');
?>



<div class="donation-container">
    <p class="donation-title">DONATION PAGE</p>
    <p style="margin-left: 12px ; text-align: center; width: 100%; font-weight: lighter;" >Please fill the fileds for the record.  </p>

    <div class="donation-form">
        <?php if ($error = $this->session->flashdata('error')) : ?>
            <div class="row">
                <div class="alert alert-dismissible alert-danger error">
                    <?php echo $error; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($donation = $this->session->flashdata('donation')) : ?>
            <div class="row">
                <div class="alert alert-dismissible alert-success error">
                    <?php echo $donation; ?>
                </div>
            </div>
        <?php endif; ?>


        <?php echo form_open('home/donatebtn'); ?>
        <input type="text" style="text-transform: capitalize;" placeholder="First Name" name="firstname" class="form-control donate-input">
        <input type="text" style="text-transform: capitalize;" placeholder="Last Name" name="lastname" class="form-control donate-input">
        <input type="email" name="email" placeholder="Email" class="form-control donate-input">
        <input type="text" name="money" placeholder="Amount" class="form-control donate-input">
        <button type="submit" class="donate-btn">DONATE</button>
        <?php echo form_close(); ?>


        <!-- <a  href="https://www.paypal.com/signin">Donation</a> -->
    </div>

</div>








<hr>








<?php
require_once(APPPATH . 'views/footer.php');
?>
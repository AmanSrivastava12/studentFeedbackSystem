<?php
include('dbconfig.php');
extract($_POST);
if (isset($save)) {

    mysqli_query($conn, "insert into contact values('','$n','$m','$e','$msg',now())");

    $err = "<font color='green'>Admin Will Contact you soon</font>";
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>
                <font color="#B4B379">Contact us </font>
            </h3>
            <form name="sentMessage" method="post" id="contactForm" novalidate>
                <?php echo @$err; ?>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Mobile Number:</label>
                        <input type="number" class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="3" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" name="save" class="btn btn-primary">SEND MESSAGE</button>
                <h1></h1>
            </form>
        </div>
        <div class="col-md-4" style="margin-top:30px">
            <h3>Contact Details</h3>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone"></abbr>: (+91)7985739073
            </p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email"></abbr>: <a href="mailto:amansriv120@gmail.com">amansriv120@gmail.com</a>
            </p>
        </div>
    </div>
</div>
<br/><br/>
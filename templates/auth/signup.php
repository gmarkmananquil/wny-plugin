<form action="" method="post">

    <?php echo wny()->notification()->display("general"); ?>

    <div id="wny-signup" class="form">
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Your email address" class="input-medium" />
            <?php echo wny()->notification()->display("email"); ?>
        </div>
        
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" placeholder="Your password" class="input-medium" />
            <?php echo wny()->notification()->display("password"); ?>
        </div>
        
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" placeholder="Re-type password" class="input-medium" />
            <?php echo wny()->notification()->display("cpassword"); ?>
        </div>


        <div class="form-group">
            <label class="terms-condition">
                <input type="checkbox" name="term-agreement" id="term-agreement" />
                I have read, understand and agree to the WellbeingNearYou <a href="#">Terms of Service Agreement</a>.
            </label>
        </div>


        <div class="submit-button">
            <input type="submit" name="<?php echo WNY_SUBMIT_SIGNUP; ?>" value="Sign up" />
        </div>

    </div>



</form>
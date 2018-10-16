<form action="" method="post" class="form">
    
    <div id="wny-signup">
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Your email address" />
        </div>
        
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" placeholder="Your password" />
        </div>
        
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" placeholder="Re-type password">
        </div>
        
        <div class="submit-button">
            <input type="submit" name="<?php echo WNY_SUBMIT_SIGNUP; ?>" value="Sign up" />
        </div>
        
    </div>
    
</form>
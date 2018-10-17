<form action="" method="post">

    <?php echo wny()->notification()->display(); ?>

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
            <label class="terms-condition">
                <input type="checkbox" name="term-agreement" id="term-agreement" />
                Remember me
            </label>
        </div>

        <div class="form-group">
            <a href="#">Forgot Password?</a>
        </div>

        <div class="submit-button">
            <input type="submit" name="<?php echo WNY_SUBMIT_SIGNUP; ?>" value="Login" />
        </div>

    </div>
</form>
<form method="post">
    
    <div id="wny-create-practitioner">
    
        <h4>Registration Form</h4>
        
        <p>
            This control panel will enable you to edit your contact details, and information about
            the services that you wish to promote and where you are promoting them. Please make sure your details are correct, and don't forget
            to add at least one service, including the location.
        </p>
        
        <hr>
        
        <div id="section-practitioner-name">
            <h4>Name</h4>
            <div class="form">
                <div class="form-group">
                    <label for="title">Title</label>
                    <div class="form-input-group">
                        <input type="checkbox" name="title" id="title" value="dr."/> DR.
                        <p>Only use the title of "Dr" if you are authorized to do so.</p>
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="first_name">First name : </label>
                    <input type="text" name="first_name" id="first_name" />
                </div>
        
                <div class="form-group">
                    <label for="last_name">Last name : </label>
                    <input type="text" name="last_name" id="last_name" />
                </div>
        
                <div class="form-group">
                    <label for="suffix">Suffix : </label>
                    <div class="form-input-group">
                        <input type="text" name="suffix" id="suffix" />
                        <p>
                            Enter any letters you use after your name. If you have letters from multiple qualifications,
                            separate them using a comma. Only add letters if you are authorised to do so.
                        </p>
                    </div>
                </div>
            </div> <!--.form -->
            
            
            <h4>Screen-name (for creating reviews)</h4>
            
            <p>This is your identity used to create reviews about other practitioners, if you choose to do so.</p>
            
            <p>To protect your privacy, it should not include your real name and should hide your identity.
                It may consist of letter or numbers which can be separated by "-" or "_". For example,
                it may look like a nick-name.</p>
            
            <p>If you create a review (Endorsements, Written reviews or Tags) of the services of
                any other practitioner, only your Screen-name will be visible next your reviews.</p>
            
            <p>Your Professional profile and real name will never be linked to your reviews,
                so nobody will be able to see the real name of the reviewer.</p>
            
            <?php /** TODO: DETERMINE IF THIS IS USERNAME  **/ ?>
            <p>
                * <input type="text" name="alias" id="alias" />
            </p>
            
        </div> <!--#section-practitioner-name-->
        
        <hr>
        
        
        <div id="section-account-details">
            <h4>Account Details</h4>
    
            <div class="form">
                <div class="form-group">
                    <label for="email">Account Email <span class="required">*</span> : </label>
                    <input type="text" name="email" id="email">
                </div>
    
                <div class="form-group">
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </div>
    
                <div class="form-group">
                    <label for="cpassword">Confirm password : </label>
                    <input type="password" name="cpassword" id="cpassword">
                </div>
            </div>
        </div><!--#section-account-details-->
    
        
        <hr>
        
        <div id="section-profession">
            <h4>Profession</h4>
    
            <p>Try to describe your profession using as few words as possible. Try to use just one word if possible.</p>
            <input type="text" name="profession" id="profession" placeholder="Your profession...">
    
            <div class="spacer-small"></div>
    
            <div class="form">
                <div class="form-group">
                    <label for="qualifications">Qualifications : </label>
                    <input type="text" name="qualifications" id="qualifications">
                </div>
    
                <div class="form-group">
                    <label for="memberships">Memberships : </label>
                    <input type="text" name="memberships" id="memberships">
                </div>
            </div>
        </div><!--#section-profession-->
        
        
        <hr>
        
        <div id="section-profile-photo">
            <h4>Profile Photo</h4>
    
            <p>Please make sure that your profile photo includes your face,
                like a passport photo. However, unlike a passport photo, it is advisable to smile,
                or at least have more of a positive facial expression. Try to make your photo as appealing
                as possible to your potential customers.</p>
    
            <div id="profile-photo">
            
            </div>
        </div><!--#section-profile-photo-->
        
        
        <hr>
        
        <div id="section-gender">
        
            <h4>Gender</h4>
            
            <div class="form">
                <label>
                    <input type="radio" name="gender" value="male" class=""> Male
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" value="female" class=""> Female
                </label>
            </div>
            
        </div>
        
        <hr>
        
        <div id="section-dob">
            
            <h4>Date of Birth</h4>
            <p>Your date of birth will not be displayed on your profile and neither will your age.
                We only ask for this information as a security measure, to help protect you from being
                impersonated by another user.</p>
            
            <div class="form">
                <label>Date : <input type="text" name="dob" class="dob" /></label>
            </div>
            
        </div>
        
        <hr>
        
        <div id="section-contact-details">
            
            <h4>Contact Details</h4>
            
            <div class="form">
                <div class="form-group">
                    <label for="telephone">Telephone : </label>
                    <input type="text" name="telephone" id="telephone" class="form-input" />
                </div>
                <div class="form-group">
                    <label for="email">Office email : </label>
                    <input type="text" name="office_email" id="email" class="form-input" />
                </div>
                <div class="form-group">
                    <label for="website">Website : </label>
                    <input type="text" name="website" id="website" class="form-input" />
                </div>
                <div class="form-group">
                    <label for="address">Address : </label>
                    <div class="address-group">
                        <input type="text" name="address" id="address" class="form-input" />
                        <input type="text" name="address2" id="address2" class="form-input" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="city">City : </label>
                    <input type="text" name="city" id="city" class="form-input" />
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode : </label>
                    <input type="text" name="postcode" id="postcode" class="form-input" />
                </div>
                <div class="form-group">
                    <label for="country">Country : </label>
                    <select name="country" id="country">
                        <option value=""></option>
                        <?php foreach(COUNTRIES as $key => $country): ?>
                            <option value="<?php echo $key; ?>"><?php echo $country; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <p>Your email address will not be visible on your profile,
                though potential customers will be able to send a message to your email address,
                using a contact form at the bottom of your profile page.</p>
            
        </div>
        
        <hr>
        
        <div id="section-short-intro">
            
            <h4>Short Introduction</h4>
            
            <p>Please enter a short introductory sentence to introduce yourself to potential customers, only between 105 and 230 characters long.</p>
        
            <textarea name="short_intro" id="short_intro" cols="30" rows="10"></textarea>
            <div class="text-small">You have entered 0 characters.</div>
            
        </div>
        
        <div id="section-long-intro">
            
            <h4>Long Introduction</h4>
            
            <p>This is where you have the opportunity to introduce yourself to your potential customers.
                Start with a warm opening, then describe yourself. I recommend explaining the connection between you and
                the services you provide. What helped you decide to become a healer or a therapist?
                Or perhaps an act of fate chose your career for you? If you have been working for a long time,
                it might be a good idea to mention how long you have been providing your services.
                Let your potential customers know about your individuality and distinctiveness.
                A profile with both professionalism and personality goes a long way.</p>
            
            
            <p>Please write between 180 and 1250 characters. Also, please do not include your contact details in this section.
                Contact information can only be entered into the Contact Details section.</p>
        
            <textarea name="long_intro" id="long-intro" cols="30" rows="10"></textarea>
            
            <p>Note: Please don't include the names of any medical conditions in any part of your profile,
                even if you have been able to treat them successfully (unless you have the appropriate qualifications to
                treat the conditions). Also, please do not include the words "cure", "treat" or "treatment".
                When your clients create a Basic User account and they give you feeback, thfey will have the opportunity of
                explaining how you helped them.</p>
            
        </div>
        
        <hr>
        
        <div id="section-clients">
            
            <h4>Clients</h4>
            
            <p>Please check the boxes next to the type of clients you work with.</p>
            
            <div class="form">
                
                <?php $ages = wnyHelper::agesList(); ?>
                <div class="form-group">
                    <div class="form-label">Age : </div>
                    <?php foreach($ages as $key => $age): ?>
                        <div class="group-<?php echo $key; ?>" data-id="<?php echo $age->term_id; ?>">
                            <label>
                                <input type="checkbox" name="ages[]" value="<?php echo $age->term_id; ?>" />
                                <?php echo $age->name; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
	
				<?php $sizes = wnyHelper::sizesList(); ?>
                <div class="form-group">
                    <div class="form-label">Group size : </div>
					<?php foreach($sizes as $key => $size): ?>
                        <div class="group-<?php echo $key; ?>" data-id="<?php echo $size->term_id; ?>">
                            <label>
                                <input type="checkbox" name="sizes[]" value="<?php echo $size->term_id; ?>" />
								<?php echo $size->name; ?>
                            </label>
                        </div>
					<?php endforeach; ?>
                </div>
            
            </div>
            
        </div>
        
        <hr>
        
        <div id="section-language">
            
            <h4>Languages</h4>
            
            <p>Please add the languages you speak. Though please only add a language if you feel you are sufficiently
                fluent enough, to provide therapy for a client who only spoke that language.</p>
            
            <!-- List of languages here -->
            <div class="form">
                <?php $languages = wnyHelper::languagesList(); ?>
                <?php foreach($languages as $key => $language): ?>
                    <div class="form-group form-group-<?php echo $key; ?>" data-id="<?php echo $language->term_id; ?>" >
                        <label>
                            <input type="checkbox" name="languages[]" value="<?php echo $language->term_id; ?>" />
                            <?php echo $language->name; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            
        </div>
        
        <hr>
        
        <div id="section-services">
            
            <h4>Services</h4>
            
            <p>Add your services below. If you don't see the service you provide,
                please <a href="#">contact us</a> and we will add it to the site, providing we feel it is appropriate.</p>
            
            <!-- List of services here -->
            <div class="form">
                <?php $services = wnyHelper::servicesList(); ?>
                <?php foreach($services as $key => $service): ?>
                    <div class="form-group form-group-<?php echo $key; ?>" data-id="<?php echo $service->term_id; ?>" >
                        <label>
                            <input type="checkbox" name="services[]" value="<?php echo $service->term_id; ?>" />
                            <?php echo $service->name; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            
        </div>
        
        <hr>
        
        <div id="section-profile-type">
            
            <h4>Set profile type</h4>
            
            <p>A Regular profile enables you to write up to 1000 characters about yourself and your services.
                It enables you to receive Endorsements for your services, but does not enable you to receive Written reviews.</p>
            
            <p>An Expanded profile provides more space to write about yourself and your services, up to 2000 characters.
                It is also long enough for you to receive both Endorsements and Written reviews.</p>
            
            <div class="form">
                <div class="form-group">
                    <label>
                        <input type="radio" name="profile_type" class=""> Regular
                    </label>
                    <label>
                        <input type="radio" name="profile_type" class=""> Expanded (Receive written reviews)
                    </label>
                </div>
            </div>
            
        </div>
        
        <hr>
        
        <div id="section-termsandagreement">
            <div class="">
                <label>
                    <input type="checkbox" name="term-agreement" id="term-agreement" />
                    I have read, understand and agree to the WellbeingNearYou <a href="#">Terms of Service Agreement</a>.
                </label>
            </div>
        </div>
        
        <hr>
        
        <?php //TODO: will just add later, after finish google captcha ?>
        <!--<div id="section-security-section">
        
            <p>To prove you are human, please complete this calculation: </p>
        
            <input type="hidden" id="security_1" name="security_1" value="">
            <input type="hidden" id="security_2" name="security_2" value="">
            
            <div>
                <?php /*//TODO: How about google captcha? */?>
                9 + 4 = <input type="text" id="security-question" name="security-question" />
            </div>
        </div>-->
        
        <div id="submit-button">
            <input type="submit" name="<?php echo WNY_SUBMIT_PRAC_PROFILE; ?>" id="<?php echo WNY_SUBMIT_NAME; ?>" class="wny-button-submit" value="Create account" />
        </div>
    
    </div> <!--#wny-create-practitioner -->

</form>




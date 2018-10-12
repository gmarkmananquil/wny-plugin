<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 *
 *
 * <header class="entry-header">
 * <h1 class="entry-title"><?php echo $practitionerObject->post_title ?></h1>
 * </header><!-- .entry-header -->
 *
 * <div class="entry-content">
 *
 * </div><!-- .entry-content -->
 */
get_header();


remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');

genesis();

function custom_loop()
{
	
	echo "This content has moved";
	return false;
	
	$debug = true;
	global $wp_query;
	$v = $wp_query->query_vars;
	//var_dump($v);
	
	$practitionerObject = get_post(get_the_ID());
	$practitionerId = get_the_ID();
	$p = new Practitioner($practitionerId);
	
	?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header"><h1 class="entry-title"
                                                 itemprop="headline"><?php echo $practitionerObject->post_title ?></h1>
                </header>
                <div class='entry-content'>
					
					<?php
					
					
					$endorsement_stats = $p->get_all_endorsement_stats();
					
					//var_dump($endorsement_stats);
					
					// echo $practitionerId;
					
					$num_endorsements = $p->get_num_endorsements();
					$num_reviews = $p->get_num_reviews();
					
					//var_dump($practitionerObject);
					
					$meta_data = $p->get_post_meta();
					
					global $current_user;
					global $wpdb;
					$user_id = $current_user->ID;
					
					$media = get_attached_media('image', $practitionerId);
					//echo "MEDIA=";
					$imageObject = array_shift($media);
					//var_dump($imageObject->guid);
					
					$terms = wp_get_post_terms($practitionerId, 'therapies');
					
					$term_status = array();
					
					foreach ($terms as $term) {
						
						$term_status[$term->term_id] = $wpdb->get_var($wpdb->prepare("SELECT status FROM {$wpdb->prefix}wnyp_endorsements WHERE practitioner_id=%d AND service_id=%d AND user_id=%d", $practitionerId,
							$term->term_id,
							$user_id));
						
					}
					
					
					$has_reviews = ($meta_data['profile-type'] == "expanded");
					
					
					?>

                    <div id="author_pic">
                        <!--
						<img src="http://www.therapynearyou.com/wordpress2/wp-content/uploads/2015/06/avatar-blackadder-200.jpg" alt="Basic User" />
						-->
                        <img src='<?php echo $imageObject->guid ?>'/>
                    </div>
                    <div class="float-right margin-left-bottom width-150">
                        <div class="thnru-review-box-sm">

                            <!-- Edit:  -->
                            <strong>Endorsements:</strong>
                            <div class="thnru-points">
                                <a href="/endorse/<?php echo $practitionerId ?>">
									<?php echo $num_endorsements ?>
                                </a>
                            </div>
							
							<?php if ($has_reviews) { ?>
                                <hr/>

                                <strong>Total reviews:</strong>
                                <b><?php echo $num_reviews ?></b>
							<?php } ?>

                        </div>
						
						<?php if ($has_reviews) { ?>
                            <div class="thnru-button-orange margin-top-10"><a
                                        href="/review/<?php echo $practitionerId ?>">Give feedback</a></div>
						<?php } ?>


                    </div>
                    <div class="vanishing-line">

                        <hr/>

                    </div>
					<?php
					echo $practitionerObject->post_content;
					
					?>
                    <hr/>

                    <h4>CV</h4>

                    <p class="cv-col-left">Profession:</p>
                    <p class="cv-col-right"><?php echo echo_field($meta_data['profession'][0]) ?></p>
                    <p class="cv-col-left">Qualifications:</p>
                    <p class="cv-col-right"><?php echo echo_field($meta_data['qualification'][0]) ?></p>
                    <p class="cv-col-left">Memberships:</p>
                    <p class="cv-col-right"><?php echo echo_field($meta_data['memberships'][0]) ?></p>
                    <p class="cv-col-left">Location:</p>
                    <p class="cv-col-right"><?php echo echo_field($meta_data['city'][0]) ?>
                        , <?php echo echo_field($meta_data['country'][0]) ?></p>


                    <hr/>

                    <h4>People I provide services for</h4>
                    <p class="cv-col-left">Ages:</p>
                    <p class="cv-col-right">
						<?php
						$terms = wp_get_post_terms($practitionerId, 'clients-ages');
						$term_list = array();
						foreach ($terms as $term) {
							$term_list[] = $term->name;
						}
						$str = implode(",", $term_list);
						
						if (!$str) echo "-";
						
						?>
                    </p>
                    <p class="cv-col-left">Group sizes:</p>
                    <p class="cv-col-right">
						<?php
						$terms = wp_get_post_terms($practitionerId, 'client-numbers');
						$term_list = array();
						foreach ($terms as $term) {
							$term_list[] = $term->name;
						}
						$str = implode(",", $term_list);
						
						if (!$str) echo "-";
						?>

                    </p>
                    <p class="cv-col-left">Languages:</p>
                    <p class="cv-col-right">
						<?php
						$terms = wp_get_post_terms($practitionerId, 'languages');
						$term_list = array();
						foreach ($terms as $term) {
							$term_list[] = $term->name;
						}
						$str = implode(",", $term_list);
						if (!$str) echo "-";
						
						?>


                    </p>


                    <hr/>

                    <!--
					<p class='error'>Content to go here?</p>
					<hr />
					-->

                    <h3>Endorsements received for services</h3>

                    <pre>
    
<?php

//var_dump($endorsement_stats);
$services = wp_get_post_terms($practitionerId, 'therapies');

//  var_dump($services);


?>
</pre>
                    <div class="skills-narrow">
                        <ul>
							<?php
							
							//var_dump($term_status);
							
							foreach ($services as $term) {
								$num = (isset($endorsement_stats[$term->term_id])) ? $endorsement_stats[$term->term_id] : 0;
								
								
								?>

                                <li><a id='num_endorsements_<?php echo $term->term_id ?>'><?php echo $num ?></a></li>
								
								
								<?php
								
								// if this number includes endorsements from current user, add a variable here for the number of endorsements NOT INCLUDING this user.
								
								if ($term_status[$term->term_id] && $num > 0) {
									$num--;
								}
								
								
								// type="hidden"
								?>
                                <input type="hidden" id="term_endorsements_<?php echo $term->term_id ?>"
                                       value="<?php echo $num ?>"/>
								
								
								<?php
							}
							?>
                        </ul>
                    </div>
                    <div class="skills-wide">
                        <ul>
                            <!--
						<li>Reiki<a><img id="image1" title="Add endorsement" src="/image-files/sprites/add.gif" alt="" border="0" /></a></li>
						<li>Applied Kinesiology<a><img id="image2" title="Remove endorsement" src="/image-files/sprites/remove.gif" alt="" border="0" /></a></li>
						<li>Counselling<a><img id="image3" title="Add endorsement" src="/image-files/sprites/add.gif" alt="" border="0" /></a></li>
						<li>Herbal Medicine<a><img id="image4" title="Add endorsement" src="/image-files/sprites/add.gif" alt="" border="0" /></a></li>
						<li>Spiritual Development<a><img id="image5" title="Add endorsement" src="/image-files/sprites/add.gif" alt="" border="0" /></a></li>
							-->
							
							<?php
							foreach ($services as $term) {
								?>
                                <li><?php echo $term->name ?>
									
									<?php
									if ($term_status[$term->term_id]) {
										
										?>
                                        <img id="add_endorsement_<?php echo $term->term_id ?>"
                                             onclick='toggle_endorsement_on_practitioner_page(<?php echo $term->term_id ?>,<?php echo $practitionerId ?>)'
                                             style="display:none;" title="Add endorsement"
                                             src="/image-files/sprites/add.gif" alt="" border="0"/>
                                        <img id="remove_endorsement_<?php echo $term->term_id ?>"
                                             onclick='toggle_endorsement_on_practitioner_page(<?php echo $term->term_id ?>,<?php echo $practitionerId ?>)'
                                             title="Add endorsement" src="/image-files/sprites/remove.gif" alt=""
                                             border="0"/>
										
										<?php
										
									} else {
										?>
                                        <img id="add_endorsement_<?php echo $term->term_id ?>"
                                             onclick='toggle_endorsement_on_practitioner_page(<?php echo $term->term_id ?>,<?php echo $practitionerId ?>)'
                                             title="Add endorsement" src="/image-files/sprites/add.gif" alt=""
                                             border="0"/>
                                        <img id="remove_endorsement_<?php echo $term->term_id ?>"
                                             onclick='toggle_endorsement_on_practitioner_page(<?php echo $term->term_id ?>,<?php echo $practitionerId ?>)'
                                             style="display:none;" title="Add endorsement"
                                             src="/image-files/sprites/remove.gif" alt="" border="0"/>
										
										<?php
										
									}
									?>


                                </li>
								<?php
							}
							
							?>

                        </ul>
                    </div>

                    <hr/>
                    <!--
					<p class='error'>Content to go here?</p>
					
					<hr />
					-->
                    <h3>Written Reviews received</h3>
                    <p class="mini-text-wordspace">Display reviews: <b>Most recent</b> <a>Most tags</a></p>
					
					
					<?php
					
					$reviews = $p->get_all_reviews();
					
					foreach ($reviews as $review) {
						
						// style="border:2px solid #ce2111;padding:2em"
						?>

                        <div class="inside-user-feedback-v34">
                            <div id="testimonial-intro-text">
								
								<?php
								//var_dump($review);
								
								$reviewObject = new Review($review->id);
								
								
								?>

                                <a><?php echo $review->username ?></a> had <strong><?php echo $review->num_sessions ?>
                                    sessions</strong> of <?php echo $review->service_name ?>:

                            </div>
                            <div class="testimonial-text width-100pc">

                                <p><?php echo $review->review; ?></p>

                            </div>
                            <p class="thnru-mini-text float-right"><?php echo strftime("%d %B %Y", strtotime($review->modified)) ?></p>


                            <hr/>
                            <p class="thnru-mini-text">Tags with this review:</p>
							<?php
							$tags = $reviewObject->getTags();
							
							foreach ($tags as $tag) {
								?>
                                <p class="tags"><?php echo $tag ?></p>
								<?php
							}
							?>

                        </div>
						
						<?php
						
					}
					
					?>

                    <div style="clear: both;"></div>
                    <div class="gap"></div>

                    <hr/>
					
					<?php if (false) { ?>
                        <pre><code>
<?php var_dump($meta_data); ?>
</code></pre>
					<?php } ?>

                    <h2>Contact</h2>
                    If you are interested in my services and wish to contact me, please use the contact details below.

                    <div class="contact_info">


                        <div class="dynamic-col-30pc-left">
                            <h4>Telephone</h4>
                        </div>
                        <div class="dynamic-col-30pc-right">
							
							<?php echo echo_field($meta_data['telephone'][0]) ?>

                        </div>
                        <div class="dynamic-col-30pc-left">
                            <h4>Website</h4>
                        </div>
                        <div class="dynamic-col-30pc-right">

                            <a href="<?php echo echo_field($meta_data['url'][0]) ?>"><?php echo echo_field($meta_data['url'][0]) ?></a>

                        </div>
						<?php if (false) { ?>
                            <div class="dynamic-col-30pc-left">
                                <h4>Email</h4>
                            </div>
                            <div class="dynamic-col-30pc-right">

                                <a href="mailto:<?php echo $meta_data['email'][0] ?>">[email] <?php echo echo_field($meta_data['email'][0]) ?></a>

                            </div>
						<?php } ?>

                        <div class="dynamic-col-30pc-left">
                            <h4>Address</h4>
                        </div>
                        <div class="dynamic-col-30pc-right">
							<?php echo echo_field($meta_data['address'][0]) ?><br/>
							<?php echo echo_field($meta_data['address2'][0]) ?><br/>
							<?php echo echo_field($meta_data['city'][0]) ?><br/>
							<?php echo echo_field($meta_data['postcode'][0]) ?>
                            <br/>

                        </div>

                    </div>

                    <!--
					<h4>Email me</h4>
					<div class="dynamic-col-30pc-left">
					
					Your name
					
					</div>
					<div class="dynamic-col-30pc-right">
					
					<input name="contact-name" size="30" type="text" />
					
					</div>
					<div class="dynamic-col-30pc-left">
					
					Your email
					
					</div>
					<div class="dynamic-col-30pc-right">
					
					<input name="contact-name" size="30" type="text" />
					
					</div>
					<!--
					<div class="dynamic-col-30pc-left">
					
					Reason for making contact
					
					</div>
					<div class="dynamic-col-30pc-right">
					
					<input type="text" name="contact-name" size="30">
					
					</div>
					<div style="clear:both"></div>
					-- >
					<div class="dynamic-col-30pc-left">
					
					Write your message here
					
					</div>
					<div class="dynamic-col-30pc-right"><form><textarea cols="45" name="comments" rows="7"></textarea></form><button class="float-left margin-bottom-15" type="button">Send message</button>
					
					</div>
					
					-->


                </div>
            </article><!-- #post-## -->


        </main><!-- .site-main -->
    </div><!-- .content-area -->
	
	<?php
}


get_footer(); ?>
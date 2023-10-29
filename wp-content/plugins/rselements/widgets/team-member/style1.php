<div class="rs-team-grid rs-team team-grid-<?php echo esc_html($settings['team_grid_style']);?> <?php echo esc_html($settings['team_grid_popup']);?> <?php echo esc_html( $popup_class );?>">
	<div class="row">
		 	<?php //******************//
		 		$x = 1;
		        $cat = $settings['team_category'];		       
		        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				 if(empty($cat)){  
		        	$best_wp = new wp_Query(array(
						'post_type'      => 'teams',
						'posts_per_page' => $settings['per_page'],
						'paged'          => $paged,
						'orderby' => 'menu_order',
						'order' 			=> 'ASC',					
					));	  
		        }   
		        else{
		        	$best_wp = new wp_Query(array(
							'post_type'      => 'teams',
							'posts_per_page' => $settings['per_page'],
							'paged'          => $paged,
							'orderby' => 'menu_order',
							'order' 			=> 'ASC',
							'tax_query'      => array(
						        array(
									'taxonomy' => 'team-category',
									'field'    => 'slug', //can be set to ID
									'terms'    => $cat //if field is ID you can reference by cat/term number
						        ),
						    )
					));	  
		        }
		        
				while($best_wp->have_posts()): $best_wp->the_post();					

				    $designation  = !empty(get_post_meta( get_the_ID(), 'designation', true )) ? get_post_meta( get_the_ID(), 'designation', true ):'';	
				    $get_link = get_the_permalink();		
				    									   
					//retrive social icon values	
					$content = get_the_content();		
					$facebook    = get_post_meta( get_the_ID(), 'facebook', true );
					$twitter     = get_post_meta( get_the_ID(), 'twitter', true );
					$google_plus = get_post_meta( get_the_ID(), 'google_plus', true );
					$linkedin    = get_post_meta( get_the_ID(), 'linkedin', true );
					$show_phone  = get_post_meta( get_the_ID(), 'phone', true );
					$show_email  = get_post_meta( get_the_ID(), 'email', true );
					
					$fb   ='';
					$tw   ='';
					$gp   ='';
					$ldin ='';
				
					if($facebook!=''){
						$fb='<li><a href="'.$facebook.'" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>';
					}
					if($twitter!=''){
						$tw='<li><a href="'.$twitter.'" class="social-icon"><i class="fab fa-twitter"></i></a></li>';
					}
					if($google_plus!=''){
						$gp='<li><a href="'.$google_plus.'" class="social-icon"><i class="fab fa-google-plus-g"></i></a></li>';
					}
					if($linkedin!=''){
						$ldin='<li><a href="'.$linkedin.'" class="social-icon"><i class="fab fa-linkedin-in"></i></a></li>';
					}

					$popup_box = ' ';
					if('popup' == $settings['team_grid_popup']){
						$link = '#rs_popupBox2_'.$x.'';
						$popup_box = 'data-effect="mfp-zoom-in"';
					}else{
						$link = $get_link;
					}
				?>

					
				<div class="col-lg-<?php echo esc_html($settings['team_columns']);?> col-md-6 col-sm-6">

					<div class="team-item">
					    <?php the_post_thumbnail($settings['thumbnail_size']); ?>
					    <div class="content-part">
					        <h4 class="name"><a class="pointer-events" href="<?php echo esc_url( $link );?>" <?php echo esc_html( $popup_box );?>><?php the_title();?></a></h4>
					        <span class="designation"><?php echo esc_html( $designation );?></span>
					        <?php if( $fb || $gp || $tw || $ldin ): ?>
					        <ul class="social-links">
					            <?php echo wp_kses_post($fb);
									echo wp_kses_post($gp);
									echo wp_kses_post($tw);
									echo wp_kses_post($ldin);
								?>
					        </ul>
					        <?php endif; ?>  
					    </div>
					</div>
				</div>

				<!-- Hidden PupupBox Text -->

				<?php
					if($facebook!=''){
						$fb_popup='<a href="'.$facebook.'" class="social-icon" '.$icon_style.'><i class="fab fa-facebook-f"></i></a> ';
					}
					if($twitter!=''){
						$tw_popup='<a href="'.$twitter.'" class="social-icon" '.$icon_style.'><i class="fab fa-twitter"></i></a>';
					}
					if($google_plus!=''){
						$gp_popup='<a href="'.$google_plus.'" class="social-icon" '.$icon_style.'><i class="fab fa-google-plus-g"></i></a> ';
					}
					if($linkedin!=''){
						$ldin_popup='<a href="'.$linkedin.'" class="social-icon" '.$icon_style.'><i class="fab fa-linkedin-in"></i></a>';
					}
				?>
				<?php if('popup' == $settings['team_grid_popup']){ ?>
					<div id="rs_popupBox_<?php echo esc_attr($x);?>" class="rspopup_style1 mfp-with-anim mfp-hide" <?php echo wp_kses_post($popup_background);?>>
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<div class="rsteam_img">
										<?php the_post_thumbnail($settings['thumbnail_size']); ?>	
							  		</div>
								</div>
								<div class="col-md-7">
									<div class="rsteam_content">
										<div class="team-content">
											<div class="team-heading">

											  	<h3 class="team-name" <?php echo wp_kses_post($popup_title_color);?>><?php the_title();?></h3>
											  	<span class="team-title" <?php echo wp_kses_post($popup_designation_color);?>><?php echo esc_html( $designation );?></span>
											</div> 
											<?php if( $content): ?>
											<div class="team-des" <?php echo wp_kses_post($popup_content_color);?>>
											  	<?php echo esc_html($content);?>
											</div>
											<?php endif; ?>


											<?php if( $show_phone || $show_email ): ?>
											<div class="contact-info">
												<ul>
													<?php if( $show_phone ): ?>
														<li <?php echo wp_kses_post($popup_phn_email_color);?>><span><?php echo esc_html('Phone:', 'rsaddon');?> </span><?php echo esc_html($show_phone); ?></li>
													<?php endif; ?>

													<?php if( $show_email ): ?>
														<li <?php echo wp_kses_post($popup_phn_email_color);?>><span><?php echo esc_html('Email:', 'rsaddon');?> </span><a href="<?php echo esc_html($show_email); ?>"<?php echo wp_kses_post($popup_phn_email_color);?>><?php echo esc_html($show_email); ?></a></li>
													<?php endif; ?>
												</ul>
											</div>
											<?php endif; ?>

											<?php if( $fb || $gp || $tw || $ldin ): ?>
										  	<div class="rs-social-icons">
												<div class="social-icons1">
													<?php echo wp_kses_post($fb_popup);
													echo wp_kses_post($gp_popup);
													echo wp_kses_post($tw_popup);
													echo wp_kses_post($ldin_popup);
													?>
										        </div>
										  	</div>
										  	<?php endif; ?> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }
			$x++;	
			endwhile;
			wp_reset_query();  
	     ?>  
	</div>
</div>
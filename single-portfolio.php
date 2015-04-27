<?php get_header('page'); ?>

<div class="color__black">
	<div class="line__oro_2"></div>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php 

		$age = get_post_meta(get_the_id(),'age_scorts',TRUE);
		$eyes = get_post_meta(get_the_id(),'eyes_scorts',TRUE);
		$height = get_post_meta(get_the_id(),'height_scorts',TRUE);
		$measu = get_post_meta(get_the_id(),'measu_scorts',TRUE);
		$weight = get_post_meta(get_the_id(),'weight_scorts',TRUE);
		$lang = get_post_meta(get_the_id(),'lang_scorts',TRUE);
		$hair = get_post_meta(get_the_id(),'hair_scorts',TRUE);
		$orient = get_post_meta(get_the_id(),'orient_scorts',TRUE);
		$strai = get_post_meta(get_the_id(),'strai_scorts',TRUE);
		$fetish = get_post_meta(get_the_id(),'fetish_scorts',TRUE);
		$massage = get_post_meta(get_the_id(),'massage_scorts',TRUE);
		$bdsm = get_post_meta(get_the_id(),'bdsm_scorts',TRUE);
		$oral = get_post_meta(get_the_id(),'oral_scorts',TRUE);
		$sex_toys = get_post_meta(get_the_id(),'sex_toys_scorts',TRUE);
		$oral_sex_t = get_post_meta(get_the_id(),'oral_sex_t_scorts',TRUE);
		$dinner = get_post_meta(get_the_id(),'dinner_scorts',TRUE);
		$anal = get_post_meta(get_the_id(),'anal_sex_scorts',TRUE);
		$french = get_post_meta(get_the_id(),'french_scorts',TRUE);
		$travelling = get_post_meta(get_the_id(),'travelling_scorts',TRUE);
		$one_hour = get_post_meta(get_the_id(),'one_hour_scorts',TRUE);
		$two_hour = get_post_meta(get_the_id(),'two_hour_scorts',TRUE);
		$hour_24 = get_post_meta(get_the_id(),'24_hour_scorts',TRUE);
		$over_4 = get_post_meta(get_the_id(),'over_4_scorts',TRUE);
		$over_8 = get_post_meta(get_the_id(),'over_8_scorts',TRUE);

	 ?>
		
		<div class="container">
			<div class="marco-single">
				<div class="ten columns offset-by-one content__single">
					<div class="six columns single__thub">
						<?php if (has_post_thumbnail()) {the_post_thumbnail('scorts-thumbnails');} ?>
					</div>
					<div class="six columns margin-top">
						<h3><?php the_title(); ?></h3>
						<div class="line__oro_3"></div>
						<div class="row margin__buttom__single">
							<div class="five columns">
								<div class="row">
									<div class="six columns">
										<li>Age:</li>
										<li>Height:</li>
										<li>Weight:</li>
										<li>Hair</li>
									</div>
									<div class="six columns">
										<li><span><?php echo $age;?> y.o</span></li>
										<li><span><?php echo $height;?></span></li>
										<li><span><?php echo $weight;?></span></li>
										<li><span><?php echo $hair;?></span></li>
									</div>
								</div>
							</div>
							<div class="seven columns">
								<div class="row">
									<div class="six columns">
										<li>Eyes:</li>
										<li>Measurements:</li>
										<li>Language skills:</li>
										<li>Orientation:</li>
									</div>
									<div class="six columns">
										<li><span><?php echo $eyes;?></span></li>
										<li><span><?php echo $measu;?></span></li>
										<li><span><?php echo $lang;?></span></li>
										<li><span><?php echo $orient;?></span></li>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Bloque 2 -->
						<h3><?php the_title(); ?> services</h3>
						<div class="line__oro_3"></div>

						<div class="row margin__buttom__single">
							<div class="five columns">
								<div class="row">
									<div class="seven columns">
										<li>Straight sex:</li>
										<li>Massage:</li>
										<li>Oral Sex(g):</li>
										<li>Oral Sex(t):</li>
										<li>Anal sex:</li>
										<li>French:</li>
									</div>
									<div class="five columns">
										<li><span><?php echo $strai;?></span></li>
										<li><span><?php echo $massage;?></span></li>
										<li><span><?php echo $oral;?></span></li>
										<li><span><?php echo $oral_sex_t;?></span></li>
										<li><span><?php echo $anal;?></span></li>
										<li><span><?php echo $french;?></span></li>
									</div>
								</div>
							</div>
							<div class="seven columns">
								<div class="row">
									<div class="six columns">
										<li>Fetish / Fant:</li>
										<li>BDSM:</li>
										<li>Sex toys:</li>
										<li>Dinner date:</li>
										<li>Travelling:</li>
									</div>
									<div class="six columns">
										<li><span><?php echo $fetish;?></span></li>
										<li><span><?php echo $bdsm;?></span></li>
										<li><span><?php echo $sex_toys ?></span></li>
										<li><span><?php echo $dinner;?></span></li>
										<li><span><?php echo $travelling;?></span></li>
									</div>
								</div>
							</div>
						</div>

						<!-- Bloque 3 -->
						<h3><?php the_title(); ?> rates</h3>
						<div class="line__oro_3"></div>

						<div class="row">
							<div class="five columns">
								<div class="row">
									<div class="seven columns">
										<li>1 Hour:</li>
										<li>2 Hours:</li>
										<li>24 Hours:</li>
									</div>
									<div class="five columns">
										<li><span><?php echo $one_hour;?></span></li>
										<li><span><?php echo $two_hour;?></span></li>
										<li><span><?php echo $hour_24;?></span></li>
									</div>
								</div>
							</div>
							<div class="seven columns">
								<div class="row">
									<div class="six columns">
										<li>Overnight (4):</li>
										<li>Overdate (8):</li>
									</div>
									<div class="six columns">
										<li><span><?php echo $over_4;?></span></li>
										<li><span><?php echo $over_8;?></span></li>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- galeria de 4 imagenes -->
					<div class="twelve columns thumb_single">
						
								
								<a href="<?php echo wp_get_attachment_url($thumbID); ?>">
									<?php if (class_exists('MultiPostThumbnails')) :
									    MultiPostThumbnails::the_post_thumbnail(
									        get_post_type(),
									        'secondary-image',
									        set_post_thumbnail_size( 155, 215, true )
									    );
									endif; ?>
								</a>
								
								
						

						
							
								<?php if (class_exists('MultiPostThumbnails')) :
								    MultiPostThumbnails::the_post_thumbnail(
								        get_post_type(),
								        'three-image',
								        set_post_thumbnail_size( 155, 215, true )
								    );
								endif; ?>
							
						

						
							
								<?php if (class_exists('MultiPostThumbnails')) :
								    MultiPostThumbnails::the_post_thumbnail(
								        get_post_type(),
								        'four-image',
								        set_post_thumbnail_size( 155, 215, true )
								    );
								endif; ?>
							
						

						
							
								<?php if (class_exists('MultiPostThumbnails')) :
								    MultiPostThumbnails::the_post_thumbnail(
								        get_post_type(),
								        'five-image',
								        set_post_thumbnail_size( 155, 215, true )
								    );
								endif; ?>
							
						
					</div>
				</div>
			</div>

			<!-- Buttom back -->
			<div class="container">
				<div class="btn-see-more">
					<a href="<?php echo home_url('/porfoliotax/scorts/' ); ?>">BACK</a>
				</div>
			</div>
		</div>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
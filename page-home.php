<?php get_header('page'); ?>


<div class="color__black">
	<div class="banner__1"></div>
	<div class="ornament"></div>
	<!-- Welcome Luxury -->

	<div class="container">
		<div class="welcome">
			<h3>Welcome to <span>Duchess Luxury Escorts</span></h3>
			<div><img src="<?php bloginfo('template_url' ); ?>/library/img/orn-1.png" alt=""></div>
			<p><span>DUCHESS LUXURY ESCORTS</span> is an agency specializing in the service for the more discerning  gentleman.<br>Our array of beautiful women come from Latin America, America, Europe, Asia and Australia.</p>
			<p>The ladies are all extremely well educated and have impeccable manners they are perfect for a wonderful dinner or just a great party.<br>The ladies are always discreet.</p>

			<a href="#"><img src="<?php bloginfo('template_url' ); ?>/library/img/btn-read.png" alt=""></a>
		</div>
		<div class="cuadro--top--model">
			<div class="ten columns offset-by-one portfolio margin__buttom">
				<!-- Bloque 1 -->
				<?php rewind_posts(); ?>
				<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=4");
				
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


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

					<div class="three columns">
						<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('img_2');} ?></a>
						<div class="btn-portfolio">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>

				<?php endwhile; ?>
				
			</div>

			<!-- segunda fila -->
			<div class="ten columns offset-by-one margin__buttom">
				<!-- Bloque 2 -->
				<?php rewind_posts(); ?>
				<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=8&showposts=4&offset=4");
				
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


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

					<div class="three columns">
						<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('img_2');} ?></a>
						<div class="btn-portfolio">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>

				<?php endwhile; ?>
			</div>

			<!-- tercera fila -->
			<div class="ten columns offset-by-one">
				<!-- Bloque 3 -->
				<?php rewind_posts(); ?>
				<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=-1&showposts=4&offset=8");

				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


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

					<div class="three columns">
						<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('img_2');} ?></a>
						<div class="btn-portfolio">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>

				<?php endwhile; ?>
			</div>


			
		</div>
	</div>

	<div class="container">
		<div class="btn-see-more">
			<a href="<?php echo home_url('/porfoliotax/scorts' ); ?>">SEE MORE</a>
		</div>
	</div>

</div>

<?php get_footer(); ?>
	
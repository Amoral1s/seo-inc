<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="single ">
	<div class="container">
		<div class="single-top">
			<h1><?php the_title(); ?></h1>
		</div>
		<section class="cases">
				<div class="cases-wrap ">
					<div class="arr prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7955 3.3295C13.2348 3.76884 13.2348 4.48116 12.7955 4.92049L6.84099 10.875L19.875 10.875C20.4963 10.875 21 11.3787 21 12C21 12.6213 20.4963 13.125 19.875 13.125L6.84099 13.125L12.7955 19.0795C13.2348 19.5188 13.2348 20.2312 12.7955 20.6705C12.3562 21.1098 11.6438 21.1098 11.2045 20.6705L3.3295 12.7955C3.11853 12.5845 3 12.2984 3 12C3 11.7016 3.11853 11.4155 3.32951 11.2045L11.2045 3.3295C11.6438 2.89016 12.3562 2.89017 12.7955 3.3295Z" fill="#020202"/>
							</svg>
					</div>
					<div class="swiper">
						<div class="swiper-wrapper">
							<?php if (get_field('galereya')) {
							$images = get_field('galereya');
							if( $images ): ?>
								<?php foreach( $images as $image ): ?>
									<a class="swiper-slide item" href="<?php echo esc_url($image['url']); ?>">
											<img src="<?php echo esc_url($image['url']); ?>" 
													title="<?php echo esc_attr($image['title']); ?>" 
													alt="<?php echo esc_attr($image['alt']); ?>" 
											/>
									</a>
								<?php endforeach; endif; } else { ?>
								<img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
								<?php } ?>
						</div>
					</div>
					<div class="arr next">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.2045 20.6705C10.7652 20.2312 10.7652 19.5188 11.2045 19.0795L17.159 13.125L4.125 13.125C3.50368 13.125 3 12.6213 3 12C3 11.3787 3.50368 10.875 4.125 10.875L17.159 10.875L11.2045 4.9205C10.7652 4.48116 10.7652 3.76885 11.2045 3.32951C11.6438 2.89017 12.3562 2.89017 12.7955 3.32951L20.6705 11.2045C20.8815 11.4155 21 11.7016 21 12C21 12.2984 20.8815 12.5845 20.6705 12.7955L12.7955 20.6705C12.3562 21.1098 11.6438 21.1098 11.2045 20.6705Z" fill="#020202"/>
							</svg>
					</div>
				</div>
		</section>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</section>
	


<?php endwhile; ?>

<?php get_footer();
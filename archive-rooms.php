<?php get_header(); ?>
<section class="banner banner-sm section-banner section-rooms">
	<div class="banner-sub">
		<h3 class="banner-subtitle main-rooms">rooms</h3>
	</div>
</section>

<section class="section-mainrooms section-bottom-line">
	<div class="container">
		<div class="section-mainrooms-copy">
			<p class="copy-par1">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
			</p>
			<p class="copy-par2">			
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
				error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
				architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
			</p>
		</div>
		<div class="mainrooms-list">
		<?php
			$args = array('post_type' => 'rooms' );
			$loop = new WP_Query($args);
		?>
			<div class="row">
			<?php 
				$count = 0;
				while ($loop->have_posts()): $loop->the_post();
				$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
			?>
				<?php if ($count % 3 == 0 && $count !== 0): ?>
					</div>
					
				<div class="row section-mainrooms-row">
				<?php endif; ?>
				 <div class="col-xs-6 col-md-3 mainrooms-max mainrooms-center">
			    <a href="<?php the_permalink(); ?>" class="thumbnail mainrooms-bg">
			      <img class="mainrooms-bg-img" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
			      <p class="rooms-caption"><?php the_title(); ?></p>
			    </a>
			  </div><!--/.mainrooms-max -->
			<?php 
				$count++;
				endwhile;
			?>
			</div><!-- /.row -->
		</div>
	</div>
</section>
<?php get_footer(); ?>

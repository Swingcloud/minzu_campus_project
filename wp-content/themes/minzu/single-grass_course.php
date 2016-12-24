<?php get_header(); ?>

<section id="content" class="widecol alignleft">
	 <?php while ( have_posts() ) : the_post(); ?>
	 		<div>
				<?php the_post_thumbnail( 'page-featured-image' ); ?>
			</div><!-- featured image -->

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
				<header>
					<h1 class="text-shad-lt"><?php the_title(); ?></h1>
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div><!-- content -->


				<footer><!-- 顯示老師資訊 -->
					<?php
						$grasstw_teacher_name = get_post_custom_values( 'teacher' );
						$grasstw_teacher_info = get_post_custom_values( 'teacher_info' );
						$grasstw_teacher_avatar = get_post_custom_values( 'teacher_avatar' );
					?>

					<?php echo '<h2>'. $grasstw_teacher_name[0] .'</h2>'; ?>
					<?php echo '<p>'. $grasstw_teacher_info[0] .'</p>'; ?>
				</footer>

			</article>

	<?php endwhile; ?>


</section>


<?php get_footer(); ?>

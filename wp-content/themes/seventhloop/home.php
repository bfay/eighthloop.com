<?php

// Spark - Main landing page
// Release: 1.0

?>
<?php get_header(); ?>

<?php 
$dark_iterator = 0;
if(is_array($spark_options['spark_sections'])) :
	foreach($spark_options['spark_sections'] as $section) : ?>	
		<?php if (!empty($section['pageid'])) : ?>
		<?php $dark_iterator++; ?>
		
		<article id="<?php echo (!empty($section['sectionurl'])) ? $section['sectionurl'] : 'section-'.$section['pageid']; ?>" class="<?php echo (($dark_iterator % 2 == 0) && $spark_options['spark_layout_color'] !== 'White') ? 'dark' : ''; ?>">
			<div class="container">
			
				<?php if (!empty($section['title_inpage']) || !empty($section['subtitle_inpage'])) : ?>
				<div class="sixteen columns titleset">
					<h2 class="remove-bottom"><?php echo $section['title_inpage']; ?></h2>
					<h6 class="subheader"><?php echo $section['subtitle_inpage']; ?></h6>
				</div>
				<?php endif; ?>
				
				<?php // Supports ID or title
				if (!is_numeric($section['pageid'])) {	
					$page = get_page_by_title($section['pageid']);
					$section['pageid'] = $page->ID;
				}
				$page_data = get_page($section['pageid']);			
				echo apply_filters('the_content', $page_data->post_content); // echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
				?>
				
			</div><!-- .container -->
		</article>
		
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>
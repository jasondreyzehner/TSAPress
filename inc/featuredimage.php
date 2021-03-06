<?php

if(has_post_thumbnail()){


if(is_single() || is_page()){

 ?>
				<figure class="featured-image<?php if(get_post_thumbnail_meta('caption')) echo ' wp-caption'; ?>">
        			<?php the_post_thumbnail(); ?>
        			<?php if (get_post_thumbnail_meta('caption')) : ?><figcaption><?php the_post_thumbnail_meta('caption'); ?></figcaption><?php endif; ?>
				</figure>
<?php

} else {

?>
				<figure class="featured-image<?php if(get_post_thumbnail_meta('caption')) echo ' wp-caption'; ?>">
        			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_post_thumbnail_meta('alt'); ?>"><?php the_post_thumbnail(); ?></a>
        			<?php if (get_post_thumbnail_meta('caption')) : ?><figcaption><?php the_post_thumbnail_meta('caption'); ?></figcaption><?php endif; ?>
				</figure>
<?php }

}
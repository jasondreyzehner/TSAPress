	 <?php /* TODO: widgetize <article class="widget"> </article>   <article class="widget"> </article>   */  ?>
	 
		 </section> <?php //close section#content ?>
	</div> <?php //close div.content-wrap ?>
	
	<nav id="left-nav"><?php 
		if ( has_nav_menu('primary-nav') ) : ?>
			<h1><?php bloginfo('name'); ?></h1>
				<ul>
<li<?php if ( is_home() ) { echo ' class="current_page_item"'; }?>><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?> News">News</a></li>
<?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'theme_location' => 'primary-nav', 'container' => '', 'depth' => 1, ) ); ?>
				</ul>	
		<? else : ?>
				<h1><?php bloginfo('name'); ?> (auto)</h1>			
<?php wp_page_menu( array ('depth' => '1', 'title_li' => '', 'show_home' => 'News' ) ); ?>								
		<? endif; ?>
		
		<?php if ( has_nav_menu('events-nav') ) : ?>
			<h1>Events</h1>
				<ul>
<?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'theme_location' => 'events-nav', 'container' => '', 'depth' => 1, ) ); ?>
				</ul>	
		<? else : ?>
				<h1>Events (auto)</h1>			
				<ul><li><a>this</a></li><li><a>must</a></li><li><a>list</a></li><li><a>event posts</a></li></ul>								
		<? endif; ?>

			
			
<?php if ( function_exists('dynamic_sidebar') )  dynamic_sidebar(); /* simply adds on below other menus */ ?> 
			
	</nav> <?php //close nav#left-nav ?>
</div> <?php //close div.full-wrap ?>
<?php $theme->display ( 'header' ); ?>

		<section id="primary-content">
			<?php foreach ( $posts as $post ) { ?>
				
				<article itemscope itemtype="http://schema.org/BlogPosting" id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
					<header>								
						<h1><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
						<p class="time"><data itemprop="datePublished" value="<?php echo $post->pubdate_datetime; ?>"><?php echo $post->pubdate_out; ?></data></p>
					</header>
						<div class="entry">
							<?php echo $post->content_out; ?>
						</div>
					<footer>
						<?php if ( count( $post->tags ) > 0 )  { ?>
						<div class="tags"><?php _e('Tagged:'); ?> <?php echo $post->tags_out; ?></div>
						<?php } ?>
						<div class="commentCount"><?php $theme->comments_link($post,'%d Comments','%d Comment','%d Comments'); ?></div>
						
					</footer>
				</article>
			<?php }  ?>
			<nav id="pagination">
				<?php $theme->prev_page_link('&laquo; ' . _t('Previous Page')); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link('&raquo; ' . _t('Next Page')); ?>
			</nav>
		</section>
		
<?php $theme->display ( 'sidebar' ); ?>

<?php $theme->display ( 'footer' ); ?>
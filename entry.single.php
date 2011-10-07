<?php $theme->display ( 'header' ); ?>

		<section id="primary-content">
			<article id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
				<header>								
					<h1><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
				</header>
					<div class="entry">
					<?php echo $post->content_out; ?>
					</div>
				<footer>
		
						<?php if ( isset ( $post->author->info->imageurl ) ) { ?><img src="<?php echo $post->author->info->imageurl; ?>" alt="<?php echo $post->author->displayname; ?>" class="auth-img"><?php } ?>
					<p><?php echo $post->title; ?> was authored by <?php echo $post->author->displayname; ?> on <time datetime="<?php echo $post->pubdate_datetime; ?>"><?php echo $post->pubdate_out; ?></time>.  This entry has been tagged with the keywords: 	<?php if( count( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?>.  If you would like to follow the comments on this post, you can subscribe to its <a href="<?php echo $post->comment_feed_link; ?>">Atom feed</a>.
						
					</p>
					
				</footer>
				
				<?php include 'comments.php'; ?>
				
			</article>
		</section>
		
		<?php $theme->display ( 'sidebar' ); ?>
		
		<section id="comments">
			<?php $post->comment_form()->out(); ?>
		</section>
		
		

		<?php $theme->display ( 'footer' ); ?>
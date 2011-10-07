<?php $theme->display ( 'header' ); ?>

			<section id="primary-content">
				<article id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
					<header>								
						<h1><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
					</header>

						<?php echo $post->content_out; ?>
						
					
				
				</article>
			</section>
<?php if ( Session::has_messages() ) {
		Session::messages_out();
	}
?>
				<h2><?php echo $theme->comments_count($post,'%d Responses','%d Response','%d Responses'); ?> <?php _e('to'); ?> <?php echo $post->title; ?></h2>
			
				<?php if( $post->comments->pingbacks->count ) : ?>
					<article id="pingbacks">
						<h2 id="ping-count"><?php echo $theme->pingback_count($post); ?></h2>
						<ul id="pinglist">
							<?php foreach ( $post->comments->pingbacks->approved as $pingback ) : ?>
								<li id="ping-<?php echo $pingback->id; ?>">
									<p id="ping-content"><?php echo $pingback->content; ?></p>
									<p id="ping-meta"><a href="<?php echo $pingback->url; ?>" title=""><?php echo $pingback->name; ?></a></p>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endif; ?>
				
				<h2 id="comment-count"><?php echo $post->comments->comments->approved->count; ?> <?php echo _n( 'Comment', 'Comments', $post->comments->comments->approved->count ); ?></h2>
				
				<?php
				if ( $post->comments->moderated->count ) {
					foreach ( $post->comments->comments->moderated as $comment ) {
					$class = 'class="comment';
					if ( $comment->status == Comment::STATUS_UNAPPROVED ) {
						$class.= '-unapproved';
					}
					$class.= '"';
				?>
				<article id="comment-<?php echo $comment->id; ?>" <?php echo $class; ?>>
					<img src="<?php echo $comment->gravatar ?>" class="gravatar" alt="gravatar">
					<p><p>On <data itemprop="datePublished" value="<?php $comment->date->out('Y-m-d'); ?>"><a href="#comment-<?php echo $comment->id; ?>"><?php $comment->date->out('M jS, Y'); ?></a> at <?php $comment->date->out('h:ia'); ?></data>
					<a href="<?php echo $comment->url; ?>"><?php echo $comment->name; ?></a> <?php _e('added:'); ?></p>
					<div class="comment-content">
						<?php echo $comment->content_out; ?>
					</div>
					
					
				</article>
				<?php
					}
				}
				else {
					_e('There are currently no comments.');
				}
				?>
			

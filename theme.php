<?php

class Mzingi2 extends Theme
{
	public function action_init_theme() {
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
		// Apply Format::tag_and_list() to post tags...
		Format::apply( 'tag_and_list', 'post_tags_out' );
		// Only uses the <!--more--> tag, with the 'more' as the link to full post
		Format::apply_with_hook_params( 'more', 'post_content_out', 'more' );
		// Creates an excerpt option. echo $post->content_excerpt;
		Format::apply( 'autop', 'post_content_excerpt' );
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', 'more', 60, 1 );
		Format::apply( 'format_date', 'post_pubdate_datetime','{Y}-{m}-{d}' );
		Format::apply( 'format_date', 'post_pubdate_out', '{F} {j}{S}, {Y}');
	}
	
	public function action_add_template_vars($theme) {
		
		if( !$theme->template_engine->assigned( 'pages' ) ) {
					$theme->assign('pages', 
						Posts::get( array( 'content_type' => 'page',
						    'status' => Post::status('published'),
						    'nolimit' => 1 ) ) );
		}
		//Add Stylesheets
		Stack::add('template_stylesheet', array($this->get_url( '/css/normalize.css' )), 'reset');
		Stack::add('template_stylesheet', array($this->get_url(  '/css/style.css' )), 'layout', 'reset');
	
		//Add Javascript
		Stack::add ( 'template_header_javascript', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js', 'modernizr' );
	}
	
	public function action_form_comment( $form ) { 
		$this->add_template('formcontrol_form', dirname(__FILE__).'/forms/formcontrol_form.php', true);
		$this->add_template('formcontrol_submit', dirname(__FILE__).'/forms/formcontrol_submit.php', true);
		$this->add_template( 'mzingi_email', dirname(__FILE__).'/forms/formcontrol_email.php' );
		$this->add_template( 'mzingi_url', dirname(__FILE__).'/forms/formcontrol_url.php' );
		$this->add_template('formcontrol_textarea', dirname(__FILE__).'/forms/formcontrol_textarea.php', true);
		$this->add_template('formcontrol_text', dirname(__FILE__).'/forms/formcontrol_text.php', true);		
		$form->cf_email->template = 'mzingi_email';
		$form->cf_url->template = 'mzingi_url';
		$form->append( 'fieldset', 'cf_commenterinfo', _t( 'Tell Me About Yourself' ) );
		$form->move_before( $form->cf_commenterinfo, $form->cf_commenter );
		$form->cf_commenter->move_into($form->cf_commenterinfo);
		$form->cf_email->move_into( $form->cf_commenterinfo );
		$form->cf_url->move_into( $form->cf_commenterinfo );
		$form->append('fieldset', 'cf_contentbox', _t( 'Something to add?' ) );
		$form->move_before($form->cf_contentbox, $form->cf_content);

		$form->cf_content->move_into($form->cf_contentbox);
		$form->cf_submit->caption = _t( 'Submit' );
		
	}
}

?>
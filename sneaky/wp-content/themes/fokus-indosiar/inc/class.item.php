<?php

/**
 * Post Class
 *
 * This is class for fetching item(posts)
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author Gamal Ardi
 * @copyright SCM Digital
 */

class Item {

	public $_maxPost;
	public $_templatePost;
	public $_maxPostMobile;
	public $_maxPostDesktop;
	// public $_categoryPost;

	public function __construct($template, $mobilePost, $desktopPost) {

		$this->_templatePost 	= $template;
		$this->_maxPostMobile 	= $mobilePost;
		$this->_maxPostDesktop 	= $desktopPost;
		// $this->_categoryPost = $category;

	}

	public function post_per_page() {

		$max_post = 0;

		if(is_mobile()) {
			$max_post = $this->_maxPostMobile;
		} else {
			$max_post = $this->_maxPostDesktop;
		}
		
		return $this->_maxPost = $max_post;
	}

	public function fetch_post() {

		$args = array(
			'post_status' 	 => array( 'publish' ),
			'order'			 => 'DESC',
			'post_type'		 => 'post',
			'posts_per_page' => $this->_maxPost,
		);

		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part('template-parts/content', $this->_templatePost);
			}
		} else {
			echo 'no posts found';
		}

		// // Restore original Post Data
		wp_reset_postdata();

	}

}

?>

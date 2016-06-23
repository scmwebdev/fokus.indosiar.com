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

	protected $_maxPost;
	protected $_templatePost;
	protected $_maxPostMobile;
	protected $_maxPostDesktop;
	// public $_categoryPost;

	public function __construct($template, $mobilePost, $desktopPost) {

		$this->_templatePost 	= $template;
		$this->_maxPostMobile 	= $mobilePost;
		$this->_maxPostDesktop 	= $desktopPost;
		// $this->_categoryPost = $category;

		// echo 'this is item constructor';
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

	public function latest_post() {

		$postPerPage = $this->post_per_page();

		$args = array(
			'post_status' 	 => array( 'publish' ),
			'order'			 => 'DESC',
			'post_type'		 => 'post',
			'posts_per_page' => $postPerPage,
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

	public function fetch_post($category = '2') {

		$postPerPage = $this->post_per_page();

		$args = array(
			'post_status' 	 => array( 'publish' ),
			'order'			 => 'DESC',
			'post_type'		 => 'post',
			'posts_per_page' => $postPerPage,
			'cat'			 =>	$category
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

class TopStories extends Item {

	public function fetch_post($key, $keyValue, $templatePath) {

		$postPerPage = $this->post_per_page();

		$args = array (
			'post_status'            => array( 'publish' ),
			'order'                  => 'DESC',
			'post_type' 			 => 'post',
			'posts_per_page' 		 => $postPerPage,
			'meta_query' => array(
				array(
					'key'       => $key,
					'value'     => $keyValue,
				),
			),
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part('template-parts/frontpage', $templatePath);
			}
		} else {
			// no posts found
			echo 'no posts found';
		}

		// Restore original Post Data
		wp_reset_postdata();

	}

}

?>

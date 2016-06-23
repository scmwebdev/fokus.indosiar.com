<?php

/**
 * Vidio Class
 *
 * This is class for embedded video from vidio.com
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author Gamal Ardi
 * @copyright SCM Digital
 */

class Vidio {

	public $_vidio;
	public $_vidioID;

	public function __construct($getVideo) {

		$this->_vidio = $getVideo;
	}

	public function get_vidio_id() {

		$video =  $this->_vidio;

		$regEx = "/(?<=\watch\/)(.*?)(?=\-)/";

		preg_match($regEx, $video, $matches);

		return $this->_vidioID = $matches[0];
	}

	public function clean_url() {

		$target = $this->get_vidio_id();
		$html  = '<div class="embed-responsive embed-responsive-16by9">';
		$html .= '<iframe class="vidio-embed embed-responsive-item" src="https://www.vidio.com/embed/'.  $target .'?autoplay=true&player_only=true&"';
		$html .= 'scrolling="no" frameborder="0" allowfullscreen></iframe>';
		$html .= '</div>';

		echo $html;
	}
}

?>
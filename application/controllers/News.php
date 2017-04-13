<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Since this controller is set as the default controller in
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('captcha');
		$this->load->helper('url');
		$values = array(
		'word' => '',   //Generate alternate word by default. You can also set your word.
		'word_length' => 8,  // To set length of captcha word.
		'img_path' => './images/',   // Create  folder "images" in root directory, and give path.
		'img_url' => base_url() .'images/',  // To store captcha images in "images" folder.

		// Font path is used font library, which will stored  in system/fonts/texb.ttf.
		'font_path' => base_url() . 'system/fonts/texb.ttf',
		'img_width' => '150',   //Set image width.
		'img_height' => 50,   // Set image height.
		'expiration' => 3600   // This will automatically expire images in given time.
		);		
		create_captcha($values);		
	}
}

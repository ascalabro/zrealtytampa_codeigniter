<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listings extends CI_Controller {

	public function index()
	{
                $data['view'] = 'view_listings';
                $data['img_alt_tag'] = "michael zambito, realtor, tampa, fl, realty, northdale, carrollwood, lake magdalene, real estate agent, michael, zambito, anthony";
		$this->load->view('default',$data);
	}
}
?>

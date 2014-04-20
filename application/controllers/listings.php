<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listings extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model('model_imageGallery');
        }

	public function index()
	{
                $data['img_alt_tag'] = "michael zambito, realtor, tampa, fl, realty, northdale, carrollwood, lake magdalene, real estate agent, michael, zambito, anthony";
		$data['view'] = 'view_listings';
                $data['activeListings'] = $this->model_imageGallery->get_active_listings();
                $data['inactiveListings'] = $this->model_imageGallery->get_inactive_listings();
                $data['photoviewer'] = $this->model_imageGallery->fillPhotoGalleryViewerjs();
                $this->load->view('default',$data);
	}
}
?>

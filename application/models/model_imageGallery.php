<?php

class model_imageGallery extends CI_Model {

    private $connection;
    private $active_listings_query;
    private $listings_query_result;
    private $images_query;
    private $images_query_result;

    public function __construct() {
        parent::__construct();
        $this->load->database();
//        $this->connection = $connection;
//        $this->listings_query_result =  mysqli_query($this->connection, $this->active_listings_query);
//            if (!$this->listings_query_result){
//                die("database query failed.");
//            }
    }

//    public function get_active_listings_set(){
//         while($active_listings_set = mysqli_fetch_assoc($this->listings_query_result)){
//             $this->images_query = "SELECT * FROM listings_gallery WHERE listing_assoc_id = " . $active_listings_set['listing_id'];
//             $this->images_query_result = mysqli_query($this->connection, $this->images_query);
//             $stop_after_first_line = false;
//                while($images_set = mysqli_fetch_assoc($this->images_query_result)){
//                    while($stop_after_first_line == false){
//                        echo   "var viewer" . $active_listings_set['listing_id'] . "= new PhotoViewer();";
//                        $stop_after_first_line = true;
//                    }
//                    echo "viewer" . $active_listings_set['listing_id'] . ".add(' " . $images_set['img_path'] . "');";
//                   
//                }
//                
//            }
//            
//    }

    public function get_active_listings() {
        $result = $this->db->query("SELECT * FROM my_listings WHERE isActive = 1");
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

    public function get_inactive_listings() {
        $result = $this->db->query("SELECT * FROM my_listings WHERE isActive = 0");
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

    public function fillPhotoGalleryViewerjs() {
        $js = '';
        $active_listings = $this->get_active_listings();
        foreach ($active_listings->result_array() as $active_listing_row) {
            $images_set = $this->db->query("SELECT * FROM listings_gallery WHERE listing_assoc_id = " . $active_listing_row['listing_id']);
            $stop_after_first_line = false;
            foreach ($images_set->result_array() as $image_set) {
                while ($stop_after_first_line == false) {
                    $js .= "var viewer" . $active_listing_row['listing_id'] . "= new PhotoViewer();";
                    $stop_after_first_line = true;
                }
                $js .= "viewer" . $active_listing_row['listing_id'] . ".add('assets/" . $image_set['img_path'] . "');";
            }
//            while ($images_set = mysqli_fetch_assoc($this->images_query_result)) {
//                while ($stop_after_first_line == false) {
//                    echo "var viewer" . $active_listings_set['listing_id'] . "= new PhotoViewer();";
//                    $stop_after_first_line = true;
//                }
//                echo "viewer" . $active_listings_set['listing_id'] . ".add(' " . $images_set['img_path'] . "');";
//            }
        }
        return $js;
    }

}

?>

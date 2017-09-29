<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 2017-09-28
 * Time: 11:36 AM
 */

class India extends CI_Controller {
    public function index() {
        // The following should be a relative link to your image file above
        $source = '../data/test.jpg'; 
        // note that we could have referenced an image anywhere on our system

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/jpg"); 
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }
}
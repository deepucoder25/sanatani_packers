<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "404 Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The page you are looking for does not exist on " . $this->comp['company3'] . ". Return to our homepage for household moving & transport services.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Best Packers and Movers in India | " . $this->comp['company3'];
        $data['description'] = "Leading packers and movers in India. Professional household shifting, office relocation & vehicle transport services. Get free quote from " . $this->comp['company3'] . " today!";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}

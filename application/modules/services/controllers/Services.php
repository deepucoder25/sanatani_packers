<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function packersMovers()
    {
        $data['title'] = "Best Packers and Movers Services | " . $this->comp['company3'];
        $data['description'] = "Professional packing and moving services by " . $this->comp['company3'] . ". Door-to-door shifting, expert packing materials, and safe delivery across India.";
        $data['module'] = "services";
        $data['view_file'] = "packers_movers";
        echo Modules::run('template/layout2', $data);
    }

    function householdShifting()
    {
        $data['title'] = "Household Shifting & Home Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Hassle-free household shifting services by " . $this->comp['company3'] . ". Safe packing of home items, damage-free transport, and unpacking at your new location.";
        $data['module'] = "services";
        $data['view_file'] = "household_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function officeRelocation()
    {
        $data['title'] = "Corporate & Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Seamless office shifting services by " . $this->comp['company3'] . ". Corporate relocation, IT equipment moving, and minimal business downtime.";
        $data['module'] = "services";
        $data['view_file'] = "office_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function localDomesticMoving()
    {
        $data['title'] = "Local & Domestic Moving Services | " . $this->comp['company3'];
        $data['description'] = "Reliable local and intercity domestic moving services by " . $this->comp['company3'] . ". Safe, quick, and affordable home and commercial shifting nationwide.";
        $data['module'] = "services";
        $data['view_file'] = "local_domestic_moving";
        echo Modules::run('template/layout2', $data);
    }

    function transportation()
    {
        $data['title'] = "Vehicle & Transport Services | " . $this->comp['company3'];
        $data['description'] = "Secure car and bike transportation services by " . $this->comp['company3'] . ". Dedicated carriers, GPS tracking, insurance cover, and timely delivery.";
        $data['module'] = "services";
        $data['view_file'] = "transportation";
        echo Modules::run('template/layout2', $data);
    }

    function goodsLogistics()
    {
        $data['title'] = "Goods & Logistics Freight Services | " . $this->comp['company3'];
        $data['description'] = "Comprehensive goods transport and logistics solutions by " . $this->comp['company3'] . ". Commercial cargo, container transport, and warehousing.";
        $data['module'] = "services";
        $data['view_file'] = "goods_logistics";
        echo Modules::run('template/layout2', $data);
    }
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class City_services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    private function format_city($city_slug) {
        $city = str_replace("_", " ", $city_slug);
        return urldecode(ucwords(str_replace("-", " ", $city)));
    }

    function home_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Best Home Shifting Services in $city | " . $this->comp['company3'];
        $data['description'] = "Top-rated household shifting services in $city by " . $this->comp['company3'] . ". Professional packing, safe loading, and door-to-door home relocation at best rates.";
        $data['module'] = "city_services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Office Relocation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Fast & reliable office shifting in $city from " . $this->comp['company3'] . ". Expert corporate relocation with minimal downtime and safe equipment transport.";
        $data['module'] = "city_services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Car Transportation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Trusted car carrier and vehicle transport in $city by " . $this->comp['company3'] . ". Scratch-free, insured, and timely car delivery anywhere in India.";
        $data['module'] = "city_services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Bike Transport Services in $city | " . $this->comp['company3'];
        $data['description'] = "Safe two-wheeler & bike shifting in $city with " . $this->comp['company3'] . ". High-quality multi-layer packing and secure delivery at affordable prices.";
        $data['module'] = "city_services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }
}

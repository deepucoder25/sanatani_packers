<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Transportation Services',
    'bc_desc' => 'Secure Car, Bike & Automobile Transport',
    'breadcrumbs' => [
        ['name' => 'Transportation Services']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                </div>
            </div>
        </div>
    </div>
</section>

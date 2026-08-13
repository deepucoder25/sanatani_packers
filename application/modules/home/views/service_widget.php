<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title_part1' => 'Packers &',
        'title_part2' => 'Movers',
        'image' => 'home-shifting-services.webp',
        'desc' => 'Professional packing and moving services across India. Door-to-door shifting, expert packing materials, and safe delivery.',
        'link' => 'packers-and-movers'
    ],
    [
        'title_part1' => 'Household',
        'title_part2' => 'Shifting',
        'image' => 'home-shifting-services.webp',
        'desc' => 'Hassle-free household shifting services. Safe packing of home items, damage-free transport, and unpacking at your new home.',
        'link' => 'household-shifting'
    ],
    [
        'title_part1' => 'Office',
        'title_part2' => 'Relocation',
        'image' => 'office-relocation-services.webp',
        'desc' => 'Seamless office relocation services designed to minimize disruption and ensure smooth business transitions.',
        'link' => 'office-relocation'
    ],
    [
        'title_part1' => 'Local & Domestic',
        'title_part2' => 'Moving',
        'image' => 'domestic-relocation-services.webp',
        'desc' => 'Reliable local and intercity domestic moving services for quick, safe, and stress-free relocation nationwide.',
        'link' => 'local-and-domestic-moving'
    ],
    [
        'title_part1' => 'Transportation',
        'title_part2' => 'Services',
        'image' => 'car-transportation-services.webp',
        'desc' => 'Secure car, bike, and vehicle transportation services with specialized carriers, GPS tracking, and insurance cover.',
        'link' => 'transportation-services'
    ],
    [
        'title_part1' => 'Goods &',
        'title_part2' => 'Logistics',
        'image' => 'logistic-services.webp',
        'desc' => 'Comprehensive goods transport, cargo handling, and logistics solutions tailored for commercial and individual needs.',
        'link' => 'goods-and-logistics'
    ],
];
?>

<section class="services-section py-5">
    <!-- Background Decor Elements -->
    <div class="services-decor decor-top-left"></div>
    <div class="services-decor decor-top-right"></div>
    <div class="services-decor decor-bottom-right"></div>

    <div class="container position-relative home-service-widget-container">
        <!-- Section Header -->
        <div class="section-header text-center mb-5">
            <div class="header-title-wrap d-flex align-items-center justify-content-center">
                <span class="header-line left-line"></span>
                <span class="header-dot left-dot"></span>
                <h2 class="section-title mx-3">OUR SERVICES</h2>
                <span class="header-dot right-dot"></span>
                <span class="header-line right-line"></span>
            </div>
            <div class="header-truck-wrap">
                <div class="truck-icon-container">
                    <span class="speed-line line-1"></span>
                    <span class="speed-line line-2"></span>
                    <span class="speed-line line-3"></span>
                    <i class="bi bi-truck truck-icon"></i>
                </div>
            </div>
        </div>

        <!-- Grid of Services -->
        <div class="row g-4 mt-2">
            <?php foreach ($services as $service): ?>
                <div class="col-lg-3 col-md-6 col-12 d-flex">
                    <div class="srv-card w-100 d-flex flex-column">
                        <div class="srv-icon-wrap">
                            <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" alt="<?= $service['title_part1'] . ' ' . $service['title_part2'] ?>" class="img-fluid" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
                        </div>
                        <div class="srv-title"><?= htmlspecialchars($service['title_part1']) ?> <?= htmlspecialchars($service['title_part2']) ?></div>
                        <div class="srv-desc flex-grow-1"><?= htmlspecialchars($service['desc']) ?></div>
                        <a href="<?= site_url($service['link']) ?>" class="srv-link">Read more <?= strtolower($service['title_part1']) ?>..</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



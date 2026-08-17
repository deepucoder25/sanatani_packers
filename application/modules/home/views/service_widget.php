<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'PACKERS & MOVERS',
        'svg' => '<svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 24L32 14L52 24V46L32 56L12 46V24Z" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M32 14V56" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 24L32 34L52 24" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><circle cx="20" cy="18" r="9" fill="var(--secondary-color, #FF8623)"/><path d="M16.5 18L19 20.5L23.5 15.5" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        'desc' => 'Safe and secure packing with professional multi-layer materials and expert handling.',
        'link' => 'packers-and-movers'
    ],
    [
        'title' => 'HOUSEHOLD SHIFTING',
        'svg' => '<svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 28L32 10L54 28V52H10V28Z" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M26 52V36H38V52" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="18" y="12" width="16" height="14" rx="3" fill="var(--secondary-color, #FF8623)"/><path d="M22 12V26M30 12V26" stroke="#FFFFFF" stroke-width="1.5"/></svg>',
        'desc' => 'Hassle-free home shifting with professional packing, transport and unpacking.',
        'link' => 'household-shifting'
    ],
    [
        'title' => 'OFFICE RELOCATION',
        'svg' => '<svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="24" width="44" height="20" rx="3" stroke="var(--primary-color, #0B2654)" stroke-width="3"/><path d="M16 44V54M48 44V54" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round"/><path d="M22 24V14H42V24" stroke="var(--primary-color, #0B2654)" stroke-width="3"/><rect x="16" y="10" width="14" height="12" rx="2" fill="var(--secondary-color, #FF8623)"/><path d="M20 16H26" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/></svg>',
        'desc' => 'Seamless office relocation services designed for minimal business downtime.',
        'link' => 'office-relocation'
    ],
    [
        'title' => 'LOCAL & DOMESTIC MOVING',
        'svg' => '<svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 20H38V44H8V20Z" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linejoin="round"/><path d="M38 28H50L56 36V44H38V28Z" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linejoin="round"/><circle cx="18" cy="48" r="5" fill="var(--primary-color, #0B2654)"/><circle cx="46" cy="48" r="5" fill="var(--primary-color, #0B2654)"/><rect x="14" y="12" width="16" height="14" rx="3" fill="var(--secondary-color, #FF8623)"/><path d="M18 12V26M26 12V26" stroke="#FFFFFF" stroke-width="1.5"/></svg>',
        'desc' => 'Reliable local and intercity domestic moving services across India.',
        'link' => 'local-and-domestic-moving'
    ],
    [
        'title' => 'TRANSPORTATION SERVICES',
        'svg' => '<svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 34L20 20H44L52 34V46H12V34Z" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linejoin="round"/><path d="M20 34H44" stroke="var(--primary-color, #0B2654)" stroke-width="2.5"/><circle cx="20" cy="46" r="4.5" fill="var(--primary-color, #0B2654)"/><circle cx="44" cy="46" r="4.5" fill="var(--primary-color, #0B2654)"/><circle cx="22" cy="16" r="8" fill="var(--secondary-color, #FF8623)"/><path d="M18 16L20.5 18.5L26 13" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/></svg>',
        'desc' => 'Secure vehicle and cargo transportation with GPS tracking and insurance cover.',
        'link' => 'transportation-services'
    ],
    [
        'title' => 'GOODS & LOGISTICS',
        'svg' => '<svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32 10L52 18V32C52 44 32 54 32 54C32 54 12 44 12 32V18L32 10Z" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linejoin="round"/><path d="M24 30L30 36L40 24" stroke="var(--primary-color, #0B2654)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="18" y="10" width="14" height="12" rx="3" fill="var(--secondary-color, #FF8623)"/><path d="M22 10V22M28 10V22" stroke="#FFFFFF" stroke-width="1.5"/></svg>',
        'desc' => 'Comprehensive goods transport, cargo handling, and warehouse logistics.',
        'link' => 'goods-and-logistics'
    ],
];
?>

<section class="services-widget-section py-5">
  <div class="container">
    
    <!-- Section Header -->
    <div class="services-header text-center mb-4 mb-lg-5">
      <div class="services-eyebrow-tag mb-1">
        OUR SERVICES
      </div>
      <h2 class="services-main-title">
        Moving Solutions Tailored To Your Needs
      </h2>
    </div>

    <!-- Grid of 6 Navbar Services with Dual-Tone SVG Icons -->
    <div class="row g-3 g-lg-4">
      <?php foreach ($services as $service): ?>
        <div class="col-lg-4 col-md-6 col-6 d-flex">
          <a href="<?= site_url($service['link']) ?>" class="service-card-item w-100 d-flex flex-column text-decoration-none">
            <div class="service-icon-box mb-3">
              <?= $service['svg'] ?>
            </div>
            <h3 class="service-card-title mb-2"><?= htmlspecialchars($service['title']) ?></h3>
            <p class="service-card-desc mb-0 flex-grow-1"><?= htmlspecialchars($service['desc']) ?></p>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

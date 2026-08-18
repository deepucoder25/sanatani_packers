<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Nationwide Branch Network',
    'bc_desc' => "Explore our nationwide branch network of IBA approved packers and movers providing verified local & domestic shifting services across India.",
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "jharkhand.jpg",
        "category" => "Jharkhand",
        "link" => "jharkhand"
    ]
];
?>

<!-- Branch Section -->
<section class="pm-states-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="pm-section-badge mb-2">
                <i class="bi bi-geo-alt-fill text-pm-secondary me-1"></i>
                <span>NATIONWIDE NETWORK</span>
            </div>
            <h2 class="pm-fw-black text-pm-primary display-6 mb-2">
                Our Presence Across <span class="text-pm-secondary position-relative d-inline-block">India
                    <svg class="pm-header-curve" width="100" height="8" viewBox="0 0 100 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5.5C25 2 75 2 98 5.5" stroke="var(--secondary-color)" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </span>
            </h2>
            <p class="text-pm-muted fs-6">
                Reliable, IBA-approved packing and moving services available in major states across India.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($state as $item): ?>
                <!-- 4 Columns on Desktop, 2 on Tablet, 1 on Mobile -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a href="<?= site_url($item['link']) ?>" class="text-decoration-none">
                        <div class="pm-states-card">
                            <!-- Image Container -->
                            <div class="pm-states-img">
                                <img class="w-100" src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                    alt="<?= htmlspecialchars($item['category']) ?> Relocation Services" loading="lazy">

                                <div class="pm-states-overlay">
                                    <span class="pm-states-btn">
                                        <span>View Details</span>
                                        <i class="bi bi-arrow-right-short fs-5"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Content Footer -->
                            <div class="pm-states-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="pm-states-dash"></span>
                                        <h6 class="pm-states-name mb-0">
                                            <?= htmlspecialchars($item['category']) ?>
                                        </h6>
                                    </div>
                                    <i class="bi bi-arrow-right pm-states-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

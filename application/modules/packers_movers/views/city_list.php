<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => "Find top-rated packers and movers across major cities in " . ucwords($state) . " offering safe home shifting, vehicle transport & storage services.",
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],
    ]
]);
?>

<div class="pm-list-service-page py-5">
    <div class="container pm-list-feature-section py-lg-3">
        <!-- Section Header Accent -->
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="pm-section-badge mb-2">
                <i class="bi bi-geo-alt-fill text-pm-secondary me-1"></i>
                <span>VERIFIED BRANCHES IN <?= strtoupper($state) ?></span>
            </div>
            <h2 class="pm-fw-black text-pm-primary display-6 mb-2">
                Select Your Moving <span class="text-pm-secondary position-relative d-inline-block">Location
                    <svg class="pm-header-curve" width="110" height="8" viewBox="0 0 110 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5.5C28 2 82 2 108 5.5" stroke="var(--secondary-color)" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </span>
            </h2>
            <p class="text-pm-muted fs-6">
                Choose your city in <strong><?= $state ?></strong> for doorstep survey, instant price estimates, and 24/7 shifting assistance.
            </p>
        </div>

        <!-- City Cards Grid -->
        <div class="row g-3">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        <div class="pm-list-city-card">
                            <div class="pm-list-card-body">
                                <div class="pm-list-icon">
                                    <i class="bi bi-truck-front-fill"></i>
                                </div>
                                <div class="pm-list-city-name">
                                    <small class="pm-list-label">Packers and Movers</small>
                                    <h5 class="pm-list-city-title"><?= htmlspecialchars($ct['nm']) ?></h5>
                                </div>
                                <i class="bi bi-arrow-right-short pm-list-arrow"></i>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>
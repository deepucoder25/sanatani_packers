<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => "Discover why thousands choose $company3 for hassle-free home shifting, 5-layer protective packing, expert handlers & transparent pricing.",
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- 2. Why Choose Us Hero Section -->
<section class="choose-hero-v2">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Left Column: Showcase Image & Floating Trust Badge -->
            <div class="col-lg-6">
                <div class="position-relative me-lg-3">
                    <div class="about-img-box-v2">
                        <img src="<?= base_url('assets/images/home_modules/about-main.jpg') ?>" alt="<?= $company3 ?>" class="img-fluid w-100 about-img-v2">
                        <div class="about-img-overlay-v2"></div>
                    </div>

                    <!-- Floating Trust Badge -->
                    <div class="choose-trust-badge-v2 d-flex align-items-center gap-3">
                        <div class="exp-icon-box">
                            <i class="bi bi-shield-fill-check fs-2"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-2 fw-black text-about-primary mb-0 lh-1">100%</span>
                            <small class="fw-bold text-uppercase text-about-muted tracking-wider fs-7">Zero-Damage Guarantee</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Narrative & Key Value Propositions -->
            <div class="col-lg-6">
                <div class="ps-lg-2">
                    <div class="about-eyebrow-pill mb-3">
                        <i class="bi bi-star-fill fs-6 text-about-secondary"></i>
                        <span>WHY SANATANI PACKERS &bull; <?= $yearsExperience ?> YEARS TRUST</span>
                    </div>

                    <h2 class="display-5 fw-black text-about-primary mb-3 lh-sm">
                        Why Thousands Choose Us for <span class="text-about-secondary">Nationwide Shifting</span>
                    </h2>

                    <p class="lead fw-semibold text-about-dark opacity-75 mb-3">
                        We don't just move belongings; we deliver total peace of mind with guaranteed safety, transparent pricing, and zero hidden costs.
                    </p>

                    <p class="text-about-muted mb-4 fs-6 lh-base">
                        With over a decade of operational excellence, <strong><?= $company3 ?></strong> has established India's most dependable relocation network. From multi-layer bubble wrap protection to live GPS tracking and dedicated move managers, we ensure every relocation is smooth, punctual, and stress-free.
                    </p>

                    <!-- Single-Row CTA Actions -->
                    <div class="about-hero-actions pt-2">
                        <a href="#" class="btn btn-about-quote d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <span>GET FREE ESTIMATE</span>
                            <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                        </a>
                        <a href="<?= $phonehtml ?>" class="btn btn-about-call d-inline-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill text-about-secondary"></i>
                            <span>Call Us Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. 6 Core Reasons Grid Section -->
<section class="about-pillars-v2 py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="about-eyebrow-pill mb-2">
                <i class="bi bi-award-fill text-about-secondary"></i>
                <span>OUR PROMISE</span>
            </div>
            <h2 class="fw-black text-about-primary display-6 mb-2">6 Reasons We Stand Out</h2>
            <p class="text-about-muted">Unmatched safety benchmarks, cutting-edge tracking technology, and customer-first service.</p>
        </div>

        <div class="row g-4">
            <!-- Reason 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="choose-card-v2">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="choose-icon-box-v2">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">5-Layer Protective Packing</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Heavy-duty bubble wraps, corrugated sheets, stretch films & custom wooden crates ensure zero scratches or breakages during transit.</p>
                </div>
            </div>

            <!-- Reason 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="choose-card-v2 primary-accent">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="choose-icon-box-v2">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">GPS Live Fleet Tracking</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Our weatherproof container trucks feature real-time GPS tracking so you can monitor your consignment movement anytime on your phone.</p>
                </div>
            </div>

            <!-- Reason 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="choose-card-v2">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="choose-icon-box-v2">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">100% Transparent Billing</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">All quotes include clear itemized break-ups, 0% hidden charges, and transparent billing for complete peace of mind.</p>
                </div>
            </div>

            <!-- Reason 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="choose-card-v2 primary-accent">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="choose-icon-box-v2">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">Full Transit Insurance</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Comprehensive transit risk coverage and instant claims assistance to safeguard your valuable belongings against unforeseen events.</p>
                </div>
            </div>

            <!-- Reason 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="choose-card-v2">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="choose-icon-box-v2">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">Verified Moving Crew</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Background-verified, uniformed, courteous & professionally trained moving personnel trained in handling delicate items.</p>
                </div>
            </div>

            <!-- Reason 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="choose-card-v2 primary-accent">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="choose-icon-box-v2">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">99.8% On-Time Record</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Our extensive branch network and dedicated logistics controllers guarantee swift, punctual delivery schedules across India.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Comparison Section (Sanatani vs Local Movers) -->
<section class="choose-comparison-v2 py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="about-eyebrow-pill mb-2">
                <i class="bi bi-check2-circle"></i>
                <span>SERVICE COMPARISON</span>
            </div>
            <h2 class="fw-black text-about-primary display-6 mb-2">How We Compare</h2>
            <p class="text-about-muted">See the clear difference between professional relocation and unorganized movers.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Sanatani Packers Column -->
            <div class="col-lg-6">
                <div class="comparison-card-v2">
                    <span class="comparison-pill-highlight">RECOMMENDED</span>
                    <div class="d-flex align-items-center gap-2 mb-4 pb-2 border-bottom">
                        <i class="bi bi-patch-check-fill text-about-secondary fs-3"></i>
                        <div>
                            <h4 class="fw-bold text-about-primary mb-0 fs-5"><?= $company3 ?></h4>
                            <small class="text-about-muted">IBA Approved & ISO Certified</small>
                        </div>
                    </div>

                    <div class="comparison-list-item">
                        <span class="fw-semibold text-about-dark">5-Layer Protective Packing</span>
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="fw-semibold text-about-dark">Real-Time GPS Fleet Tracking</span>
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="fw-semibold text-about-dark">100% Upfront Clear Pricing</span>
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="fw-semibold text-about-dark">IBA Approved Bills & Claims</span>
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="fw-semibold text-about-dark">Background-Verified Crew</span>
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="fw-semibold text-about-dark">Dedicated Move Coordinator</span>
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                    </div>
                </div>
            </div>

            <!-- Local Movers Column -->
            <div class="col-lg-6">
                <div class="comparison-card-local">
                    <div class="d-flex align-items-center gap-2 mb-4 pb-2 border-bottom">
                        <i class="bi bi-x-circle-fill text-danger fs-3"></i>
                        <div>
                            <h4 class="fw-bold text-about-muted mb-0 fs-5">Unorganized Local Movers</h4>
                            <small class="text-about-muted">Risky & Uncertified</small>
                        </div>
                    </div>

                    <div class="comparison-list-item">
                        <span class="text-about-muted">Basic Single Layer / Old Blankets</span>
                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="text-about-muted">No Vehicle GPS Tracking</span>
                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="text-about-muted">Hidden Charges & Extra Labor Fees</span>
                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="text-about-muted">Non-Approved Bills (No Claims)</span>
                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="text-about-muted">Untrained / Temporary Daily Labor</span>
                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                    </div>
                    <div class="comparison-list-item">
                        <span class="text-about-muted">No Support helpline or Coordinator</span>
                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Trust Credentials Grid -->
<section class="about-trust-v2 py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <div class="pe-lg-3">
                    <div class="about-eyebrow-pill mb-3">
                        <i class="bi bi-shield-lock-fill"></i>
                        <span>SAFETY GUARANTEE</span>
                    </div>
                    <h2 class="fw-black text-about-primary display-6 mb-3">Certified Quality You Can Rely On</h2>
                    <p class="text-about-muted mb-4 fs-6">We adhere to strict government regulations, IBA banking approvals, and ISO quality management standards for seamless relocations.</p>
                    
                    <a href="<?= $phonehtml ?>" class="btn btn-about-call d-inline-flex align-items-center gap-2">
                        <i class="bi bi-headset"></i>
                        <span>Contact Support Helpline</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="trust-item-v2">
                            <div class="trust-icon-v2">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-about-primary mb-1 fs-6">IBA Approved Packers</h5>
                                <p class="text-about-muted fs-7 mb-0">Bank & government employee approved relocation bills.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="trust-item-v2">
                            <div class="trust-icon-v2">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-about-primary mb-1 fs-6">Full Transit Insurance</h5>
                                <p class="text-about-muted fs-7 mb-0">Complete risk coverage for goods during long-distance transit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="trust-item-v2">
                            <div class="trust-icon-v2">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-about-primary mb-1 fs-6">Verified Moving Crew</h5>
                                <p class="text-about-muted fs-7 mb-0">Background-verified, uniformed & experienced moving staff.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="trust-item-v2">
                            <div class="trust-icon-v2">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-about-primary mb-1 fs-6">24/7 Live Support</h5>
                                <p class="text-about-muted fs-7 mb-0">Dedicated support team to answer status queries anytime.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Call To Action Banner -->
<section class="about-cta-v2 py-5">
    <div class="container">
        <div class="cta-box-v2 text-white shadow-lg">
            <div class="cta-glow-v2"></div>
            <div class="row align-items-center g-4 position-relative">
                <div class="col-lg-8">
                    <h3 class="display-6 fw-black text-white mb-2">Book Safe & Stress-Free Shifting Today!</h3>
                    <p class="text-white opacity-90 fw-medium mb-0 fs-6">Get an instant free cost estimate with 0% hidden charges and guaranteed zero-damage delivery across India.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#" class="btn btn-about-quote d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>GET FREE QUOTE NOW</span>
                        <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
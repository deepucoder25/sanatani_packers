<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Us',
    'bc_desc' => "Learn about $company3 — India's trusted IBA approved & ISO certified packers and movers delivering 100% safe, zero-damage relocation services.",
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- 2. Hero Story & Vision Section -->
<section class="about-hero-v2">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Left Column: Showcase Image & Floating Experience Seal -->
            <div class="col-lg-6">
                <div class="position-relative me-lg-3">
                    <div class="about-img-box-v2">
                        <img src="<?= base_url('assets/images/home_modules/about-main.jpg') ?>" alt="<?= $company3 ?>" class="img-fluid w-100 about-img-v2">
                        <div class="about-img-overlay-v2"></div>
                    </div>
                    


                    <!-- Floating Experience Badge -->
                    <div class="about-experience-badge-v2 d-flex align-items-center gap-3">
                        <div class="exp-icon-box">
                            <i class="bi bi-patch-check-fill fs-2"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-2 fw-black text-about-primary mb-0 lh-1"><?= $yearsExperience ?></span>
                            <small class="fw-bold text-uppercase text-about-muted tracking-wider fs-7">Years of Excellence</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Narrative Content & Key Advantages -->
            <div class="col-lg-6">
                <div class="ps-lg-2">
                    <div class="about-eyebrow-pill mb-3">
                        <i class="bi bi-shield-check fs-6"></i>
                        <span>SINCE 2015 &bull; IBA APPROVED & ISO CERTIFIED</span>
                    </div>

                    <h2 class="display-5 fw-black text-about-primary mb-3 lh-sm">
                        India's Premier <span class="text-about-secondary">Relocation Partner</span>
                    </h2>

                    <p class="lead fw-semibold text-about-dark opacity-75 mb-3">
                        Delivering 100% stress-free, zero-damage household shifting, office relocation, and vehicle transport across India.
                    </p>

                    <p class="text-about-muted mb-4 fs-6 lh-base">
                        Founded with a mission to redefine safety and efficiency in packers and movers logistics, <strong><?= $company3 ?></strong> combines multi-layer protective packaging, background-verified professional movers, and modern weatherproof GPS container trucks for seamless nationwide relocations.
                    </p>



                    <!-- CTA Actions -->
                    <div class="about-hero-actions pt-2">
                        <a href="#" class="btn btn-about-quote d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <span>GET FREE ESTIMATE</span>
                            <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                        </a>
                        <a href="tel:<?= @$phone ?>" class="btn btn-about-call d-inline-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill text-about-secondary"></i>
                            <span><?= @$phone ? $phone : 'Call Us Now' ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- 4. Core Relocation Pillars & Standards -->
<section class="about-pillars-v2 py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="about-eyebrow-pill mb-2">
                <i class="bi bi-star-fill text-about-secondary"></i>
                <span>WHY SANATANI PACKERS</span>
            </div>
            <h2 class="fw-black text-about-primary display-6 mb-2">Our Relocation Standards</h2>
            <p class="text-about-muted">Built on safety, technology, and absolute customer satisfaction.</p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="pillar-card-v2">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="pillar-icon-box mb-0">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">5-Layer Packing</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Heavy-duty bubble wraps, corrugated sheets, stretch films & custom wooden crates ensure zero scratches or breakages.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="pillar-card-v2 primary-accent">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="pillar-icon-box mb-0">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">GPS Tracked Fleet</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Our weatherproof container trucks feature real-time GPS tracking so you can monitor your consignment movement anytime.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="pillar-card-v2">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="pillar-icon-box mb-0">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">100% Transparent</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">All quotes include clear itemized break-ups, zero hidden charges, and transparent billing for total peace of mind.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="pillar-card-v2 primary-accent">
                    <div class="pillar-accent-bar"></div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="pillar-icon-box mb-0">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">Dedicated Manager</h4>
                    </div>
                    <p class="text-about-muted fs-7 lh-base mb-0">Every client gets a single point of contact manager who coordinates packing, loading, dispatch, and final door delivery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Step-by-Step Relocation Process -->
<section class="about-process-v2 py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="about-eyebrow-pill mb-2">
                <i class="bi bi-signpost-split-fill"></i>
                <span>HOW IT WORKS</span>
            </div>
            <h2 class="fw-black text-about-primary display-6 mb-2">Our 4-Step Effortless Process</h2>
            <p class="text-about-muted">Simple, transparent, and seamless relocation experience from start to finish.</p>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-md-6 col-lg-3 process-step-connector">
                <div class="step-card-v2">
                    <span class="step-number-v2">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 me-3">
                        <div class="step-icon-v2 mb-0">
                            <i class="bi bi-clipboard-check-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">Free Survey & Quote</h4>
                    </div>
                    <p class="text-about-muted fs-7 mb-0">Our expert team assesses your inventory and provides an instant transparent estimate with 0% hidden cost.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6 col-lg-3 process-step-connector">
                <div class="step-card-v2">
                    <span class="step-number-v2">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 me-3">
                        <div class="step-icon-v2 mb-0">
                            <i class="bi bi-box2-heart-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">5-Layer Packing</h4>
                    </div>
                    <p class="text-about-muted fs-7 mb-0">Trained packers pack furniture, electronics, and fragile items using premium bubble wraps and sturdy boxes.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6 col-lg-3 process-step-connector">
                <div class="step-card-v2">
                    <span class="step-number-v2">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 me-3">
                        <div class="step-icon-v2 mb-0">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">GPS Transit</h4>
                    </div>
                    <p class="text-about-muted fs-7 mb-0">Items are safely loaded into sealed container vehicles equipped with live GPS tracking for nationwide transport.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="step-card-v2">
                    <span class="step-number-v2">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 me-3">
                        <div class="step-icon-v2 mb-0">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h4 class="fw-bold text-about-primary mb-0 fs-5">Unpack & Setup</h4>
                    </div>
                    <p class="text-about-muted fs-7 mb-0">On arrival, items are unloaded, unpacked, and placed in your new home according to your preference.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Safety, Certification & Trust Credentials -->
<section class="about-trust-v2 py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <div class="pe-lg-3">
                    <div class="about-eyebrow-pill mb-3">
                        <i class="bi bi-shield-lock-fill"></i>
                        <span>SAFETY GUARANTEE</span>
                    </div>
                    <h2 class="fw-black text-about-primary display-6 mb-3">Complete Peace of Mind Guaranteed</h2>
                    <p class="text-about-muted mb-4 fs-6">We adhere to strict quality benchmarks, government approvals, and comprehensive transit insurance protection for all relocations.</p>
                    
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

<!-- 7. Call To Action Banner -->
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
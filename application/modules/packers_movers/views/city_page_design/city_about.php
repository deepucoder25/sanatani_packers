<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$state_slug = !empty($state) ? strtolower(str_replace(' ', '-', $state)) : '';
$state_img_file = FCPATH . 'assets/images/state/' . $state_slug . '.jpg';
$city_about_img = (!empty($state_slug) && file_exists($state_img_file))
  ? base_url('assets/images/state/' . $state_slug . '.jpg')
  : base_url('assets/images/slider/slider.jpg');
?>

<section class="pm-city-details-section py-5">
  <div class="container">

    <!-- ============ TOP: FULL-WIDTH ABOUT HERO (col-12) ============ -->
    <div class="row mb-4">
      <div class="col-12">
        <div class="pm-city-content-card">
          <div class="row g-4 align-items-center">

            <!-- LEFT / IMAGE (col-lg-6) -->
            <div class="col-lg-6">
              <div class="pm-city-about-img-wrap position-relative">
                
                <!-- Scrollable Image Gallery Container (500x600 JPGs under 150KB) -->
                <div class="pm-city-scroll-gallery">
                  <img src="<?= base_url('assets/images/city_page/relocation_1.jpg') ?>" alt="Packers and Movers in <?= htmlspecialchars($city) ?>" class="img-fluid pm-city-about-img w-100">
                  <img src="<?= base_url('assets/images/city_page/relocation_2.jpg') ?>" alt="Household Relocation Services <?= htmlspecialchars($city) ?>" class="img-fluid pm-city-about-img w-100">
                  <img src="<?= base_url('assets/images/city_page/relocation_3.jpg') ?>" alt="Transport Services <?= htmlspecialchars($city) ?>" class="img-fluid pm-city-about-img w-100">
                </div>

                <!-- Scroll Hint Badge (Center Top) -->

                <div class="pm-city-scroll-hint">
                  <i class="bi bi-mouse-fill text-warning me-1"></i> Scroll Image <i class="bi bi-chevron-down ms-1"></i>
                </div>


                <!-- Top Right Location Badge -->
                <div class="pm-city-loc-badge">
                  <i class="bi bi-geo-alt-fill text-pm-secondary"></i>
                  <span><?= htmlspecialchars($city) ?> Hub</span>
                </div>

              </div>
            </div>




            <!-- RIGHT / CONTENT (col-lg-6) -->
            <div class="col-lg-6">
              <div class="pm-city-about-intro">
                <!-- Classy Badge Eyebrow -->
                <div class="pm-section-badge mb-2">
                  <i class="bi bi-award-fill text-pm-secondary me-1"></i>
                  <span>VERIFIED &amp; TOP-RATED IN <?= strtoupper($city) ?></span>
                </div>

                <!-- Classy Main Heading with SVG Curve -->
                <h2 class="pm-city-main-title mb-3">
                  Best <span class="pm-city-highlight position-relative d-inline-block"><?= htmlspecialchars($city) ?>
                    <svg class="pm-header-curve" width="100" height="8" viewBox="0 0 100 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 5.5C25 2 75 2 98 5.5" stroke="var(--secondary-color)" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                  </span> Packers &amp; Movers
                </h2>

                <!-- Fresh & Classy Prose Content -->
                <div class="pm-city-prose-wrap mb-3">
                  <p class="pm-city-lead-text mb-2">
                    Relocating within or out of <strong><?= htmlspecialchars($city) ?></strong> requires seamless execution and uncompromising care. At <strong>Sanatani Packers and Movers</strong>, we simplify your entire moving journey with certified packing materials, dedicated closed container vehicles, and expert door-to-door handling.
                  </p>
                  <p class="pm-city-sub-text mb-0">
                    Whether you are moving a 1BHK apartment, a sprawling villa, an entire corporate office, or transporting your precious vehicle, our verified professionals in <strong><?= htmlspecialchars($city) ?></strong> ensure 100% damage-free, zero-delay relocation backed by full transit insurance.
                  </p>
                </div>

                <!-- Structured Feature Box Grid -->
                <div class="pm-city-feature-grid mt-3 mb-4">
                  <div class="pm-city-feature-box">
                    <div class="pm-feature-icon-wrap icon-blue">
                      <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="pm-feature-info">
                      <strong>100% Insured</strong>
                      <small>Transit Protection</small>
                    </div>
                  </div>

                  <div class="pm-city-feature-box">
                    <div class="pm-feature-icon-wrap icon-green">
                      <i class="bi bi-truck"></i>
                    </div>
                    <div class="pm-feature-info">
                      <strong>GPS Tracking</strong>
                      <small>Real-time Updates</small>
                    </div>
                  </div>

                  <div class="pm-city-feature-box">
                    <div class="pm-feature-icon-wrap icon-orange">
                      <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="pm-feature-info">
                      <strong>5-Layer Packing</strong>
                      <small>Zero-Damage</small>
                    </div>
                  </div>

                  <div class="pm-city-feature-box">
                    <div class="pm-feature-icon-wrap icon-purple">
                      <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="pm-feature-info">
                      <strong>On-Time Delivery</strong>
                      <small>Guaranteed</small>
                    </div>
                  </div>
                </div>

                <!-- Action Callout Buttons -->
                <div class="d-flex flex-wrap align-items-center gap-2">
                  <a href="#" class="btn btn-warning btn-sm rounded-pill px-3 py-2 fw-bold text-dark shadow-sm d-inline-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-lightning-charge-fill"></i> Get Free Quote
                  </a>
                  <a href="<?= $phonehtml ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-1">
                    <i class="bi bi-telephone-fill"></i> Call Support
                  </a>
                </div>
              </div>
            </div>

          </div><!-- /row inner -->
        </div><!-- /pm-city-content-card -->
      </div><!-- /col-12 -->
    </div><!-- /row top -->

    <!-- ============ MAIN CONTENT FULL-WIDTH (col-12) ============ -->
    <div class="row g-4">
      <div class="col-12">
        <div class="pm-city-content-card">
          <!-- City Map Section -->
          <div class="pm-city-map mb-4">
            <?php include 'city_map.php'; ?>
          </div>

          <!-- What Makes Relocation Different Section -->
          <div class="pm-city-classy-card p-4 mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <div class="pm-title-icon-box">
                <i class="bi bi-building-check"></i>
              </div>
              <h3 class="pm-city-section-title-sm mb-0">What Makes Relocation in <?= htmlspecialchars($city) ?> Special?</h3>
            </div>
            <p class="text-pm-muted mb-3">
              Every moving requirement in <strong><?= htmlspecialchars($city) ?></strong> comes with unique logistics — from navigating busy city traffic and apartment elevator schedules to handling weather-sensitive cargo. We tailor customized shifting plans using heavy-duty bubble wraps, corrugated sheets, and stretch film protection.
            </p>

            <h4 class="fw-bold text-pm-primary fs-6 mt-4 mb-3">Comprehensive Relocation Services in <?= htmlspecialchars($city) ?>:</h4>
            <div class="row g-2 pm-city-service-grid">
              <div class="col-sm-6 col-md-3">
                <div class="pm-srv-pill-box">
                  <i class="bi bi-house-door-fill text-pm-secondary"></i>
                  <span>Household Relocation</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="pm-srv-pill-box">
                  <i class="bi bi-briefcase-fill text-pm-secondary"></i>
                  <span>Office Shifting</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="pm-srv-pill-box">
                  <i class="bi bi-car-front-fill text-pm-secondary"></i>
                  <span>Car &amp; Bike Transport</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="pm-srv-pill-box">
                  <i class="bi bi-box-seam-fill text-pm-secondary"></i>
                  <span>Warehousing Support</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Why Choose Professional Movers Section -->
          <div class="pm-city-classy-card p-4 mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <div class="pm-title-icon-box">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
              <h3 class="pm-city-section-title-sm mb-0">Why Sanatani Packers and Movers in <?= htmlspecialchars($city) ?>?</h3>
            </div>
            <p class="text-pm-muted mb-3">
              Professional relocation isn't just about loading boxes — it's about total peace of mind. Fragile crockery, delicate electronics, heavy wooden furniture, and valuable vehicles receive individual protective wrapping and specialized handling by our certified team.
            </p>
            <div class="pm-city-quote-callout p-3 rounded-3">
              <i class="bi bi-quote text-pm-secondary fs-3 me-2"></i>
              <span class="fst-italic text-pm-primary fw-semibold">"Transparent pricing, zero hidden charges, and guaranteed on-time delivery across all major Indian routes."</span>
            </div>
          </div>

          <?php include 'city_reviews.php'; ?>
          <?php include 'city_faq.php'; ?>
        </div><!-- /pm-city-content-card -->
      </div><!-- /col-12 -->
    </div><!-- /row g-4 -->

    <!-- Dynamic Services Section based on City -->
    <?php 
    $allowed_cities = [
        // 'aurangabad', 'chandigarh', 'dhanbad', 'gwalior', 'hyderabad', 'jodhpur',
        // 'kota', 'meerut', 'navi mumbai', 'rajkot', 'siliguri', 'vijayawada',
        // 'ahmedabad', 'bangalore', 'chennai', 'faridabad', 'gurugram', 'indore',
        // 'jamshedpur', 'mumbai', 'ranchi', 'surat', 'visakhapatnam',
        // 'allahabad', 'bareilly', 'coimbatore', 'ghaziabad', 'howrah', 'jabalpur', 'ludhiana',
        // 'nagpur', 'pune', 'solapur', 'vadodara',
        // 'amritsar', 'bhopal', 'delhi', 'hubli-dharwad', 'jaipur', 'kolkata', 'madurai', 'nashik',
        // 'raipur', 'srinagar'
    ];
    
    if(in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

  </div><!-- /container -->
</section>





<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

include 'city_content.php';
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
                  <img src="<?= base_url('assets/images/city_page/city-about1.jpg') ?>" alt="Packers and Movers in <?= htmlspecialchars($city) ?>" class="img-fluid pm-city-about-img w-100">
                  <img src="<?= base_url('assets/images/city_page/city-about2.jpg') ?>" alt="Household Relocation Services <?= htmlspecialchars($city) ?>" class="img-fluid pm-city-about-img w-100">
                  <img src="<?= base_url('assets/images/city_page/city-about3.jpg') ?>" alt="Transport Services <?= htmlspecialchars($city) ?>" class="img-fluid pm-city-about-img w-100">
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
                  <?= $htmlcontent ?>
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
    </div><!-- /row top -->

    <!-- ============ MIDDLE: FULL-WIDTH CONTENT BOX (col-12) ============ -->
    <div class="row mb-2 mt-3">
      <div class="col-12">
        <div class="pm-city-content-card">
          <?= $htmlcontent1 ?>
        </div>
      </div>
    </div>

    <!-- ============ MAIN CONTENT FULL-WIDTH (col-12) ============ -->
    <div class="row g-4">
      <div class="col-12">
        <div class="pm-city-content-card">
          <!-- Map (col-lg-6) and Content (col-lg-6) Side-by-Side Section -->
          <div class="row g-4 mb-4 align-items-stretch">
            <!-- Left Column: Map (col-lg-6) -->
            <div class="col-lg-6 d-flex flex-column">
              <?php include 'city_map.php'; ?>
            </div>

            <!-- Right Column: Content (col-lg-6) -->
            <div class="col-lg-6 d-flex flex-column">
              <?= $htmlcontent2 ?>
            </div><!-- /col-lg-6 content -->
          </div><!-- /row side-by-side -->

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





<?php
$state_slug = !empty($state) ? strtolower(str_replace(' ', '-', $state)) : '';
?>
<section class="home-page-hero py-4" itemscope itemtype="https://schema.org/WPHeader">
  <div class="hero-main-container container">
    <div class="row align-items-center">
      <!-- Left Column: Content -->
      <div class="col-lg-7 col-md-12 hero-left-col">

        <!-- Breadcrumbs Navigation -->
        <nav class="hero-city-breadcrumb mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url() ?>"><i class="bi bi-house-door-fill me-1"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('our-branches') ?>">Our Branches</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url($state_slug) ?>"><?= htmlspecialchars($state) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($city) ?></li>
          </ol>
        </nav>

        <!-- Eyebrow Tag -->
        <div class="hero-eyebrow-tag" itemprop="headline">
          <span class="orange-dash">—</span> VERIFIED. RELIABLE. <span class="orange-text">100% SECURE IN <?= strtoupper($city) ?>.</span>
        </div>

        <!-- Main Headline -->
        <h1 class="hero-main-title" itemprop="name">
          BEST PACKERS AND MOVERS IN <span class="highlight-orange"><?= strtoupper($city) ?>,</span> GUARANTEED.
        </h1>

        <!-- Subtitle Divider -->
        <div class="hero-subline-divider">
          <span class="dash">—</span> <?= htmlspecialchars($city) ?>'s #1 Rated &amp; Most Trusted Relocation Services <span class="dash">—</span>
        </div>

        <!-- Description Paragraph -->
        <p class="hero-description" itemprop="description">
          Looking for top-rated packers and movers in <strong><?= htmlspecialchars($city) ?></strong>? Experience 100% stress-free shifting with multi-layer protective packing, trained verified professionals &amp; guaranteed damage-free transit.
        </p>

        <!-- 4 Feature Badges Row -->
        <div class="hero-features-row">
          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-box-seam"></i>
            </div>
            <span class="feature-label">5-Layer Packing</span>
          </div>

          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-shield-check"></i>
            </div>
            <span class="feature-label">Zero Damage</span>
          </div>

          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-truck"></i>
            </div>
            <span class="feature-label">GPS Tracking</span>
          </div>

          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-headset"></i>
            </div>
            <span class="feature-label">24/7 Support</span>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="hero-actions-row">
          <a href="#" class="btn-hero-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
            <span class="btn-dash">—</span> GET A FREE QUOTE
            <span class="btn-arrow-circle"><i class="bi bi-arrow-right"></i></span>
          </a>
          <a href="<?= $phonehtml ?>" class="btn-hero-secondary">
            CALL HELPLINE
            <span class="btn-arrow-icon"><i class="bi bi-telephone-fill"></i></span>
          </a>
        </div>
      </div>

      <!-- Right Column: Hero Spacer for Background Image -->
      <div class="col-lg-5 col-md-12 hero-right-col d-none d-lg-block"></div>
    </div>

    <!-- Bottom Floating Quote Bar (Loaded from quoteform.php) -->
    <div class="row mt-2 mt-lg-4">
      <div class="col-12">
        <?php $this->load->view('contacts/quoteform.php') ?>
      </div>
    </div>
  </div>
</section>

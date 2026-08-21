<section class="home-page-hero py-4" itemscope itemtype="https://schema.org/WPHeader">
  <div class="hero-main-container container">
    <div class="row align-items-center">
      <!-- Left Column: Content -->
      <div class="col-lg-7 col-md-12 hero-left-col">
        <!-- Eyebrow Tag -->
        <div class="hero-eyebrow-tag" itemprop="headline">
          <span class="orange-dash">—</span> VERIFIED. RELIABLE. <span class="orange-text">100% SECURE.</span>
        </div>

        <!-- Main Headline -->
        <h1 class="hero-main-title" itemprop="name">
          ZERO-DAMAGE <span class="highlight-orange">RELOCATION,</span> GUARANTEED.
        </h1>

        <!-- Subtitle Divider -->
        <div class="hero-subline-divider">
          <span class="dash">—</span> Jharkhand's #1 Rated & Most Trusted Movers <span class="dash">—</span>
        </div>

        <!-- Description Paragraph -->
        <p class="hero-description" itemprop="description">
          Experience 100% stress-free shifting with multi-layer protective packing, trained verified professionals & guaranteed damage-free transit across India.
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
          <a href="<?= site_url('about-us') ?>" class="btn-hero-secondary">
            ABOUT US
            <span class="btn-arrow-icon"><i class="bi bi-arrow-right"></i></span>
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





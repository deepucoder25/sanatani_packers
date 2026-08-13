<section class="home-page-hero" itemscope itemtype="https://schema.org/WPHeader">
  <div class="hero-main-container container">
    <div class="row align-items-center">
      <!-- Left Column: Content -->
      <div class="col-lg-6 col-md-12 hero-left-col">
        <!-- Eyebrow Tag -->
        <div class="hero-eyebrow-tag" itemprop="headline">
          <span class="orange-dash">—</span> SAFE. RELIABLE. <span class="orange-text">ON TIME.</span>
        </div>

        <!-- Main Headline -->
        <h1 class="hero-main-title" itemprop="name">
          MOVING YOUR<br>
          <span class="highlight-orange">WORLD</span> WITH CARE
        </h1>

        <!-- Subtitle Divider -->
        <div class="hero-subline-divider">
          <span class="dash">—</span> Deoghar's Most Trusted Packers and Movers <span class="dash">—</span>
        </div>

        <!-- Description Paragraph -->
        <p class="hero-description" itemprop="description">
          We provide professional packing, secure transportation and hassle-free moving services for your home, office and vehicles.
        </p>

        <!-- 4 Feature Badges Row -->
        <div class="hero-features-row">
          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-box-seam"></i>
            </div>
            <span class="feature-label">Safe Packing</span>
          </div>

          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-truck"></i>
            </div>
            <span class="feature-label">On Time Delivery</span>
          </div>

          <div class="hero-feature-item">
            <div class="feature-icon-circle">
              <i class="bi bi-shield-check"></i>
            </div>
            <span class="feature-label">Secure Transport</span>
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
          <a href="#quoteform" class="btn-hero-primary">
            <span class="btn-dash">—</span> GET A FREE QUOTE
            <span class="btn-arrow-circle"><i class="bi bi-arrow-right"></i></span>
          </a>
          <a href="<?= site_url('packers-and-movers') ?>" class="btn-hero-secondary">
            OUR SERVICES
            <span class="btn-arrow-icon"><i class="bi bi-arrow-right"></i></span>
          </a>
        </div>
      </div>

      <!-- Right Column: Truck & Temple Hero Image -->
      <div class="col-lg-6 col-md-12 hero-right-col">
        <div class="hero-truck-image-wrapper">
          <img src="<?= base_url('assets/images/slider/sanatani_truck_hero.jpg') ?>" 
               alt="Deoghar Sanatani Packers and Movers Truck" 
               class="hero-truck-img" 
               itemprop="image">
        </div>
      </div>
    </div>

    <!-- Bottom Floating Quote Bar (Loaded from quoteform.php) -->
    <div class="row mt-4 mt-lg-5">
      <div class="col-12">
        <?php $this->load->view('contacts/quoteform.php') ?>
      </div>
    </div>
  </div>
</section>





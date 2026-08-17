<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$companyName = isset($company3) ? $company3 : 'Sanatani Packers and Movers';
$companyLocation = isset($addressRegion) ? $addressRegion : 'Deoghar';
$companyExperience = isset($experience) ? $experience : '10+';
?>

<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Content -->
      <div class="col-lg-6 col-12">
        <div class="about-content">
          <!-- Eyebrow Tag -->
          <div class="services-eyebrow-tag mb-2">
            ABOUT US
          </div>

          <!-- Main Title -->
          <h2 class="services-main-title mb-2">
            WE MAKE MOVING SIMPLE &amp; STRESS FREE
          </h2>

          <!-- Orange Accent Line -->
          <div class="about-orange-line mb-3"></div>

          <!-- Description Paragraphs -->
          <p class="about-desc-text mb-3">
            <?= htmlspecialchars($companyName) ?>, <?= htmlspecialchars($companyLocation) ?> is a reliable moving company committed to provide safe, efficient and affordable relocation services.
          </p>

          <p class="about-desc-text mb-4">
            Our expert team ensures that your belongings reach their destination securely and on time.
          </p>

          <!-- Read More Button -->
          <div class="about-action-wrap">
            <a href="<?= site_url('about-us') ?>" class="btn-about-primary">
              <span>READ MORE ABOUT US</span>
              <span class="btn-arrow-icon"><i class="bi bi-arrow-right"></i></span>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Column: Image Showcase Grid & Floating Experience Badge -->
      <div class="col-lg-6 col-12">
        <div class="about-showcase-grid row g-3 position-relative">
          
          <!-- Main Left Image with Floating Experience Badge -->
          <div class="col-6 position-relative">
            <div class="about-img-box about-img-main shadow-sm">
              <img src="<?= base_url('assets/images/home_modules/about-main.jpg') ?>" 
                   alt="Reliable Packers and Movers Service - <?= htmlspecialchars($companyName) ?>" 
                   class="img-fluid" 
                   loading="lazy">
            </div>

            <!-- Floating Experience Badge -->
            <div class="about-experience-badge shadow-lg">
              <div class="exp-icon-circle">
                <i class="bi bi-award-fill"></i>
              </div>
              <div class="exp-text-wrap">
                <span class="exp-number"><?= htmlspecialchars($companyExperience) ?></span>
                <span class="exp-label">Years Of<br>Experience</span>
              </div>
            </div>
          </div>

          <!-- Right Stacked 2 Images -->
          <div class="col-6 d-flex flex-column gap-3">
            <div class="about-img-box about-img-top shadow-sm">
              <img src="<?= base_url('assets/images/home_modules/about-top.jpg') ?>" 
                   alt="Packing Services - <?= htmlspecialchars($companyName) ?>" 
                   class="img-fluid" 
                   loading="lazy">
            </div>

            <div class="about-img-box about-img-bottom shadow-sm">
              <img src="<?= base_url('assets/images/home_modules/about-bottom.jpg') ?>" 
                   alt="Furniture Wrapping - <?= htmlspecialchars($companyName) ?>" 
                   class="img-fluid" 
                   loading="lazy">
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'packers-and-movers', 'household-shifting', 'office-relocation', 'local-and-domestic-moving', 'transportation-services', 'goods-and-logistics'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Phone -->
        <div class="top-bar-left d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope-fill"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-telephone-fill"></i> <span><?= $phone ?></span>
          </a>
        </div>

        <!-- Middle: Trust Badge & Happy Customers -->
        <div class="top-bar-middle d-flex align-items-center gap-3">
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-shield-check text-warning"></i> <span>Verified &amp; IBA Approved</span>
          </span>
          <span class="divider-line">|</span>
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-people-fill"></i> <span><?= $happyClients ?> Satisfied Clients</span>
          </span>
        </div>

        <!-- Right Side: Branches & Reviews Badges -->
        <div class="top-bar-right d-flex align-items-center gap-2">
          <a href="<?= site_url('our-branches') ?>" class="top-badge-pill highlight-branch">
            <i class="bi bi-geo-alt-fill text-warning"></i> Our Branches
          </a>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Rating
          </span>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none flex-column gap-2 py-1">
        <!-- Row 1: Contact Info -->
        <div class="d-flex justify-content-center align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-envelope-fill"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-telephone-fill"></i> <span><?= $phone ?></span>
          </a>
        </div>
        <!-- Row 2: Branches & Google Reviews -->
        <div class="d-flex justify-content-center align-items-center gap-2 flex-wrap">
          <a href="<?= site_url('our-branches') ?>" class="top-badge-pill highlight-branch">
            <i class="bi bi-geo-alt-fill text-warning"></i> Branches
          </a>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Rating
          </span>
        </div>
      </div>
    </div>
  </div>



  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Locations", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Track", "url" => site_url('tracking')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Left: Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>"
          class="brand-logo" loading="lazy">
      </a>



      <!-- Right Side: Transparent Box (Phone, Get Quote & Hamburger) -->
      <div class="nav-right-box d-flex align-items-center gap-3">
        <!-- Phone Link -->
        <a href="<?= $phonehtml ?>" class="nav-phone-link d-none d-md-flex align-items-center gap-2">
          <div class="phone-icon-circle">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="phone-text-wrap d-flex flex-column">
            <span class="phone-label">Call Support</span>
            <span class="phone-number"><?= $phone ?></span>
          </div>
        </a>

        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
          <i class="bi bi-file-earmark-text"></i>
          <span class="btn-quote-text">Get a Quote</span>
        </a>

        <!-- Hamburger Button -->
        <button class="hamburger setting-btn d-flex" id="openMenu" aria-label="Open navigation menu">
          <span class="bar bar1"></span>
          <span class="bar bar2"></span>
          <span class="bar bar3"></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Navigation Menu Overlay (Pure White Background) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main full page navigation">
    <div class="mega-inner">
      <!-- Full Page Header Bar -->
      <div class="mega-header-bar">
        <a href="<?= site_url() ?>" class="mega-header-brand">
          <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="mega-header-logo" loading="lazy">
        </a>
        <!-- Close Button -->
        <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <!-- Main Content Grid (4-Column Layout) -->
      <div class="mega-content-grid">
        <div class="row g-4">
          
          <!-- Column 1: Short Intro & Social Media Icons -->
          <div class="col-lg-3 col-md-6 mega-col-brand">
            <h4 class="mega-column-title"><i class="bi bi-info-circle-fill"></i> About Company</h4>
            <div class="mega-brand-card-flat">
              <p class="mega-brand-desc">
                <?= $company3 ?> is India's leading IBA approved &amp; ISO certified relocation partner offering 100% safe, fast, and stress-free shifting services nationwide.
              </p>
              
              <div class="mega-iba-pill">
                <i class="bi bi-shield-check text-warning"></i> Verified &amp; IBA Approved
              </div>

              <div class="mega-social-wrap">
                <span class="social-title">Connect With Us</span>
                <div class="mega-social-links">
                  <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" class="social-icon-btn facebook" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                  <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" class="social-icon-btn instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                  <a href="<?= !empty($twitterhtml) ? $twitterhtml : '#' ?>" class="social-icon-btn twitter" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" class="social-icon-btn linkedin" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                  <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener" class="social-icon-btn whatsapp" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                  <a href="<?= !empty($youtubehtml) ? $youtubehtml : '#' ?>" class="social-icon-btn youtube" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Column 2: Company & Related Pages -->
          <div class="col-lg-3 col-md-6 col-6 mega-col-company">
            <h4 class="mega-column-title"><i class="bi bi-building"></i> Company Links</h4>
            <ul class="mega-menu-list">
              <li><a href="<?= site_url() ?>" class="<?= $active_tab === 'home' ? 'active' : '' ?>"><i class="bi bi-house-door-fill"></i> Home</a></li>
              <li><a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>"><i class="bi bi-info-circle-fill"></i> About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>"><i class="bi bi-award-fill"></i> Why Choose Us</a></li>
              <li><a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>"><i class="bi bi-question-circle-fill"></i> FAQs &amp; Help</a></li>
              <li><a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>"><i class="bi bi-chat-quote-fill"></i> Testimonials</a></li>
              <li><a href="<?= site_url('our-branches') ?>" class="<?= $segment1 === 'our-branches' ? 'active' : '' ?>"><i class="bi bi-geo-alt-fill"></i> Our Branches</a></li>
              <li><a href="<?= site_url('photo-gallery') ?>" class="<?= $segment1 === 'photo-gallery' ? 'active' : '' ?>"><i class="bi bi-images"></i> Photo Gallery</a></li>
              <li><a href="<?= site_url('contact-us') ?>" class="<?= $segment1 === 'contact-us' ? 'active' : '' ?>"><i class="bi bi-envelope-fill"></i> Contact Us</a></li>
              <li><a href="<?= site_url('tracking') ?>" class="<?= $segment1 === 'tracking' ? 'active' : '' ?>"><i class="bi bi-geo-fill"></i> Track Shipment</a></li>
            </ul>
          </div>

          <!-- Column 3: Services Pages -->
          <div class="col-lg-3 col-md-6 col-6 mega-col-services">
            <h4 class="mega-column-title"><i class="bi bi-grid-fill"></i> Our Services</h4>
            <ul class="mega-menu-list services-list">
              <li>
                <a href="<?= site_url('packers-and-movers') ?>" class="<?= $segment1 === 'packers-and-movers' ? 'active' : '' ?>">
                  <i class="bi bi-box-seam-fill"></i>
                  <span>Packers &amp; Movers</span>
                </a>
              </li>
              <li>
                <a href="<?= site_url('household-shifting') ?>" class="<?= $segment1 === 'household-shifting' ? 'active' : '' ?>">
                  <i class="bi bi-house-gear-fill"></i>
                  <span>Household Shifting</span>
                </a>
              </li>
              <li>
                <a href="<?= site_url('office-relocation') ?>" class="<?= $segment1 === 'office-relocation' ? 'active' : '' ?>">
                  <i class="bi bi-briefcase-fill"></i>
                  <span>Office Relocation</span>
                </a>
              </li>
              <li>
                <a href="<?= site_url('local-and-domestic-moving') ?>" class="<?= $segment1 === 'local-and-domestic-moving' ? 'active' : '' ?>">
                  <i class="bi bi-truck"></i>
                  <span>Local &amp; Domestic Moving</span>
                </a>
              </li>
              <li>
                <a href="<?= site_url('transportation-services') ?>" class="<?= $segment1 === 'transportation-services' ? 'active' : '' ?>">
                  <i class="bi bi-front"></i>
                  <span>Transportation Services</span>
                </a>
              </li>
              <li>
                <a href="<?= site_url('goods-and-logistics') ?>" class="<?= $segment1 === 'goods-and-logistics' ? 'active' : '' ?>">
                  <i class="bi bi-shop"></i>
                  <span>Goods &amp; Logistics</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 4: Helpline & Direct Contact Info -->
          <div class="col-lg-3 col-md-6 mega-col-contact">
            <h4 class="mega-column-title"><i class="bi bi-telephone-outbound-fill"></i> Contact Support</h4>
            
            <div class="mega-contact-card">
              <a href="<?= $phonehtml ?>" class="contact-card-item">
                <div class="c-icon"><i class="bi bi-telephone-fill"></i></div>
                <div>
                  <span class="c-label">Call Support 24/7</span>
                  <strong class="c-val"><?= $phone ?></strong>
                </div>
              </a>

              <a href="<?= $mailhtml ?>" class="contact-card-item">
                <div class="c-icon"><i class="bi bi-envelope-fill"></i></div>
                <div>
                  <span class="c-label">Email Support</span>
                  <strong class="c-val"><?= $mail ?></strong>
                </div>
              </a>

              <div class="contact-card-item">
                <div class="c-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div>
                  <span class="c-label">Headquarters</span>
                  <strong class="c-val">Deoghar, Jharkhand, India</strong>
                </div>
              </div>
            </div>

            <div class="mega-action-buttons">
              <a href="<?= $phonehtml ?>" class="mega-btn-call">
                <i class="bi bi-telephone-fill"></i> Call Now
              </a>
              <a href="#" class="mega-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                <i class="bi bi-file-earmark-text"></i> Get Quote
              </a>
            </div>
          </div>

        </div>
      </div>

      <!-- Secondary Links Footer Bar (Attractive Glass Capsule Container) -->
      <div class="mega-footer-bar">
        <div class="mega-sec-links">
          <a href="<?= site_url('privacy-policy') ?>" class="mega-footer-pill">
            <i class="bi bi-shield-lock-fill"></i> Privacy Policy
          </a>
          <a href="<?= site_url('terms-and-conditions') ?>" class="mega-footer-pill">
            <i class="bi bi-file-earmark-text-fill"></i> Terms &amp; Conditions
          </a>
        </div>
        <div class="mega-copy-text">
          <i class="bi bi-shield-check text-warning me-1"></i> &copy; <?= date('Y') ?> <strong> <?= $company3 ?></strong>. All Rights Reserved.
        </div>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    if (openMenu && megaMenu) {
      openMenu.addEventListener('click', () => {
        megaMenu.classList.add('active');
        body.classList.add('menu-open');
      });
    }

    if (closeMenu && megaMenu) {
      closeMenu.addEventListener('click', () => {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      });
    }

    // Close menu when clicking on backdrop overlay
    if (megaMenu) {
      megaMenu.addEventListener('click', (e) => {
        if (e.target === megaMenu) {
          megaMenu.classList.remove('active');
          body.classList.remove('menu-open');
        }
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && megaMenu && megaMenu.classList.contains('active')) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      if (mainHeader) {
        mainHeader.classList.toggle('scrolled', window.scrollY > 20);
      }
    });
  </script>
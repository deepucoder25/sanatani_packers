<!-- FOOTER SECTION -->
<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');
?>
<footer class="footer-section">

  <!-- Floating Feature Card Strip at Top of Footer -->
  <div class="container">
    <div class="footer-top-features">
      <div class="row g-4 align-items-center">

        <!-- Feature 1 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="feature-item-card">
            <div class="feature-icon-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-svg-icon">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                <polyline points="9 11 12 14 22 4"/>
              </svg>
            </div>
            <div class="feature-info">
              <h5 class="feature-title">SAFE &amp; SECURE</h5>
              <p class="feature-desc">Your Goods, Our Responsibility</p>
            </div>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="feature-item-card">
            <div class="feature-icon-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-svg-icon">
                <rect x="1" y="3" width="15" height="13"/>
                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                <circle cx="5.5" cy="18.5" r="2.5"/>
                <circle cx="18.5" cy="18.5" r="2.5"/>
              </svg>
            </div>
            <div class="feature-info">
              <h5 class="feature-title">ON TIME DELIVERY</h5>
              <p class="feature-desc">We Value Your Time</p>
            </div>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="feature-item-card">
            <div class="feature-icon-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-svg-icon">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                <line x1="12" y1="22.08" x2="12" y2="12"/>
              </svg>
            </div>
            <div class="feature-info">
              <h5 class="feature-title">AFFORDABLE PRICING</h5>
              <p class="feature-desc">Best Services at Best Prices</p>
            </div>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="feature-item-card">
            <div class="feature-icon-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-svg-icon">
                <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
                <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
              </svg>
            </div>
            <div class="feature-info">
              <h5 class="feature-title">24/7 CUSTOMER SUPPORT</h5>
              <p class="feature-desc">We are Always Here to Help You</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Main Footer Content -->
  <div class="footer-main">
    <div class="container">
      <div class="row g-4">

        <!-- Column 1: Brand Logo, Description & Social Links -->
        <div class="col-lg-3 col-md-6 footer-col-divider">
          <div class="footer-brand-wrap">
            <!-- Unique Text Brand Logo -->
            <a href="<?= site_url() ?>" class="footer-text-brand" aria-label="<?= $company3 ?>">
              <div class="brand-trishul-wrap">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="trishul-svg">
                  <path d="M12 2V22M12 2L8 7M12 2L16 7M5 7C5 12 8 15 12 15C16 15 19 12 19 7" stroke="#FF8623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="brand-eyebrow">
                <span class="eyebrow-line"></span>
                <span class="eyebrow-text">DEOGHAR</span>
                <span class="eyebrow-line"></span>
              </div>
              <div class="brand-main-title">
                <span class="title-white">SANAT</span><span class="title-orange">ANI</span>
              </div>
              <div class="brand-sub-title">
                <span class="sub-dash">—</span> PACKERS AND MOVERS <span class="sub-dash">—</span>
              </div>
            </a>

            <p class="footer-brand-desc">
              <?= $company3 ?>, Deoghar is your trusted partner for safe, reliable and hassle-free relocation services. We provide best packing, moving and transport solutions with care and on time.
            </p>

            <div class="footer-social-strip">
              <span class="social-dash"></span>
              <div class="footer-social-links">
                <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" aria-label="Facebook" class="footer-social-btn"><i class="bi bi-facebook"></i></a>
                <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" aria-label="Instagram" class="footer-social-btn"><i class="bi bi-instagram"></i></a>
                <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" aria-label="LinkedIn" class="footer-social-btn"><i class="bi bi-linkedin"></i></a>
                <a href="<?= !empty($youtubehtml) ? $youtubehtml : '#' ?>" aria-label="YouTube" class="footer-social-btn"><i class="bi bi-youtube"></i></a>
              </div>
              <span class="social-dash"></span>
            </div>
          </div>
        </div>

        <!-- Column 2: COMPANY LINKS -->
        <div class="col-lg-3 col-md-6 col-6 footer-col-divider">
          <div class="footer-widget">
            <h4 class="footer-widget-title">
              <i class="bi bi-chevron-right title-chevron"></i> COMPANY LINKS
            </h4>

            <ul class="footer-menu-list">
              <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-chevron-right"></i> About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right"></i> Why Choose Us</a></li>
              <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-chevron-right"></i> FAQs &amp; Help</a></li>
              <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right"></i> Testimonials</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-chevron-right"></i> Our Branches</a></li>
              <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-chevron-right"></i> Photo Gallery</a></li>
              <li><a href="<?= site_url('blog/view') ?>"><i class="bi bi-chevron-right"></i> Our Blog</a></li>
              <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
              <li><a href="<?= site_url('tracking') ?>"><i class="bi bi-chevron-right"></i> Track Shipment</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: OUR SERVICES -->
        <div class="col-lg-3 col-md-6 col-6 footer-col-divider">
          <div class="footer-widget">
            <h4 class="footer-widget-title">
              <i class="bi bi-chevron-right title-chevron"></i> OUR SERVICES
            </h4>

            <ul class="footer-menu-list">
              <li><a href="<?= site_url('packers-and-movers') ?>"><i class="bi bi-chevron-right"></i> Packers &amp; Movers</a></li>
              <li><a href="<?= site_url('household-shifting') ?>"><i class="bi bi-chevron-right"></i> Household Shifting</a></li>
              <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-chevron-right"></i> Office Relocation</a></li>
              <li><a href="<?= site_url('local-and-domestic-moving') ?>"><i class="bi bi-chevron-right"></i> Local &amp; Domestic Moving</a></li>
              <li><a href="<?= site_url('transportation-services') ?>"><i class="bi bi-chevron-right"></i> Transportation Services</a></li>
              <li><a href="<?= site_url('goods-and-logistics') ?>"><i class="bi bi-chevron-right"></i> Goods &amp; Logistics</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 4: CONTACT US -->
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h4 class="footer-widget-title">
              <i class="bi bi-chevron-right title-chevron"></i> CONTACT US
            </h4>

            <div class="footer-contact-box">

              <!-- Contact Item 1: Address -->
              <div class="contact-info-item">
                <div class="contact-icon-circle">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-info-text">
                  <span class="contact-label">LOCATION</span>
                  <strong><?= $company3 ?></strong>
                  <span class="contact-subtext"><?= $address ?></span>
                </div>
              </div>

              <!-- Contact Item 2: Phone -->
              <div class="contact-info-item">
                <div class="contact-icon-circle">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-info-text">
                  <span class="contact-label">CALL SUPPORT</span>
                  <a href="<?= $phonehtml ?>" class="contact-link"><?= $phone ?></a>
                </div>
              </div>

              <!-- Contact Item 3: Email -->
              <div class="contact-info-item">
                <div class="contact-icon-circle">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="contact-info-text">
                  <span class="contact-label">EMAIL US</span>
                  <a href="<?= $mailhtml ?>" class="contact-link"><?= $mail ?></a>
                </div>
              </div>

              <!-- Contact Item 4: Website -->
              <div class="contact-info-item">
                <div class="contact-icon-circle">
                  <i class="bi bi-globe"></i>
                </div>
                <div class="contact-info-text">
                  <span class="contact-label">VISIT WEBSITE</span>
                  <a href="<?= site_url() ?>" class="contact-link"><?= $companydomain ?></a>
                </div>
              </div>

              <!-- Call Banner Box -->
              <div class="footer-call-banner">
                <div class="call-banner-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="call-banner-content">
                  <span class="call-banner-subtitle">NEED HELP? CALL US</span>
                  <a href="<?= $phonehtml ?>" class="call-banner-number"><?= $phone ?></a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Background Vector Graphics Overlay (Temple Silhouette & Moving Truck) -->
  <div class="footer-vector-bg">
    <div class="vector-skyline"></div>
    <div class="vector-truck"></div>
  </div>

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom-bar">
    <div class="container">
      <div class="footer-bottom-flex">

        <!-- Copyright Text -->
        <div class="footer-copyright-text">
          &copy; <?= date('Y') ?> <?= $company3 ?>, Deoghar. All Rights Reserved.
        </div>

        <div class="bottom-v-divider d-none d-lg-block"></div>

        <!-- IBA Badge -->
        <div class="footer-iba-badge">
          <div class="iba-starburst-seal">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 2L21.3 4.4L25.3 3.6L27.2 7.2L31.2 8.1L31.5 12.2L34.7 14.7L33.3 18.6L34.7 22.5L31.5 25L31.2 29.1L27.2 30L25.3 33.6L21.3 32.8L18 35.2L14.7 32.8L10.7 33.6L8.8 30L4.8 29.1L4.5 25L1.3 22.5L2.7 18.6L1.3 14.7L4.5 12.2L4.8 8.1L8.8 7.2L10.7 3.6L14.7 4.4L18 2Z" fill="#FF8623"/>
              <circle cx="18" cy="18.6" r="10" fill="#FFFFFF"/>
              <path d="M13.5 18.5L16.5 21.5L22.5 15.5" stroke="#FF8623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="iba-text-wrap">
            <span class="iba-heading">IBA APPROVED</span>
            <span class="iba-subheading">TRANSPORTER</span>
          </div>
        </div>

        <div class="bottom-v-divider d-none d-lg-block"></div>

        <!-- Payment Options -->
        <div class="footer-payment-wrap">
          <span class="we-accept-text">WE ACCEPT</span>
          <div class="payment-badges">
            <div class="pay-badge-card badge-visa">
              <span class="visa-text">VISA</span>
            </div>
            <div class="pay-badge-card badge-mastercard">
              <span class="mc-circle mc-red"></span>
              <span class="mc-circle mc-yellow"></span>
            </div>
            <div class="pay-badge-card badge-rupay">
              <span class="ru-blue">Ru</span><span class="ru-dark">Pay</span><span class="ru-arrow">❯</span>
            </div>
            <div class="pay-badge-card badge-upi">
              <span class="upi-text">UPI</span>
              <span class="upi-arrows">
                <span class="u-green"></span>
                <span class="u-orange"></span>
              </span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</footer>

<!-- Floating Quick Actions Bar -->
<div class="floating-actions">
  <a href="<?= $phonehtml ?>" class="float-btn float-call" title="Call Now" aria-label="Call <?= $company3 ?> now">
    <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
    <span>Call Now</span>
  </a>
  <a href="<?= $floatingWhatsappLink ?>" class="float-btn float-whatsapp" title="WhatsApp Us" target="_blank"
    rel="noopener" aria-label="Message <?= $company3 ?> on WhatsApp">
    <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
    <span>WhatsApp Us</span>
  </a>
  <button type="button" class="float-btn float-quote" data-bs-toggle="modal" data-bs-target="#qteModal"
    title="Get a Quote" aria-label="Get a Quote">
    <div class="icon-wrap"><i class="bi bi-file-earmark-text"></i></div>
    <span>Get a Quote</span>
  </button>
</div>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('reviews/reviewmodal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
</body>

</html>
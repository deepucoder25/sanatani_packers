<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
   $htmlcontent = "
                 <p class='pm-city-lead-text mb-2'>
                    Relocating within or out of <strong>$city</strong> requires seamless execution and uncompromising care. At <strong>Sanatani Packers and Movers</strong>, we simplify your entire moving journey with certified packing materials, dedicated closed container vehicles, and expert door-to-door handling.
                  </p>
                  <p class='pm-city-sub-text mb-0'>
                    Whether you are moving a 1BHK apartment, a sprawling villa, an entire corporate office, or transporting your precious vehicle, our verified professionals in <strong>$city</strong> ensure 100% damage-free, zero-delay relocation backed by full transit insurance.
                  </p>
   ";

   $htmlcontent1 = "
             <div class='pm-city-classy-card p-4'>
                <div class='d-flex align-items-center gap-2 mb-3'>
                  <div class='pm-title-icon-box'>
                    <i class='bi bi-truck-front-fill'></i>
                  </div>
                  <h3 class='pm-city-section-title-sm mb-0'>What Makes Local Relocation in $city Different?</h3>
                </div>
                <p class='text-pm-muted mb-3'>
                  Every city has its own moving challenges. In <strong>$city</strong>, weather conditions, apartment elevator restrictions, narrow society lanes, and peak traffic hours require meticulous planning. Families and businesses looking for reliable packers and movers prefer structured timing, building permission assistance, and customized packing to avoid moving chaos.
                </p>
              </div>
   ";
   $htmlcontent2 = "
  <!-- Styled Content Wrapper Card matching Map Card design -->
  <div class='pm-map-wrapper-card h-100 d-flex flex-column justify-content-between'>
    <!-- Header Banner -->
    <div class='pm-map-header-bar p-3 p-md-4 d-flex flex-wrap align-items-center justify-content-between gap-2'>
      <div>
        <div class='pm-section-badge mb-1'>
          <i class='bi bi-building-check text-pm-secondary me-1'></i>
          <span>LOCAL SHIFTING HUB</span>
        </div>
        <h4 class='pm-map-title mb-0'>
          What Makes Relocation in <span class='text-pm-secondary'>$city</span> Special?
        </h4>
      </div>

      <div class='d-flex align-items-center gap-2'>
        <span class='pm-map-status-pill'>
          <span class='pm-pulse-dot me-1'></span> Verified Movers
        </span>
      </div>
    </div>

    <!-- Body Content Container -->
    <div class='p-3 p-md-4 flex-grow-1 d-flex flex-column justify-content-between' style='background: var(--white);'>
      <div>
        <p class='text-pm-muted mb-3' style='font-size: 0.93rem; line-height: 1.65;'>
          Every moving requirement in <strong>$city</strong> comes with unique logistics — from navigating busy city traffic and apartment elevator schedules to handling weather-sensitive cargo. We tailor customized shifting plans using heavy-duty bubble wraps, corrugated sheets, and stretch film protection.
        </p>

        <!-- Why Choose Sanatani Packers Section -->
        <div class='pt-3 border-top'>
          <div class='d-flex align-items-center gap-2 mb-2'>
            <div class='pm-title-icon-box' style='width: 32px; height: 32px; font-size: 0.9rem;'>
              <i class='bi bi-shield-lock-fill'></i>
            </div>
            <h5 class='fw-bold text-pm-primary mb-0' style='font-size: 0.98rem;'>Why Sanatani Packers in $city?</h5>
          </div>
          <p class='text-pm-muted small mb-2' style='font-size: 0.86rem; line-height: 1.5;'>
            Professional relocation with certified packing materials, dedicated closed container vehicles, and 100% transit protection.
          </p>

          <!-- Quote Callout -->
          <div class='pm-city-quote-callout p-2.5 rounded-3 mt-2' style='background: rgba(255, 134, 35, 0.05); border-left: 4px solid var(--secondary-color);'>
            <i class='bi bi-quote text-pm-secondary fs-4 me-1'></i>
            <span class='fst-italic text-pm-primary fw-semibold small' style='font-size: 0.85rem;'>
              Transparent pricing, zero hidden charges, and guaranteed on-time delivery across all routes.
            </span>
          </div>
        </div>
      </div>

      <!-- Trust Note at bottom of body -->
      <p class='small text-muted mt-3 mb-0' style='font-size: 0.82rem;'>
        <strong>$company3</strong> provides seamless local &amp; domestic relocation services across all pin codes in <strong>$city</strong>.
      </p>
    </div>

    <!-- Bottom Bar overlay matching map bottom bar -->
    <div class='pm-map-bottom-bar p-3 d-flex flex-wrap align-items-center justify-content-between gap-2'>
      <div class='d-flex align-items-center gap-2 text-white'>
        <i class='bi bi-shield-check text-warning fs-5'></i>
        <span class='small fw-semibold'>100% Damage-Free Shifting Guarantee in <strong>$city</strong></span>
      </div>
      <a href='#' class='btn btn-warning btn-sm rounded-pill px-3 py-1 fw-bold text-dark d-inline-flex align-items-center gap-1 shadow-sm ms-auto' data-bs-toggle='modal' data-bs-target='#qteModal'>
        <i class='bi bi-lightning-charge-fill'></i> Get Free Quote
      </a>
    </div>
  </div>
   ";
} 
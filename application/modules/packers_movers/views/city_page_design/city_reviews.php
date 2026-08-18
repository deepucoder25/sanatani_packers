<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Customer Reviews & Feedback Section -->
<div class="pm-reviews-wrapper mt-5">
  
  <!-- Review Header & Aggregate Rating Score -->
  <div class="pm-reviews-header p-4 rounded-4 mb-4">
    <div class="row align-items-center g-3">
      <div class="col-md-7">
        <div class="pm-section-badge mb-2">
          <i class="bi bi-star-fill text-warning me-1"></i>
          <span>VERIFIED CUSTOMER REVIEWS</span>
        </div>
        <h3 class="pm-reviews-title mb-1">
          Client Feedback in <span class="text-pm-secondary"><?= htmlspecialchars($city) ?></span>
        </h3>
        <p class="text-pm-muted mb-0 small">
          Genuine experiences shared by homeowners and corporate clients across <?= htmlspecialchars($city) ?>.
        </p>
      </div>

      <div class="col-md-5 text-md-end">
        <div class="pm-rating-score-box d-inline-flex align-items-center gap-3 p-3 rounded-3">
          <div class="pm-score-num">4.9</div>
          <div class="pm-score-info text-start">
            <div class="pm-stars text-warning fs-6">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <div class="fw-bold text-pm-primary small">Based on 450+ Moves</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Horizontal Scrollable Review Cards Row -->
  <div class="pm-reviews-scroll-container">
    <div class="d-flex flex-nowrap gap-4 pm-reviews-horizontal-row">
      
      <!-- Review 1 -->
      <div class="pm-review-card-item">
        <div class="pm-review-card-v2 p-4 h-100 d-flex flex-column">
          <!-- Top Header: Avatar + Info + Stars Badge -->
          <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
            <div class="d-flex align-items-center gap-3">
              <div class="pm-avatar-v2 avatar-bg-1">R</div>
              <div>
                <h6 class="mb-0 fw-bold text-pm-primary">Rohit Sharma <i class="bi bi-patch-check-fill text-primary ms-1" title="Verified Move"></i></h6>
                <small class="text-pm-muted"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($city) ?>, India</small>
              </div>
            </div>
            <div class="pm-star-badge">
              <i class="bi bi-star-fill text-warning me-1"></i>5.0
            </div>
          </div>

          <!-- Review Content -->
          <div class="pm-review-body-v2 mb-3">
            <p class="mb-0">"Shifted my flat inside <?= htmlspecialchars($city) ?>. They arrived at 8 AM sharp and finished packing faster than expected. No damage to kitchen items."</p>
          </div>

          <!-- Bottom Footer Tag -->
          <div class="mt-auto pt-2 d-flex align-items-center justify-content-between">
            <span class="pm-tag-v2 tag-blue"><i class="bi bi-house-door-fill me-1"></i> Household Moving</span>
            <small class="text-success fw-bold"><i class="bi bi-check2-circle me-1"></i>Verified Move</small>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="pm-review-card-item">
        <div class="pm-review-card-v2 p-4 h-100 d-flex flex-column">
          <!-- Top Header: Avatar + Info + Stars Badge -->
          <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
            <div class="d-flex align-items-center gap-3">
              <div class="pm-avatar-v2 avatar-bg-2">A</div>
              <div>
                <h6 class="mb-0 fw-bold text-pm-primary">Ananya Gupta <i class="bi bi-patch-check-fill text-primary ms-1" title="Verified Move"></i></h6>
                <small class="text-pm-muted"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($city) ?>, India</small>
              </div>
            </div>
            <div class="pm-star-badge">
              <i class="bi bi-star-fill text-warning me-1"></i>5.0
            </div>
          </div>

          <!-- Review Content -->
          <div class="pm-review-body-v2 mb-3">
            <p class="mb-0">"We moved office equipment during the weekend. The team coordinated with building security and handled everything properly. Great experience!"</p>
          </div>

          <!-- Bottom Footer Tag -->
          <div class="mt-auto pt-2 d-flex align-items-center justify-content-between">
            <span class="pm-tag-v2 tag-purple"><i class="bi bi-briefcase-fill me-1"></i> Office Relocation</span>
            <small class="text-success fw-bold"><i class="bi bi-check2-circle me-1"></i>Verified Move</small>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="pm-review-card-item">
        <div class="pm-review-card-v2 p-4 h-100 d-flex flex-column">
          <!-- Top Header: Avatar + Info + Stars Badge -->
          <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
            <div class="d-flex align-items-center gap-3">
              <div class="pm-avatar-v2 avatar-bg-3">S</div>
              <div>
                <h6 class="mb-0 fw-bold text-pm-primary">Sandeep Verma <i class="bi bi-patch-check-fill text-primary ms-1" title="Verified Move"></i></h6>
                <small class="text-pm-muted"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($city) ?>, India</small>
              </div>
            </div>
            <div class="pm-star-badge">
              <i class="bi bi-star-fill text-warning me-1"></i>4.8
            </div>
          </div>

          <!-- Review Content -->
          <div class="pm-review-body-v2 mb-3">
            <p class="mb-0">"Booked them after searching Packers and Movers Near Me in <?= htmlspecialchars($city) ?>. Pricing stayed exactly as discussed earlier. That rarely happens these days."</p>
          </div>

          <!-- Bottom Footer Tag -->
          <div class="mt-auto pt-2 d-flex align-items-center justify-content-between">
            <span class="pm-tag-v2 tag-green"><i class="bi bi-truck me-1"></i> Local Relocation</span>
            <small class="text-success fw-bold"><i class="bi bi-check2-circle me-1"></i>Verified Move</small>
          </div>
        </div>
      </div>

      <!-- Review 4 -->
      <div class="pm-review-card-item">
        <div class="pm-review-card-v2 p-4 h-100 d-flex flex-column">
          <!-- Top Header: Avatar + Info + Stars Badge -->
          <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
            <div class="d-flex align-items-center gap-3">
              <div class="pm-avatar-v2 avatar-bg-4">P</div>
              <div>
                <h6 class="mb-0 fw-bold text-pm-primary">Priya Nair <i class="bi bi-patch-check-fill text-primary ms-1" title="Verified Move"></i></h6>
                <small class="text-pm-muted"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($city) ?>, India</small>
              </div>
            </div>
            <div class="pm-star-badge">
              <i class="bi bi-star-fill text-warning me-1"></i>5.0
            </div>
          </div>

          <!-- Review Content -->
          <div class="pm-review-body-v2 mb-3">
            <p class="mb-0">"Helpful staff. My parents were stressed about furniture scratches, but packing quality was genuinely good. Highly recommended!"</p>
          </div>

          <!-- Bottom Footer Tag -->
          <div class="mt-auto pt-2 d-flex align-items-center justify-content-between">
            <span class="pm-tag-v2 tag-orange"><i class="bi bi-box-seam me-1"></i> Vehicle Transport</span>
            <small class="text-success fw-bold"><i class="bi bi-check2-circle me-1"></i>Verified Move</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
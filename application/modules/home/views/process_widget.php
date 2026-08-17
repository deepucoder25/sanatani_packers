<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="process-widget-section py-5">
  <div class="container">
    
    <!-- Section Header -->
    <div class="services-header text-center mb-4 mb-lg-5">
      <div class="services-eyebrow-tag mb-1">
        HOW IT WORKS
      </div>
      <h2 class="services-main-title">
        Simple Steps For A Smooth Move
      </h2>
    </div>

    <!-- 5 Process Steps Row -->
    <div class="process-steps-wrapper position-relative mb-5">
      <div class="process-line d-none d-lg-block"></div>
      
      <div class="row g-4 justify-content-center text-center">
        <!-- Step 1 -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="process-step-card process-step-1">
            <div class="process-icon-circle mx-auto mb-3 position-relative">
              <i class="bi bi-chat-dots-fill"></i>
              <span class="step-num-badge">01</span>
            </div>
            <h3 class="step-title">Enquiry</h3>
            <p class="step-desc">Share your requirement with us.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="process-step-card process-step-2">
            <div class="process-icon-circle mx-auto mb-3 position-relative">
              <i class="bi bi-clipboard-data-fill"></i>
              <span class="step-num-badge">02</span>
            </div>
            <h3 class="step-title">Survey &amp; Estimate</h3>
            <p class="step-desc">We analyze and provide the best quote.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="process-step-card process-step-3">
            <div class="process-icon-circle mx-auto mb-3 position-relative">
              <i class="bi bi-box-seam-fill"></i>
              <span class="step-num-badge">03</span>
            </div>
            <h3 class="step-title">Packing</h3>
            <p class="step-desc">Professionally packing your belongings.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="process-step-card process-step-4">
            <div class="process-icon-circle mx-auto mb-3 position-relative">
              <i class="bi bi-truck"></i>
              <span class="step-num-badge">04</span>
            </div>
            <h3 class="step-title">Transportation</h3>
            <p class="step-desc">Safe loading and secure transportation.</p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="process-step-card process-step-5">
            <div class="process-icon-circle mx-auto mb-3 position-relative">
              <i class="bi bi-house-check-fill"></i>
              <span class="step-num-badge">05</span>
            </div>
            <h3 class="step-title">Delivery</h3>
            <p class="step-desc">On time delivery and unpacking.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bottom Dark Navy Counter Bar -->
  <div class="process-stats-bar mt-4">
    <div class="container">
      <div class="row g-4 justify-content-center text-center align-items-center" id="counterRow">
        
        <!-- Stat 1: Happy Customers -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="stat-item-box d-flex align-items-center justify-content-center gap-3">
            <div class="stat-icon-circle">
              <i class="bi bi-emoji-smile-fill"></i>
            </div>
            <div class="stat-text-wrap text-start">
              <div class="stat-number-wrap">
                <span class="counter-num" data-target="<?= $happyClients ?>">0</span><span class="stat-plus">+</span>
              </div>
              <span class="stat-label">Happy Customers</span>
            </div>
          </div>
        </div>

        <!-- Stat 2: Years Experience -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="stat-item-box d-flex align-items-center justify-content-center gap-3">
            <div class="stat-icon-circle">
              <i class="bi bi-award-fill"></i>
            </div>
            <div class="stat-text-wrap text-start">
              <div class="stat-number-wrap">
                <span class="counter-num" data-target="<?= $yearsExperience ?>">0</span><span class="stat-plus">+</span>
              </div>
              <span class="stat-label">Years Experience</span>
            </div>
          </div>
        </div>

        <!-- Stat 3: Successful Moves -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="stat-item-box d-flex align-items-center justify-content-center gap-3">
            <div class="stat-icon-circle">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="stat-text-wrap text-start">
              <div class="stat-number-wrap">
                <span class="counter-num" data-target="<?= $successfullMoves ?>">0</span><span class="stat-plus">+</span>
              </div>
              <span class="stat-label">Successful Moves</span>
            </div>
          </div>
        </div>

        <!-- Stat 4: Secure Shifting -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="stat-item-box d-flex align-items-center justify-content-center gap-3">
            <div class="stat-icon-circle">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="stat-text-wrap text-start">
              <div class="stat-number-wrap">
                <span class="counter-num" data-target="<?= $secureShifting ?>">0</span><span class="stat-plus">%</span>
              </div>
              <span class="stat-label">Secure Shifting</span>
            </div>
          </div>
        </div>

        <!-- Stat 5: States Covered -->
        <div class="col-lg-2-4 col-md-4 col-6">
          <div class="stat-item-box d-flex align-items-center justify-content-center gap-3">
            <div class="stat-icon-circle">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="stat-text-wrap text-start">
              <div class="stat-number-wrap">
                <span class="counter-num" data-target="<?= $statesCovered ?>">0</span><span class="stat-plus">+</span>
              </div>
              <span class="stat-label">States Covered</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Animated Counter Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const counterRow = document.getElementById("counterRow");
  if (!counterRow) return;

  let animated = false;

  const animateCounters = () => {
    const counters = counterRow.querySelectorAll(".counter-num");
    counters.forEach(counter => {
      const rawTarget = counter.getAttribute("data-target") || "0";
      const target = parseInt(rawTarget.replace(/[^0-9]/g, '')) || 0;
      const duration = 1800; // ms
      const stepTime = 20;
      const steps = duration / stepTime;
      const increment = target / steps;
      let current = 0;

      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          counter.innerText = target;
          clearInterval(timer);
        } else {
          counter.innerText = Math.ceil(current);
        }
      }, stepTime);
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !animated) {
        animated = true;
        animateCounters();
      }
    });
  }, { threshold: 0.3 });

  observer.observe(counterRow);
});
</script>

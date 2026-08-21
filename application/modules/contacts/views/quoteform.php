<div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
  <form id="quoteform" class="ajax-form hero-quote-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
    
    <!-- Top Header Bar -->
    <div class="quote-card-top-bar d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
      <div class="quote-card-title-wrap d-flex align-items-center gap-2 flex-wrap">
        <span class="quote-card-badge"><i class="bi bi-lightning-charge-fill"></i> INSTANT ESTIMATE</span>
        <h3 class="quote-card-main-title" itemprop="name">GET YOUR FREE MOVING QUOTE</h3>
      </div>
      <div class="quote-card-subtext d-none d-md-block">
        <i class="bi bi-shield-check text-warning"></i> Quick Estimate &bull; 100% Free &bull; No Spam
      </div>
    </div>

    <!-- Inputs & Action Row using Bootstrap Grid -->
    <div class="row g-2 align-items-center">
      <!-- Input 1: Name -->
      <div class="col-lg-2 col-md-4 col-6">
        <div class="input-wrap-custom">
          <i class="bi bi-person input-icon-custom"></i>
          <input type="text" name="name" class="form-control-custom" placeholder="Your Name" required>
        </div>
      </div>

      <!-- Input 2: Phone -->
      <div class="col-lg-2 col-md-4 col-6">
        <div class="input-wrap-custom">
          <i class="bi bi-telephone input-icon-custom"></i>
          <input type="tel" name="phone" class="form-control-custom" placeholder="Phone Number" required pattern="[0-9]{10}">
        </div>
      </div>

      <!-- Input 3: Select Service -->
      <div class="col-lg-2 col-md-4 col-12">
        <div class="input-wrap-custom select-wrap-custom">
          <i class="bi bi-box-seam input-icon-custom"></i>
          <select name="mtype" class="form-select-custom" required>
            <option value="" disabled selected>Select Service</option>
            <option value="Packers & Movers">Packers &amp; Movers</option>
            <option value="Household Shifting">Household Shifting</option>
            <option value="Office Relocation">Office Relocation</option>
            <option value="Local & Domestic Moving">Local &amp; Domestic Moving</option>
            <option value="Transportation Services">Transportation Services</option>
            <option value="Goods & Logistics">Goods &amp; Logistics</option>
          </select>
          <i class="bi bi-chevron-down select-caret-icon"></i>
        </div>
      </div>

      <!-- Input 4: Moving From -->
      <div class="col-lg-2 col-md-4 col-6">
        <div class="input-wrap-custom">
          <i class="bi bi-geo-alt input-icon-custom"></i>
          <input type="text" name="mfrom" class="form-control-custom" placeholder="Moving From" required>
        </div>
      </div>

      <!-- Input 5: Moving To -->
      <div class="col-lg-2 col-md-4 col-6">
        <div class="input-wrap-custom">
          <i class="bi bi-geo-alt-fill input-icon-custom"></i>
          <input type="text" name="mto" class="form-control-custom" placeholder="Moving To" required>
        </div>
      </div>

      <!-- Hidden Email -->
      <input type="hidden" name="email" value="">

      <!-- Submit Button -->
      <div class="col-lg-2 col-md-4 col-12">
        <button type="submit" class="btn-submit-custom w-100">
          <span>GET QUOTE NOW</span>
          <i class="bi bi-arrow-right submit-btn-icon-desktop"></i>
        </button>
      </div>
    </div>

    <!-- AJAX Response Output -->
    <div id="quoteformresults" class="quote-form-results-box mt-2"></div>
  </form>
</div>
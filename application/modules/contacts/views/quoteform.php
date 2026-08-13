<div class="hero-quote-bar-container" itemscope itemtype="https://schema.org/QuoteAction">
  <form id="quoteform" class="ajax-form hero-quote-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
    
    <div class="quote-bar-inner">
      <!-- Title Block on Left -->
      <div class="quote-bar-title-box">
        <span class="quote-title-small">REQUEST</span>
        <h3 class="quote-title-large" itemprop="name">A <span class="orange-highlight">FREE QUOTE</span></h3>
      </div>

      <!-- Inputs & Action Group -->
      <div class="quote-bar-inputs-wrap">
        <!-- Input 1: Your Name -->
        <div class="quote-input-box">
          <i class="bi bi-person quote-input-icon"></i>
          <input type="text" name="name" class="quote-input-field" placeholder="Your Name" required>
        </div>

        <!-- Input 2: Your Phone Number -->
        <div class="quote-input-box">
          <i class="bi bi-telephone quote-input-icon"></i>
          <input type="tel" name="phone" class="quote-input-field" placeholder="Your Phone Number" required pattern="[0-9]{10}">
        </div>

        <!-- Input 3: Select Service -->
        <div class="quote-input-box quote-select-box">
          <i class="bi bi-box-seam quote-input-icon"></i>
          <select name="mtype" class="quote-select-field">
            <option value="" disabled selected>Select Service</option>
            <option value="Household Relocation">Household Relocation</option>
            <option value="Office Relocation">Office Relocation</option>
            <option value="Local & Domestic Moving">Local &amp; Domestic Moving</option>
            <option value="Car & Bike Transportation">Car &amp; Bike Shifting</option>
            <option value="Goods & Logistics">Goods &amp; Logistics</option>
          </select>
          <i class="bi bi-chevron-down select-caret-icon"></i>
        </div>

        <!-- Hidden default inputs -->
        <input type="hidden" name="mfrom" value="<?= @$city ? $city : 'Deoghar' ?>">
        <input type="hidden" name="mto" value="">
        <input type="hidden" name="email" value="">

        <!-- Submit Button -->
        <button type="submit" class="quote-submit-btn">
          <span>SUBMIT NOW</span>
          <span class="submit-arrow-circle"><i class="bi bi-arrow-right"></i></span>
        </button>
      </div>
    </div>

    <!-- AJAX Response Output -->
    <div id="quoteformresults" class="quote-form-results-box mt-2"></div>
  </form>
</div>
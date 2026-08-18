<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Unique FAQ Accordion Section -->
<div class="pm-faq-wrapper mt-5">
  <!-- FAQ Header Banner -->
  <div class="pm-faq-header p-4 rounded-4 mb-4">
    <div class="pm-section-badge mb-2">
      <i class="bi bi-question-circle-fill text-pm-secondary me-1"></i>
      <span>HELP &amp; SUPPORT</span>
    </div>
    <h3 class="pm-faq-section-title mb-1">
      Frequently Asked Questions — <span class="text-pm-secondary"><?= htmlspecialchars($city) ?></span> Relocation
    </h3>
    <p class="text-pm-muted mb-0 small">
      Everything you need to know about shifting rates, insurance, packing materials, and delivery timing in <?= htmlspecialchars($city) ?>.
    </p>
  </div>

  <!-- Accordion List -->
  <div class="pm-faq-accordion" id="pmCityFaqAccordion">
    <?php
    $faqs = [
      ["q" => "How early should I book shifting services in $city?",
       "a" => "We recommend booking at least 3–5 days in advance for local shifting in $city, and 7 days prior for intercity domestic moves to secure preferred truck slots and packing teams."],
      ["q" => "Do you provide premium packing materials?",
       "a" => "Yes! We use 5-layer heavy duty packing materials including bubble wrap, corrugated sheets, stretch film, waterproof plastic rolls, and heavy carton boxes for zero-damage transport."],
      ["q" => "Can I move only a few household items or single vehicle?",
       "a" => "Absolutely. We offer customized part-load (shared truck) transportation as well as single bike/car moving services within and out of $city."],
      ["q" => "Are my household goods insured during relocation?",
       "a" => "Yes, we provide 100% Transit Insurance coverage option covering all unpredicted transit damages, accidents, or risks for complete peace of mind."]
    ];

    foreach ($faqs as $i => $faq):
      $num = sprintf("%02d", $i + 1);
      $is_first = ($i === 0);
    ?>
    <div class="pm-faq-card mb-3">
      <button class="pm-faq-btn <?= $is_first ? '' : 'collapsed' ?>" type="button"
              data-bs-toggle="collapse"
              data-bs-target="#pmFaqCol<?= $i ?>"
              aria-expanded="<?= $is_first ? 'true' : 'false' ?>">
        <span class="pm-faq-num me-3"><?= $num ?></span>
        <span class="pm-faq-q-text flex-grow-1 text-start me-2"><?= htmlspecialchars($faq['q']) ?></span>
        <span class="pm-faq-toggle-icon">
          <i class="bi bi-chevron-down"></i>
        </span>
      </button>
      <div id="pmFaqCol<?= $i ?>" class="collapse <?= $is_first ? 'show' : '' ?>" data-bs-parent="#pmCityFaqAccordion">
        <div class="pm-faq-answer p-4">
          <div class="d-flex align-items-start gap-2">
            <i class="bi bi-shield-check text-pm-secondary fs-5 flex-shrink-0 mt-1"></i>
            <p class="mb-0 text-pm-dark leading-relaxed"><?= htmlspecialchars($faq['a']) ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
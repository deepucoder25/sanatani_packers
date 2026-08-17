<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$phoneNum = isset($phone) ? $phone : '+91 9576135675';
$phoneUrl = isset($phonehtml) ? $phonehtml : 'tel:+919576135675';
$emailAddr = isset($mail) ? $mail : 'sanatanipackersmovers@gmail.com';

$faqs = [
    [
        'question' => '1. What services do you provide?',
        'answer' => 'We offer household shifting, office relocation, bike & car transportation, warehousing & storage, pet relocation, and local/domestic moving across India.',
        'icon' => 'bi-file-earmark-check-fill'
    ],
    [
        'question' => '2. How do I get a quote for my move?',
        'answer' => 'You can instantly request a free quote by filling out our online form or contacting our customer support team directly on call or WhatsApp.',
        'icon' => 'bi-box-seam-fill'
    ],
    [
        'question' => '3. How far in advance should I book?',
        'answer' => 'We recommend booking at least 3-7 days in advance to ensure slot availability, hassle-free packing material allocation, and smooth scheduling.',
        'icon' => 'bi-calendar-check-fill'
    ],
    [
        'question' => '4. Are my goods and vehicles insured?',
        'answer' => 'Yes, we offer complete transit insurance options for household goods and vehicle transport to ensure 100% safety and financial protection.',
        'icon' => 'bi-shield-check'
    ],
    [
        'question' => '5. Do you provide door-to-door service?',
        'answer' => 'Yes, we provide complete door-to-door pickup, professional packing, secure transportation, unloading, and unpacking services at your new destination.',
        'icon' => 'bi-geo-alt-fill'
    ],
    [
        'question' => '6. Can I track my shipment status?',
        'answer' => 'Yes, once your shipment is dispatched, our team provides real-time updates and tracking assistance throughout the journey.',
        'icon' => 'bi-headset'
    ],
    [
        'question' => '7. What payment methods do you accept?',
        'answer' => 'We accept all convenient payment modes including UPI, Google Pay, PhonePe, Net Banking, Credit/Debit cards, and Cash on delivery.',
        'icon' => 'bi-credit-card-2-front-fill'
    ],
    [
        'question' => '8. What if something gets damaged during transit?',
        'answer' => 'In the rare event of transit damage, our dedicated customer support team assists you with a fast, transparent claim resolution process.',
        'icon' => 'bi-chat-left-text-fill'
    ]
];
?>

<section class="faq-widget-section py-5">
  <div class="container position-relative">
    
    <!-- Section Header -->
    <div class="services-header text-center mb-4 mb-lg-5">
      <div class="services-eyebrow-tag mb-1">
        FAQ
      </div>
      <h2 class="services-main-title mb-2">
        Frequently Asked Questions
      </h2>
      <p class="services-subtext mb-0">
        Find answers to common questions about our moving and transportation services.
      </p>
    </div>

    <!-- FAQ Accordion Grid -->
    <div class="row g-3 g-lg-4">
      <?php foreach ($faqs as $index => $faq): ?>
        <div class="col-lg-6 d-flex">
          <div class="faq-accordion-card w-100">
            <div class="faq-card-header d-flex align-items-center collapsed" 
                 data-bs-toggle="collapse" 
                 data-bs-target="#faq-item-<?= $index ?>" 
                 aria-expanded="false" 
                 role="button">
              
              <div class="faq-icon-circle me-3">
                <i class="bi <?= $faq['icon'] ?>"></i>
              </div>

              <h3 class="faq-question-text flex-grow-1 mb-0">
                <?= htmlspecialchars($faq['question']) ?>
              </h3>

              <div class="faq-toggle-icon-wrap ms-2">
                <i class="bi bi-plus-lg icon-plus"></i>
                <i class="bi bi-dash-lg icon-minus"></i>
              </div>
            </div>

            <div id="faq-item-<?= $index ?>" class="collapse" data-bs-parent="">
              <div class="faq-card-body">
                <p class="faq-answer-text mb-0">
                  <?= htmlspecialchars($faq['answer']) ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => "Find answers to frequently asked questions regarding packing materials, shifting costs, transit insurance, and relocation timelines.",
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<?php
// FAQ Data Schema Definition
$faqList = [
    [
        'question' => "How do $company3 estimate home shifting charges?",
        'answer' => "Relocation costs are calculated transparently based on total inventory volume, packing materials required (5-layer heavy protection), distance between source and destination, vehicle container size, and optional add-on services like warehouse storage or vehicle transport. We provide a 100% upfront quote with zero hidden charges."
    ],
    [
        'question' => "What materials are included in your 5-Layer Protective Packing?",
        'answer' => "Our 5-layer protective packing includes heavy-duty bubble wraps, corrugated sheets, high-stretch poly films, edge-guard corner protectors, and custom wooden crating for delicate items like glass, TV screens, and artwork."
    ],
    [
        'question' => "How does live GPS fleet tracking work during transit?",
        'answer' => "All our container trucks are equipped with real-time GPS tracking devices. Once your goods are dispatched, you receive a dedicated tracking link or live updates from your dedicated move coordinator so you can monitor your consignment movement nationwide 24/7."
    ],
    [
        'question' => "Are your relocation bills IBA approved for employee claim reimbursement?",
        'answer' => "Yes, $company3 provides 100% official IBA (Indian Banks' Association) approved relocation bills complete with GST invoice, consigner consignment copy, itemized packing list, and lorry receipt (LR) accepted by all government departments, PSU banks, and private corporate companies for full reimbursement."
    ],
    [
        'question' => "Is transit insurance necessary, and what does it cover?",
        'answer' => "Transit insurance protects your goods against unforeseen accidents, fire, natural disasters, or theft during long-distance transit. We offer full comprehensive transit risk coverage (usually 3% of declared consignment value) with hassle-free claims assistance."
    ],
    [
        'question' => "How far in advance should I book my relocation?",
        'answer' => "We recommend booking your home or office relocation at least 3 to 7 days in advance to ensure preferred shifting slots and truck availability. However, we also cater to urgent same-day or 24-hour express shifting requests depending on truck fleet availability."
    ],
    [
        'question' => "Do you provide car and bike transport services across India?",
        'answer' => "Yes, we operate specialized car carrier trailers and covered hydraulic vehicle container trucks with safety wheel-locking systems to transport cars and two-wheelers scratch-free across all major cities in India."
    ],
    [
        'question' => "What items are prohibited during household relocation?",
        'answer' => "For safety and legal compliance, we cannot transport hazardous materials such as petrol, diesel, gas cylinders, fireworks, acids, corrosive chemicals, perishable food items, and contraband items. Cash, jewelry, and legal documents should be personally carried by the client."
    ]
];

// Generate Schema.org JSON-LD FAQPage
$schemaFaqs = [];
foreach ($faqList as $faq) {
    $schemaFaqs[] = [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer']
        ]
    ];
}
$schemaJsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $schemaFaqs
];
?>

<!-- Schema.org FAQPage Structured Data for SEO -->
<script type="application/ld+json">
<?= json_encode($schemaJsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- 2. FAQ Main Section -->
<section class="py-5 bg-about-light">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="about-eyebrow-pill mb-2">
                <i class="bi bi-question-circle-fill text-about-secondary"></i>
                <span>GOT QUESTIONS? WE HAVE ANSWERS</span>
            </div>
            <h2 class="fw-black text-about-primary display-6 mb-2">Everything You Need to Know</h2>
            <p class="text-about-muted">Find quick answers about packing, shifting charges, GPS tracking, IBA bills & insurance.</p>


        </div>

        <div class="row g-4">
            <!-- Left Column: Accordion FAQ List -->
            <div class="col-lg-8">
                <div class="accordion faq-accordion-v2" id="faqAccordionMain">
                    <?php foreach ($faqList as $index => $faq): 
                        $collapseId = "faqCollapse" . ($index + 1);
                        $headingId = "faqHeading" . ($index + 1);
                        $isFirst = ($index === 0);
                    ?>
                        <div class="accordion-item faq-item-card">
                            <h3 class="accordion-header" id="<?= $headingId ?>">
                                <button class="accordion-button <?= $isFirst ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                                    <i class="bi bi-patch-question-fill text-about-secondary fs-5"></i>
                                    <span class="faq-question-text"><?= $faq['question'] ?></span>
                                </button>
                            </h3>
                            <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" aria-labelledby="<?= $headingId ?>" data-bs-parent="#faqAccordionMain">
                                <div class="accordion-body">
                                    <?= $faq['answer'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Column: Support Sidebar & Instant Help -->
            <div class="col-lg-4">
                <div class="faq-sidebar-sticky">
                    <!-- Still Have Questions Help Card -->
                    <div class="faq-help-card-v2 text-center mb-4">
                        <div class="faq-help-icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="fw-black text-white mb-2 fs-5">Still Have Questions?</h4>
                        <p class="text-white opacity-90 fw-medium fs-7 mb-4">Can't find the answer you're looking for? Our friendly support team is here 24/7 to help you.</p>

                        <div class="d-grid gap-3">
                            <a href="<?= $phonehtml ?>" class="btn btn-about-quote justify-content-center d-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call Us Now</span>
                            </a>
                            <a href="#" class="btn btn-outline-light fw-bold py-2.5 rounded-3 d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator-fill text-about-secondary"></i>
                                <span>Get Free Shifting Quote</span>
                            </a>
                        </div>
                    </div>

                    <!-- Trust Seal Box -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white border">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-shield-check text-about-secondary fs-1"></i>
                            <div>
                                <h6 class="fw-bold text-about-primary mb-1">100% Safe Shifting</h6>
                                <small class="text-about-muted">IBA Approved & ISO 9001:2015 Certified Movers.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Call To Action Banner -->
<section class="about-cta-v2 py-5">
    <div class="container">
        <div class="cta-box-v2 text-white shadow-lg">
            <div class="cta-glow-v2"></div>
            <div class="row align-items-center g-4 position-relative">
                <div class="col-lg-8">
                    <h3 class="display-6 fw-black text-white mb-2">Book Safe & Stress-Free Shifting Today!</h3>
                    <p class="text-white opacity-90 fw-medium mb-0 fs-6">Get an instant free cost estimate with 0% hidden charges and guaranteed zero-damage delivery across India.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#" class="btn btn-about-quote d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>GET FREE QUOTE NOW</span>
                        <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

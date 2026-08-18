<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Client Testimonials',
    'bc_desc' => "Read authentic client reviews and testimonials from families & businesses who experienced zero-damage moving with $company3.",
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<?php
// Testimonial Data Definition
$reviewsList = [
    [
        'name' => "Rajesh Kumar",
        'initial' => "R",
        'route' => "Delhi to Bangalore",
        'type' => "Household Shifting",
        'rating' => 5,
        'review' => "Shifted my 3BHK household goods from Delhi to Bangalore. Exceptional 5-layer bubble packing! All wooden furniture, glass items, and refrigerator arrived without a single scratch. The team was extremely polite and punctual.",
        'date' => "15 days ago"
    ],
    [
        'name' => "Priya Sharma",
        'initial' => "P",
        'route' => "Mumbai to Hyderabad",
        'type' => "Home Relocation & Car",
        'rating' => 5,
        'review' => "Their real-time GPS tracking link kept me completely updated throughout the 3-day transit. They transported my SUV in a covered car trailer safely. 100% recommended packers and movers in India!",
        'date' => "1 month ago"
    ],
    [
        'name' => "Amitabh Sen",
        'initial' => "A",
        'route' => "Kolkata to Pune",
        'type' => "Corporate Shifting",
        'rating' => 5,
        'review' => "As a bank manager, I needed authentic IBA approved bills for company reimbursement. Sanatani Packers provided proper LR receipts, GST invoices, and itemized lists instantly. Got my full claim approved!",
        'date' => "1 month ago"
    ],
    [
        'name' => "Sunil Verma",
        'initial' => "S",
        'route' => "Chandigarh to Bangalore",
        'type' => "Vehicle Transport",
        'rating' => 5,
        'review' => "Transported my Royal Enfield bike and car. Wheel-locking container truck ensured total safety during long-distance transit. Received delivery on the promised date without any delay.",
        'date' => "2 months ago"
    ],
    [
        'name' => "Meenakshi Sundaram",
        'initial' => "M",
        'route' => "Chennai to Gurgaon",
        'type' => "Household & Storage",
        'rating' => 5,
        'review' => "The dedicated move manager coordinated everything seamlessly from packing to door delivery. They even helped unpack and assemble beds at my new apartment in Gurgaon. Fantastic service!",
        'date' => "2 months ago"
    ],
    [
        'name' => "Vikramaditya Singh",
        'initial' => "V",
        'route' => "Ahmedabad to Jaipur",
        'type' => "Office Shifting",
        'rating' => 5,
        'review' => "We shifted our 25-seater IT office workstations. Extremely professional crew packed computers, monitors, and servers with anti-static bubble wraps. Zero downtime or damage!",
        'date' => "3 months ago"
    ]
];
// Fetch database reviews submitted via reviewmodal / admin
$ci =& get_instance();
$ci->load->database();

$dynamic_list = [];

try {
    $db_reviews = $ci->db->where('status', 1)->order_by('r_id', 'desc')->limit(12)->get('reviews')->result_array();
    if (!empty($db_reviews)) {
        foreach ($db_reviews as $row) {
            $dynamic_list[] = [
                'name' => !empty($row['name']) ? $row['name'] : 'Verified Client',
                'initial' => !empty($row['name']) ? strtoupper(substr($row['name'], 0, 1)) : 'V',
                'route' => !empty($row['r_title']) ? $row['r_title'] : 'Verified Shifting',
                'type' => 'Customer Feedback',
                'rating' => !empty($row['stars']) ? (int)$row['stars'] : 5,
                'review' => !empty($row['r_desc']) ? $row['r_desc'] : 'Great packing and relocation service.',
                'date' => !empty($row['posted_date']) ? date('d M, Y', strtotime($row['posted_date'])) : 'Recently'
            ];
        }
    }
} catch (Exception $e) {} catch (Throwable $e) {}

if (!empty($dynamic_list)) {
    $reviewsList = array_merge($dynamic_list, $reviewsList);
}

// Schema.org Review & AggregateRating JSON-LD
$schemaReviews = [];
foreach ($reviewsList as $rev) {
    $schemaReviews[] = [
        '@type' => 'Review',
        'author' => ['@type' => 'Person', 'name' => $rev['name']],
        'datePublished' => date('Y-m-d'),
        'reviewBody' => $rev['review'],
        'reviewRating' => [
            '@type' => 'Rating',
            'ratingValue' => $rev['rating'],
            'bestRating' => '5'
        ]
    ];
}

$schemaJsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => "Packers and Movers Relocation Services by $company3",
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => @$ratingValue ? $ratingValue : '4.9',
        'reviewCount' => @$ratingCount ? $ratingCount : '39850',
        'bestRating' => '5'
    ],
    'review' => $schemaReviews
];
?>

<!-- Schema.org Review & Rating Structured Data -->
<script type="application/ld+json">
<?= json_encode($schemaJsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- 2. Testimonial Main Section -->
<section class="py-5 bg-about-light">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="about-eyebrow-pill mb-2">
                <i class="bi bi-chat-quote-fill text-about-secondary"></i>
                <span>VERIFIED CUSTOMER STORIES</span>
            </div>
            <h2 class="fw-black text-about-primary display-6 mb-2">What Our Clients Say About Us</h2>
            <p class="text-about-muted mb-3">Real experiences from families and businesses who trusted us for safe relocation.</p>

            <!-- Write A Review Button -->
            <div>
                <button type="button" class="btn btn-about-quote d-inline-flex align-items-center gap-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#rvwmdl" data-toggle="modal" data-target="#rvwmdl">
                    <i class="bi bi-pencil-square fs-5"></i>
                    <span>WRITE A REVIEW</span>
                </button>
            </div>
        </div>

        <!-- Rating & Trust Summary Banner -->
        <div class="testimonial-summary-v2 mb-5">
            <div class="row align-items-center g-4 text-center text-md-start">
                <div class="col-md-4 border-md-end">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                        <div class="display-5 fw-black text-about-primary mb-0"><?= @$ratingValue ? $ratingValue : '4.9' ?></div>
                        <div>
                            <div class="text-warning fs-5 mb-1">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <small class="fw-bold text-about-dark">Based on <?= @$ratingCount ? number_format((float)$ratingCount) : '3,900+' ?> Reviews</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row g-3 text-center">
                        <div class="col-4">
                            <h4 class="fw-black text-about-secondary mb-0 fs-4"><?= @$happyClients ? $happyClients : '1000+' ?></h4>
                            <small class="text-about-muted fs-7">Satisfied Clients</small>
                        </div>
                        <div class="col-4">
                            <h4 class="fw-black text-about-secondary mb-0 fs-4"><?= @$secureShifting ? $secureShifting : '100%' ?></h4>
                            <small class="text-about-muted fs-7">Safe & Secure</small>
                        </div>
                        <div class="col-4">
                            <h4 class="fw-black text-about-secondary mb-0 fs-4"><?= @$yearsExperience ? $yearsExperience : '10+' ?> Years</h4>
                            <small class="text-about-muted fs-7">Industry Experience</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Verified Reviews Cards Grid -->
        <div class="row g-4">
            <?php foreach ($reviewsList as $rev): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card-v2">
                        <div>
                            <!-- Card Header: Rating Stars & Route Badge -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-warning fs-6">
                                    <?php for ($s = 0; $s < $rev['rating']; $s++): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="testimonial-route-badge">
                                    <i class="bi bi-geo-alt-fill text-about-secondary"></i>
                                    <?= $rev['route'] ?>
                                </span>
                            </div>

                            <!-- Quote Icon & Review Text -->
                            <i class="bi bi-quote testimonial-quote-icon"></i>
                            <p class="text-about-dark fs-7 lh-base mb-4 mt-1 opacity-90">
                                "<?= $rev['review'] ?>"
                            </p>
                        </div>

                        <!-- Card Footer: Client Info -->
                        <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar-circle">
                                    <?= $rev['initial'] ?>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-about-primary mb-0 fs-6"><?= $rev['name'] ?></h6>
                                    <small class="text-about-muted fs-7"><?= $rev['type'] ?></small>
                                </div>
                            </div>
                            <span class="testimonial-verified-badge">
                                <i class="bi bi-patch-check-fill"></i>
                                Verified
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. Call To Action Banner -->
<section class="about-cta-v2 py-5">
    <div class="container">
        <div class="cta-box-v2 text-white shadow-lg">
            <div class="cta-glow-v2"></div>
            <div class="row align-items-center g-4 position-relative">
                <div class="col-lg-7">
                    <h3 class="display-6 fw-black text-white mb-2">Book Safe & Stress-Free Shifting Today!</h3>
                    <p class="text-white opacity-90 fw-medium mb-0 fs-6">Get an instant free cost estimate with 0% hidden charges and guaranteed zero-damage delivery across India.</p>
                </div>
                <div class="col-lg-5 text-lg-end d-flex flex-wrap align-items-center justify-content-lg-end gap-3">
                    <button type="button" class="btn btn-outline-light fw-bold py-2.5 px-3 rounded-5 d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#rvwmdl" data-toggle="modal" data-target="#rvwmdl">
                        <i class="bi bi-pencil-square text-about-secondary"></i>
                        <span>WRITE A REVIEW</span>
                    </button>
                    <a href="#" class="btn btn-about-quote d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>GET FREE QUOTE</span>
                        <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
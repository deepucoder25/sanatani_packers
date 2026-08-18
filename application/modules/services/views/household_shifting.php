<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Household Shifting Services',
    'bc_desc' => "Hassle-free home relocation services with premium bubble packing, furniture dismantling, safe transport & unpacking setup.",
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Household Shifting']
    ]
]);
?>

<!-- Schema.org Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Household Shifting Services | <?= $company3 ?>",
  "serviceType": "Residential Moving Services",
  "provider": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  },
  "areaServed": "India",
  "description": "Safe residential home relocation services for 1 BHK, 2 BHK, 3 BHK apartments & villas with zero-damage guarantee."
}
</script>

<!-- 2. Hero Showcase Section -->
<section class="trans-hero-section py-5">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                <div class="trans-hero-badge mb-3">
                    <i class="bi bi-house-heart-fill fs-6 text-trans-secondary"></i>
                    <span>DOOR-TO-DOOR RELOCATION &bull; ZERO DAMAGE</span>
                </div>

                <h1 class="trans-fw-black text-trans-primary mb-3 lh-sm">
                    Stress-Free Household Shifting <span class="text-trans-secondary">Services</span>
                </h1>

                <p class="lead fw-semibold text-trans-dark mb-3">
                    Safe and seamless residential moving for 1 BHK, 2 BHK, 3 BHK apartments &amp; luxury villas across India.
                </p>

                <p class="text-trans-muted mb-4 fs-6 lh-base">
                    At <strong><?= $company3 ?></strong>, we treat your home belongings with extreme care. From delicate crockery and glass dining tables to heavy wooden wardrobes and electronic appliances, our trained movers handle everything with multi-layer protective packaging and custom crating.
                </p>

                <!-- Key Feature Pills -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="trans-feature-tag"><i class="bi bi-tools text-trans-secondary me-1"></i> Furniture Dismantling</span>
                    <span class="trans-feature-tag"><i class="bi bi-box2-fill text-trans-secondary me-1"></i> Crockery Protection</span>
                    <span class="trans-feature-tag"><i class="bi bi-tv-fill text-trans-secondary me-1"></i> Appliance Packing</span>
                    <span class="trans-feature-tag"><i class="bi bi-house-check-fill text-trans-secondary me-1"></i> Doorstep Setup</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Specialized Household Shifting Solutions Grid -->
<section class="trans-solutions-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-grid-3x3-gap-fill text-trans-secondary me-1"></i>
                <span>OUR HOUSEHOLD SERVICES</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Tailored Home Shifting Solutions</h2>
            <p class="text-trans-muted">Designed for safe apartment shifting, furniture handling &amp; delicate item protection.</p>
        </div>

        <div class="row g-4">
            <!-- Solution 1: Apartment & Villa Shifting -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-buildings-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Apartment &amp; Villa Moving</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Complete home packing &amp; shifting tailored for high-rise apartments and independent villas.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>High-Rise Elevator Handling</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Sealed Containers</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Complete Unpacking</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Fragile & Crockery Care -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-cup-hot-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Fragile &amp; Crockery Care</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Specially designed foam sleeves, bubble rolls &amp; sturdy cartons for glassware &amp; chinaware.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Bubble Roll Cushioning</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Foam Layer Dividers</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Fragile Tagged Boxes</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Furniture Assembly & Dismantling -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-screwdriver"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Furniture Dismantling</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Expert dismantling and re-assembly of king beds, modular wardrobes &amp; dining sets.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Hardware Organizers</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Blanket Strapping</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Destination Setup</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 4: Appliance Disconnection & Packing -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-plug-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Appliance Protection</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Safe packing &amp; transport for ACs, washing machines, refrigerators &amp; home theaters.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Corner Protectors</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Drum Lock Belts</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Transit Insurance Cover</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Safety Benchmarks -->
<section class="trans-safety-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i>
                    <span>SAFETY BENCHMARKS</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-0">Advanced Home Goods Security</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="text-trans-muted mb-0">Every item in your home is inventoried, packed with protective materials, and locked in weatherproof trucks.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-box-seam-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Heavy-Duty Cushioning</h5>
                        <p class="text-trans-muted fs-7 mb-0">High-density foam sheets &amp; double-wall corrugated boxes for shock absorption.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-handbag-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Wardrobe Carton Boxes</h5>
                        <p class="text-trans-muted fs-7 mb-0">Special hanging wardrobe boxes to transport formal clothes wrinkle-free.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-grid-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Floor Protection Sheets</h5>
                        <p class="text-trans-muted fs-7 mb-0">Corrugated floor covers during loading to prevent tile and wood scratches.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-check2-square"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Inventory Tagging</h5>
                        <p class="text-trans-muted fs-7 mb-0">Numbered box tagging with customer signoff at loading &amp; delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. 5-Stage Moving Process -->
<section class="trans-workflow-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-signpost-split-fill text-trans-secondary me-1"></i>
                <span>STEP-BY-STEP PROCESS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">How Household Shifting Works</h2>
            <p class="text-trans-muted">5 seamless steps from home survey to setup in your new house.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">01</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Home Inspection</h5>
                    <p class="text-trans-muted fs-7 mb-0">Detailed inventory assessment &amp; customized packing plan.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">02</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Systematic Packing</h5>
                    <p class="text-trans-muted fs-7 mb-0">Room-wise packing with itemized box labelling and fragile marking.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">03</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Secure Truck Loading</h5>
                    <p class="text-trans-muted fs-7 mb-0">Floor-locked container loading with soft blanket padding between items.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">04</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Express Transit</h5>
                    <p class="text-trans-muted fs-7 mb-0">Direct GPS-tracked transit without intermediate transshipments.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">05</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Unpacking &amp; Placement</h5>
                    <p class="text-trans-muted fs-7 mb-0">Unpacking, placing furniture in designated rooms &amp; assembly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Estimated Price Matrix -->
<section class="trans-rates-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-12">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-calculator-fill text-trans-secondary me-1"></i>
                    <span>TRANSPARENT PRICING</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Estimated Household Shifting Rates</h2>
                <p class="text-trans-muted mb-0">100% clear itemized pricing with zero hidden charges. All quotes include formal IBA approved bills.</p>
            </div>
        </div>

        <div class="trans-table-card table-responsive">
            <table class="table trans-table align-middle">
                <thead>
                    <tr>
                        <th>Apartment Type</th>
                        <th>Packing Material</th>
                        <th>Transit Time</th>
                        <th>Local City Shifting</th>
                        <th>Intercity Relocation</th>
                        <th>Insurance &amp; Bills</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>5-Layer Standard Wrap</td>
                        <td>Same Day (4 - 8 Hrs)</td>
                        <td><span class="fw-bold text-trans-primary">₹3,800 - ₹8,500</span></td>
                        <td><span class="fw-bold text-trans-primary">₹10,500 - ₹20,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>Multi-Layer &amp; Foam Padding</td>
                        <td>1 - 2 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹6,800 - ₹14,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹15,000 - ₹30,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Apartment</strong></td>
                        <td>Heavy Duty Crates &amp; Boxed</td>
                        <td>2 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹11,500 - ₹22,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹22,000 - ₹44,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa</strong></td>
                        <td>Full Customized Crating</td>
                        <td>2 - 3 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹16,000 - ₹32,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹32,000 - ₹60,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers & Movers Services',
    'bc_desc' => "India's premier IBA approved packers & movers providing 5-layer protective packing, zero-damage home relocation, trained staff & GPS tracked transport across India.",
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Packers & Movers']
    ]
]);
?>

<!-- Schema.org Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Packers & Movers Services | <?= $company3 ?>",
  "serviceType": "Packing and Relocation Services",
  "provider": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  },
  "areaServed": "India",
  "description": "Professional packing and moving services with 5-layer protective packing, IBA approved bills, transit insurance and zero-damage delivery."
}
</script>

<!-- 2. Hero Showcase Section -->
<section class="trans-hero-section py-5">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                <div class="trans-hero-badge mb-3">
                    <i class="bi bi-shield-check fs-6 text-trans-secondary"></i>
                    <span>IBA APPROVED &bull; 100% ZERO-DAMAGE GUARANTEE</span>
                </div>

                <h1 class="trans-fw-black text-trans-primary mb-3 lh-sm">
                    Professional Packers &amp; Movers <span class="text-trans-secondary">Services</span>
                </h1>

                <p class="lead fw-semibold text-trans-dark mb-3">
                    Complete household, office, vehicle, and commercial packing and moving solutions across India.
                </p>

                <p class="text-trans-muted mb-4 fs-6 lh-base">
                    At <strong><?= $company3 ?></strong>, we provide end-to-end relocation services powered by 5-layer heavy-duty packaging, dedicated container trucks, trained packing crews, and 24/7 live GPS tracking for complete peace of mind.
                </p>

                <!-- Key Feature Pills -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="trans-feature-tag"><i class="bi bi-box-seam-fill text-trans-secondary me-1"></i> 5-Layer Packaging</span>
                    <span class="trans-feature-tag"><i class="bi bi-file-earmark-text-fill text-trans-secondary me-1"></i> IBA Approved Bills</span>
                    <span class="trans-feature-tag"><i class="bi bi-shield-check text-trans-secondary me-1"></i> 100% Transit Insurance</span>
                    <span class="trans-feature-tag"><i class="bi bi-people-fill text-trans-secondary me-1"></i> Trained Relocation Staff</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Specialized Relocation Solutions Grid -->
<section class="trans-solutions-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-grid-3x3-gap-fill text-trans-secondary me-1"></i>
                <span>OUR PACKING &amp; MOVING SERVICES</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Tailored Relocation Solutions</h2>
            <p class="text-trans-muted">Engineered for safe household goods shifting, office relocation, vehicle transport &amp; storage.</p>
        </div>

        <div class="row g-4">
            <!-- Solution 1: Complete Home Relocation -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Complete Home Shifting</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Full packing, loading, transport, unloading &amp; unpacking of household items with zero stress.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>5-Layer Packaging</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Furniture Dismantling</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Door-to-Door Delivery</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Office & Commercial Moving -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Office Relocation</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Systematic IT desk packing, file color-coding &amp; minimal downtime business relocation.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>IT Server Packing</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Weekend Moving</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Color-Coded Boxes</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Vehicle & Bike Transportation -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Vehicle Carrier Service</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Enclosed hydraulic car trailers &amp; scratch-free bike crating with tie-downs across India.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Covered Car Trailers</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Wooden Bike Crating</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>GPS Live Tracking</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 4: Storage & Warehousing -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Safe Warehousing</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">CCTV monitored, pest-controlled safe short-term &amp; long-term household storage facilities.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>24/7 CCTV Surveillance</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Pest Controlled</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Flexible Duration</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Safety & Quality Benchmarks -->
<section class="trans-safety-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i>
                    <span>SAFETY STANDARDS</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-0">High Quality Relocation Standards</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="text-trans-muted mb-0">Every consignment is packed with premium materials and handled by trained packing specialists.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-layers-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">5-Layer Protective Wrap</h5>
                        <p class="text-trans-muted fs-7 mb-0">Heavy-duty bubble wrap, foam sheets, corrugated rolls &amp; stretch film for maximum protection.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-box-seam"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Custom Wooden Crating</h5>
                        <p class="text-trans-muted fs-7 mb-0">Special wooden crates for glass tops, marble tables, LED TVs, and delicate artwork.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-truck"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Sealed Container Trucks</h5>
                        <p class="text-trans-muted fs-7 mb-0">Fully covered weatherproof containers with digital tamper-proof lock security.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-file-earmark-medical-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">All-Risk Transit Insurance</h5>
                        <p class="text-trans-muted fs-7 mb-0">Comprehensive valuation protection against accidental transit damage.</p>
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
                <span>HOW IT WORKS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">5-Step Relocation Process</h2>
            <p class="text-trans-muted">Smooth and systematic packing and moving from initial survey to setup.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">01</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Pre-Move Survey</h5>
                    <p class="text-trans-muted fs-7 mb-0">Free doorstep survey &amp; itemized cost estimation according to household volume.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">02</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Multi-Layer Packing</h5>
                    <p class="text-trans-muted fs-7 mb-0">Room-by-room packing with color-coded labels and inventory listing.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">03</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Safe Truck Loading</h5>
                    <p class="text-trans-muted fs-7 mb-0">Heavy furniture loading using safety belts and container floor locks.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">04</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">GPS Tracked Transit</h5>
                    <p class="text-trans-muted fs-7 mb-0">Sealed container truck dispatch with real-time live location updates.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">05</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Unpacking &amp; Setup</h5>
                    <p class="text-trans-muted fs-7 mb-0">Destination unloading, unpacking, furniture assembly &amp; debris clearance.</p>
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
                <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Estimated Packing &amp; Moving Charges</h2>
                <p class="text-trans-muted mb-0">100% clear itemized pricing with zero hidden charges. All quotes include formal IBA approved bills.</p>
            </div>
        </div>

        <div class="trans-table-card table-responsive">
            <table class="table trans-table align-middle">
                <thead>
                    <tr>
                        <th>Home / Office Size</th>
                        <th>Packing Material Type</th>
                        <th>Est. Time</th>
                        <th>Local City Move</th>
                        <th>Intercity Shifting</th>
                        <th>Insurance &amp; Bills</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>5-Layer Standard Cushioning</td>
                        <td>Same Day (5-8 Hrs)</td>
                        <td><span class="fw-bold text-trans-primary">₹4,500 - ₹9,500</span></td>
                        <td><span class="fw-bold text-trans-primary">₹11,000 - ₹22,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>Premium Multi-Layer &amp; Crates</td>
                        <td>1 - 2 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹7,500 - ₹15,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹16,000 - ₹32,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Villa</strong></td>
                        <td>Heavy Duty Crates &amp; Boxed</td>
                        <td>2 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹12,500 - ₹24,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹24,000 - ₹48,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Commercial Office</strong></td>
                        <td>Anti-Static IT &amp; Security Boxes</td>
                        <td>Overnight / Weekend</td>
                        <td><span class="fw-bold text-trans-primary">₹15,000 - ₹40,000</span></td>
                        <td><span class="fw-bold text-trans-primary">Custom Quote</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

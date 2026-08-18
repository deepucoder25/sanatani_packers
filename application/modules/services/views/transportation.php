<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Transportation Services',
    'bc_desc' => "India's trusted GPS-tracked container transport service for safe household goods, car carrier trailers & bike shifting nationwide.",
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Transportation Services']
    ]
]);
?>

<!-- Schema.org Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Goods & Vehicle Transportation Services | <?= $company3 ?>",
  "serviceType": "Vehicle & Goods Transportation",
  "provider": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  },
  "areaServed": "India",
  "description": "Safe nationwide car carrier trailers, covered hydraulic container trucks, bike shifting, household goods transport & GPS tracked logistics."
}
</script>

<!-- 2. Hero Showcase & Live Fleet Overview (Col-12 Full Width Layout) -->
<section class="trans-hero-section py-5">
    <div class="container py-lg-4">
        <div class="row">
            <!-- Full Width Content Column -->
            <div class="col-12">
                <div class="trans-hero-badge mb-3">
                    <i class="bi bi-truck-front-fill fs-6 text-trans-secondary"></i>
                    <span>GPS TRACKED &bull; IBA APPROVED FLEET</span>
                </div>

                <h1 class="trans-fw-black text-trans-primary mb-3 lh-sm">
                    Fast, Safe &amp; Reliable <span class="text-trans-secondary">Transportation Services</span>
                </h1>

                <p class="lead fw-semibold text-trans-dark mb-3">
                    Transporting household goods, luxury cars, two-wheelers &amp; commercial consignments across India with guaranteed zero-damage safety.
                </p>

                <p class="text-trans-muted mb-4 fs-6 lh-base">
                    At <strong><?= $company3 ?></strong>, we operate a specialized fleet of weatherproof container trucks, enclosed hydraulic car trailers, and shock-resistant vehicle carriers. Every consignment is sealed, monitored with 24/7 live GPS telematics, and backed by full transit insurance for absolute peace of mind.
                </p>

                <!-- Key Feature Pills -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="trans-feature-tag"><i class="bi bi-shield-check text-trans-secondary me-1"></i> 100% Transit Insurance</span>
                    <span class="trans-feature-tag"><i class="bi bi-geo-alt-fill text-trans-secondary me-1"></i> Live GPS Tracking</span>
                    <span class="trans-feature-tag"><i class="bi bi-file-earmark-text-fill text-trans-secondary me-1"></i> IBA Relocation Bills</span>
                    <span class="trans-feature-tag"><i class="bi bi-box-seam-fill text-trans-secondary me-1"></i> Weatherproof Containers</span>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 3. Specialized Transport Solutions Grid -->
<section class="trans-solutions-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-grid-3x3-gap-fill text-trans-secondary me-1"></i>
                <span>OUR TRANSPORT SOLUTIONS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Tailored Transportation Services</h2>
            <p class="text-trans-muted">Engineered for safe goods transit, car carriers, motorcycle transport &amp; commercial logistics.</p>
        </div>

        <div class="row g-4">
            <!-- Solution 1: Household Goods Transport -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-box2-heart-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Household Goods</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Dedicated &amp; shared container vehicle transit with 5-layer bubble packaging for home furniture &amp; appliances.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Sealed Container</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Furniture Strapping</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Door-to-Door Delivery</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Enclosed Car Carrier Transport -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Enclosed Car Transport</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Covered car carrier trailers and hydraulic ramp trucks designed to transport hatchbacks, SUVs &amp; luxury cars.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Hydraulic Ramp Loading</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Wheel Lock Safety</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Transit Risk Cover</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Two-Wheeler & Bike Transport -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-bicycle"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Bike Shifting Service</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Specialized motorcycle transport using custom corrugated sheet wrapping, bubble wraps, and wooden crating.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Scratch Protection</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Tie-Down Straps</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Express City Transit</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 4: Commercial & Industrial Freight -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-building-fill-gear"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Commercial &amp; Freight</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Bulk commercial freight, office equipment, industrial machinery, and raw material transport across India.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Heavy Equipment</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Full Lorry Load (FTL)</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Priority Dispatch</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Fleet Safety & Technology Matrix -->
<section class="trans-safety-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i>
                    <span>SAFETY BENCHMARKS</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-0">Advanced Fleet Safety Features</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="text-trans-muted mb-0">Every vehicle in our fleet is equipped with modern logistics hardware to guarantee 100% consignment security.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-broadcast"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">24/7 Live GPS Telematics</h5>
                        <p class="text-trans-muted fs-7 mb-0">Track exact truck coordinates and highway speed in real-time from your smartphone.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-cloud-drizzle-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Weatherproof Steel Body</h5>
                        <p class="text-trans-muted fs-7 mb-0">Sealed container bodies protect your goods against heavy rains, dust &amp; transit heat.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-truck-flatbed"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Hydraulic Ramp Lift</h5>
                        <p class="text-trans-muted fs-7 mb-0">Smooth hydraulic loading ensures vehicles enter transport trailers without underbody scrapes.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-file-earmark-medical-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Full Transit Insurance</h5>
                        <p class="text-trans-muted fs-7 mb-0">Comprehensive all-risk insurance coverage to protect goods against accident risks during transit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. 5-Stage Express Transport Workflow -->
<section class="trans-workflow-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-signpost-split-fill text-trans-secondary me-1"></i>
                <span>STEP-BY-STEP PROCESS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">How Our Transportation Works</h2>
            <p class="text-trans-muted">5 simple steps from doorstep pickup to final consignment delivery.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">01</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Doorstep Inspection</h5>
                    <p class="text-trans-muted fs-7 mb-0">Our transport surveyor inspects vehicle / goods and issues a pre-transit condition report.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">02</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">5-Layer Protective Wrap</h5>
                    <p class="text-trans-muted fs-7 mb-0">Goods and vehicles are packed with heavy-duty bubble wraps, wheel locks, and safety straps.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">03</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Sealed Container Loading</h5>
                    <p class="text-trans-muted fs-7 mb-0">Consignments are loaded onto container trucks and locked with tamper-evident digital seals.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">04</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">GPS Highway Transit</h5>
                    <p class="text-trans-muted fs-7 mb-0">Real-time GPS tracking link sends live updates to your phone during long-distance transit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">05</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Doorstep Delivery</h5>
                    <p class="text-trans-muted fs-7 mb-0">Safe unloading at your destination address with final condition verification and LR signoff.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Transparent Route & Estimated Rate Matrix -->
<section class="trans-rates-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-12">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-calculator-fill text-trans-secondary me-1"></i>
                    <span>TRANSPARENT PRICING</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Estimated Distance &amp; Transport Rates</h2>
                <p class="text-trans-muted mb-0">100% clear itemized pricing with zero hidden charges. All quotes include formal IBA approved bills.</p>
            </div>
        </div>

        <div class="trans-table-card table-responsive">
            <table class="table trans-table align-middle">
                <thead>
                    <tr>
                        <th>Distance Tier</th>
                        <th>Container / Truck Type</th>
                        <th>Est. Transit Time</th>
                        <th>Household Shifting</th>
                        <th>Car / Bike Transport</th>
                        <th>Tracking &amp; Insurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Local / Intra-City</strong> (&lt; 50 KM)</td>
                        <td>14ft Weatherproof Container</td>
                        <td>Same Day (4 - 8 Hrs)</td>
                        <td><span class="fw-bold text-trans-primary">₹3,500 - ₹8,500</span></td>
                        <td><span class="fw-bold text-trans-primary">₹1,500 - ₹3,500</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Short Distance</strong> (50 - 300 KM)</td>
                        <td>17ft / 19ft Sealed Container</td>
                        <td>24 Hours</td>
                        <td><span class="fw-bold text-trans-primary">₹7,500 - ₹16,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹3,000 - ₹6,500</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Interstate Transit</strong> (300 - 1000 KM)</td>
                        <td>20ft / 24ft Hydraulic Truck</td>
                        <td>2 - 4 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹14,000 - ₹28,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹5,500 - ₹12,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Pan-India Express</strong> (1000+ KM)</td>
                        <td>32ft Double Axle Carrier</td>
                        <td>4 - 6 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹22,000 - ₹45,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹8,500 - ₹18,500</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


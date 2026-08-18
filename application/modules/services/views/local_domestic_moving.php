<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Local & Domestic Moving Services',
    'bc_desc' => "Fast same-day intra-city local moving & seamless pan-India long-distance domestic relocation services.",
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Local & Domestic Moving']
    ]
]);
?>

<!-- Schema.org Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Local & Domestic Moving Services | <?= $company3 ?>",
  "serviceType": "Local and Intercity Relocation",
  "provider": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  },
  "areaServed": "India",
  "description": "Fast same-day local moving within your city and seamless pan-India domestic interstate household relocation."
}
</script>

<!-- 2. Hero Showcase Section -->
<section class="trans-hero-section py-5">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                <div class="trans-hero-badge mb-3">
                    <i class="bi bi-geo-alt-fill fs-6 text-trans-secondary"></i>
                    <span>SAME-DAY LOCAL MOVING &bull; PAN-INDIA DOMESTIC</span>
                </div>

                <h1 class="trans-fw-black text-trans-primary mb-3 lh-sm">
                    Local &amp; Domestic Moving <span class="text-trans-secondary">Services</span>
                </h1>

                <p class="lead fw-semibold text-trans-dark mb-3">
                    Efficient local intra-city moving within hours and seamless interstate domestic shifting across all cities in India.
                </p>

                <p class="text-trans-muted mb-4 fs-6 lh-base">
                    Whether you are moving across town or shifting to a new state across India, <strong><?= $company3 ?></strong> provides swift, reliable, and affordable relocation solutions. Our fleet of closed container trucks ensures safe transit for short-haul city moves and long-haul intercity relocations.
                </p>

                <!-- Key Feature Pills -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="trans-feature-tag"><i class="bi bi-clock-history text-trans-secondary me-1"></i> Same-Day City Delivery</span>
                    <span class="trans-feature-tag"><i class="bi bi-truck-front-fill text-trans-secondary me-1"></i> Interstate Direct Trucks</span>
                    <span class="trans-feature-tag"><i class="bi bi-shield-check text-trans-secondary me-1"></i> No Transshipment</span>
                    <span class="trans-feature-tag"><i class="bi bi-pin-map-fill text-trans-secondary me-1"></i> Live Route Tracking</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Specialized Local & Domestic Solutions Grid -->
<section class="trans-solutions-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-grid-3x3-gap-fill text-trans-secondary me-1"></i>
                <span>OUR MOVING CATEGORIES</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Tailored Local &amp; Domestic Options</h2>
            <p class="text-trans-muted">Designed for same-day local shifting, interstate container freight &amp; part-load moving.</p>
        </div>

        <div class="row g-4">
            <!-- Solution 1: Intra-City Local Moving -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Intra-City Express</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Fast 4 to 8 hour doorstep relocation within your city using compact 14ft/17ft closed trucks.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Same-Day Completion</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Dedicated City Crew</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Door-to-Door Service</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Interstate Domestic Moving -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-map-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Interstate Shifting</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Direct non-stop container transport between major Indian metros with live GPS tracking.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Direct Container Truck</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Live GPS Location</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>State Permit Covered</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Part-Load / Shared Transit -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Shared Part-Load</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Budget-friendly shared container options for small household shipments moving inter-state.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Cost-Effective Pricing</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Partitioned Storage</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Scheduled Delivery</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 4: Express Dedicated Vehicle -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Dedicated Express</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Full lorry load (FTL) dedicated container trucks for priority fast-track intercity delivery.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Single Customer Truck</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Express Highway Speed</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Zero Inter-State Delays</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Safety & Quality Guarantees -->
<section class="trans-safety-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i>
                    <span>QUALITY GUARANTEES</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-0">Local &amp; Domestic Safety Guarantees</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="text-trans-muted mb-0">We guarantee safe transit across city limits and state borders with direct locked container trucks.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-arrow-repeat"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Zero Transshipment</h5>
                        <p class="text-trans-muted fs-7 mb-0">Your goods remain locked in the same container truck from pickup to delivery.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-cloud-drizzle-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">All-Weather Containers</h5>
                        <p class="text-trans-muted fs-7 mb-0">Sealed metal container bodies protected against dust, monsoon rain &amp; highway heat.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Highway Safety Seals</h5>
                        <p class="text-trans-muted fs-7 mb-0">Tamper-evident numbered seals &amp; digital padlocks verified at state borders.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-file-text-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Comprehensive Bills</h5>
                        <p class="text-trans-muted fs-7 mb-0">Formal IBA compliant bills, consignment notes (LR), and GST invoices.</p>
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
                <span>WORKFLOW STEPS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">How Local &amp; Domestic Moving Works</h2>
            <p class="text-trans-muted">5 easy steps from booking to doorstep unloading in any city in India.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">01</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Instant Booking</h5>
                    <p class="text-trans-muted fs-7 mb-0">Select between local express or domestic long-distance package.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">02</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Doorstep Packing</h5>
                    <p class="text-trans-muted fs-7 mb-0">Professional multi-layer packing tailored for local or intercity transit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">03</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Container Loading</h5>
                    <p class="text-trans-muted fs-7 mb-0">Systematically loaded and secured with ratchet safety straps.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">04</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Highway / City Transit</h5>
                    <p class="text-trans-muted fs-7 mb-0">Monitored via GPS with SMS / WhatsApp milestone alerts.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">05</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">On-Time Delivery</h5>
                    <p class="text-trans-muted fs-7 mb-0">Doorstep unloading, furniture re-assembly, and condition inspection.</p>
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
                <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Estimated Local &amp; Domestic Moving Charges</h2>
                <p class="text-trans-muted mb-0">100% clear itemized pricing with zero hidden charges. All quotes include formal IBA approved bills.</p>
            </div>
        </div>

        <div class="trans-table-card table-responsive">
            <table class="table trans-table align-middle">
                <thead>
                    <tr>
                        <th>Distance Tier</th>
                        <th>Recommended Vehicle</th>
                        <th>Est. Transit Time</th>
                        <th>Local Shifting (1-2 BHK)</th>
                        <th>Domestic Shifting (3 BHK+)</th>
                        <th>Tracking &amp; Bills</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Local Intra-City</strong> (&lt; 30 KM)</td>
                        <td>14ft Covered Truck</td>
                        <td>Same Day (3 - 6 Hrs)</td>
                        <td><span class="fw-bold text-trans-primary">₹3,500 - ₹7,500</span></td>
                        <td><span class="fw-bold text-trans-primary">₹8,000 - ₹14,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Regional Move</strong> (30 - 150 KM)</td>
                        <td>17ft / 19ft Container</td>
                        <td>Same Day (6 - 12 Hrs)</td>
                        <td><span class="fw-bold text-trans-primary">₹6,500 - ₹13,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹14,000 - ₹24,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Interstate Move</strong> (150 - 800 KM)</td>
                        <td>20ft Sealed Truck</td>
                        <td>2 - 3 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹12,000 - ₹24,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹25,000 - ₹42,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Long Distance Pan-India</strong> (800+ KM)</td>
                        <td>24ft / 32ft MX Container</td>
                        <td>4 - 6 Days</td>
                        <td><span class="fw-bold text-trans-primary">₹18,000 - ₹36,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹36,000 - ₹65,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

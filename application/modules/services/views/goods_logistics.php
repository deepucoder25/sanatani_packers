<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Goods & Logistics Services',
    'bc_desc' => "End-to-end commercial goods transport, industrial logistics, freight management & supply chain solutions in India.",
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Goods & Logistics']
    ]
]);
?>

<!-- Schema.org Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Goods & Logistics Services | <?= $company3 ?>",
  "serviceType": "Commercial Logistics and Freight Transportation",
  "provider": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  },
  "areaServed": "India",
  "description": "B2B commercial freight transport, full truckload (FTL), heavy industrial machinery logistics and warehousing solutions."
}
</script>

<!-- 2. Hero Showcase Section -->
<section class="trans-hero-section py-5">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                <div class="trans-hero-badge mb-3">
                    <i class="bi bi-box-seam-fill fs-6 text-trans-secondary"></i>
                    <span>COMMERCIAL FREIGHT &bull; SUPPLY CHAIN LOGISTICS</span>
                </div>

                <h1 class="trans-fw-black text-trans-primary mb-3 lh-sm">
                    Commercial Goods &amp; Logistics <span class="text-trans-secondary">Services</span>
                </h1>

                <p class="lead fw-semibold text-trans-dark mb-3">
                    Reliable B2B goods transportation, industrial equipment freight, and commercial supply chain logistics across India.
                </p>

                <p class="text-trans-muted mb-4 fs-6 lh-base">
                    At <strong><?= $company3 ?></strong>, we power commercial trade and corporate supply chains with nationwide logistics services. We operate heavy-duty container trailers, open flatbeds, multi-axle lorries, and temperature-sensitive transport trucks designed for raw materials, manufactured goods, and machinery.
                </p>

                <!-- Key Feature Pills -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="trans-feature-tag"><i class="bi bi-building-gear text-trans-secondary me-1"></i> B2B Commercial Freight</span>
                    <span class="trans-feature-tag"><i class="bi bi-truck-front-fill text-trans-secondary me-1"></i> FTL &amp; LTL Logistics</span>
                    <span class="trans-feature-tag"><i class="bi bi-gear-wide-connected text-trans-secondary me-1"></i> Heavy Machinery Transport</span>
                    <span class="trans-feature-tag"><i class="bi bi-house-door-fill text-trans-secondary me-1"></i> Warehousing Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Specialized Commercial Freight Solutions Grid -->
<section class="trans-solutions-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-grid-3x3-gap-fill text-trans-secondary me-1"></i>
                <span>OUR LOGISTICS SOLUTIONS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Tailored Commercial Freight Options</h2>
            <p class="text-trans-muted">Engineered for full truckloads (FTL), part-load cargo (LTL), machinery &amp; warehousing.</p>
        </div>

        <div class="row g-4">
            <!-- Solution 1: Full Truckload (FTL) -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Full Truckload (FTL)</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Dedicated 20ft, 24ft, and 32ft container lorries for bulk commercial shipments and factory goods.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Dedicated Lorry Dispatch</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Direct Factory Transit</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Priority Highway Transit</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Less Than Truckload (LTL) -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Part-Load (LTL) Freight</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Cost-effective consolidated freight transport for smaller commercial consignments.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Pay per Volume / Weight</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Hub-to-Hub Delivery</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Scheduled Line-Haul</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Industrial Machinery Freight -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Machinery Transport</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Heavy-duty low-bed trailers and crane loading support for industrial machinery &amp; plant equipment.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Low-Bed Trailers</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Crane &amp; Rigging Support</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>ODC Cargo Handling</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 4: Warehouse & Supply Chain -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-house-gear-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Warehouse Logistics</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Integrated storage, inventory management, cross-docking, and last-mile B2B distribution.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Inventory Management</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Cross-Docking Hubs</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Last-Mile Distribution</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Safety & Compliance Benchmarks -->
<section class="trans-safety-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i>
                    <span>FREIGHT COMPLIANCE</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-0">Commercial Logistics Security</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="text-trans-muted mb-0">Industrial-grade cargo securing hardware, digital tracking &amp; GST bill compliance.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-shield-shaded"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Heavy Industrial Lashing</h5>
                        <p class="text-trans-muted fs-7 mb-0">Steel wire ropes, ratchet tie-downs &amp; dunnage bags for total cargo stability.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-broadcast"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">GPS Fleet Telematics</h5>
                        <p class="text-trans-muted fs-7 mb-0">Advanced IoT telematics providing route analytics, speed monitoring &amp; ETA tracking.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-file-earmark-medical-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Transit Risk Cover</h5>
                        <p class="text-trans-muted fs-7 mb-0">Cargo liability insurance and all-risk transit protection for high-value commercial loads.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-clock-check-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Express Line-Haul</h5>
                        <p class="text-trans-muted fs-7 mb-0">Scheduled line-haul dispatches ensuring strict delivery SLAs for corporate clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. 5-Stage Logistics Workflow -->
<section class="trans-workflow-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-signpost-split-fill text-trans-secondary me-1"></i>
                <span>SUPPLY CHAIN PROCESS</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">How Commercial Logistics Works</h2>
            <p class="text-trans-muted">5 efficient steps from cargo pickup to destination warehouse delivery.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">01</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Freight Assessment</h5>
                    <p class="text-trans-muted fs-7 mb-0">Volume, weight, vehicle type selection &amp; route feasibility analysis.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">02</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Cargo Loading &amp; Pallet</h5>
                    <p class="text-trans-muted fs-7 mb-0">Industrial pallet wrapping, strapping, and dock loading.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">03</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Sealed Lorry Dispatch</h5>
                    <p class="text-trans-muted fs-7 mb-0">Digital sealing of container doors and driver documentation signoff.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">04</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Highway Logistics</h5>
                    <p class="text-trans-muted fs-7 mb-0">Monitored 24/7 via centralized fleet management control center.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">05</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Plant / Hub Unloading</h5>
                    <p class="text-trans-muted fs-7 mb-0">Unloading at destination factory, warehouse or commercial facility with POD.</p>
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
                <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Estimated Commercial Logistics Charges</h2>
                <p class="text-trans-muted mb-0">100% clear itemized pricing with zero hidden charges. All quotes include formal IBA approved bills.</p>
            </div>
        </div>

        <div class="trans-table-card table-responsive">
            <table class="table trans-table align-middle">
                <thead>
                    <tr>
                        <th>Vehicle Category</th>
                        <th>Payload Capacity</th>
                        <th>Recommended Cargo</th>
                        <th>Intra-City Rate</th>
                        <th>Interstate Freight</th>
                        <th>Bills &amp; Insurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Light Commercial (LCV)</strong></td>
                        <td>1.5 to 3.5 Tons (14ft)</td>
                        <td>Retail Goods / Light Freight</td>
                        <td><span class="fw-bold text-trans-primary">₹3,000 - ₹6,500</span></td>
                        <td><span class="fw-bold text-trans-primary">₹12,000 - ₹22,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Medium Commercial (MCV)</strong></td>
                        <td>5 to 9 Tons (19ft / 20ft)</td>
                        <td>Industrial &amp; FMCG Products</td>
                        <td><span class="fw-bold text-trans-primary">₹6,000 - ₹12,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹22,000 - ₹42,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Heavy Commercial (HCV)</strong></td>
                        <td>15 to 25 Tons (32ft MX)</td>
                        <td>Bulk Factory Goods &amp; Raw Material</td>
                        <td><span class="fw-bold text-trans-primary">₹12,000 - ₹22,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹40,000 - ₹85,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Heavy Machinery Trailer</strong></td>
                        <td>25+ Tons (Lowbed / Flatbed)</td>
                        <td>Industrial Plant Equipment &amp; ODC</td>
                        <td><span class="fw-bold text-trans-primary">Custom Quote</span></td>
                        <td><span class="fw-bold text-trans-primary">Custom Quote</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

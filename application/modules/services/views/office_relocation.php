<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Module Stylesheet -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css?v=' . time()) ?>">

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Relocation Services',
    'bc_desc' => "Corporate office shifting with zero business downtime, IT server rack packing, desk color-coding & overnight moving.",
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('services')],
        ['name' => 'Office Relocation']
    ]
]);
?>

<!-- Schema.org Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Corporate Office Relocation Services | <?= $company3 ?>",
  "serviceType": "Commercial Office Shifting",
  "provider": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  },
  "areaServed": "India",
  "description": "Zero business downtime commercial office relocation, IT server packing, desktop labeling and corporate workspace shifting."
}
</script>

<!-- 2. Hero Showcase Section -->
<section class="trans-hero-section py-5">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                <div class="trans-hero-badge mb-3">
                    <i class="bi bi-building-fill-check fs-6 text-trans-secondary"></i>
                    <span>ZERO BUSINESS DOWNTIME &bull; IT INFRASTRUCTURE SAFE</span>
                </div>

                <h1 class="trans-fw-black text-trans-primary mb-3 lh-sm">
                    Corporate &amp; Office Relocation <span class="text-trans-secondary">Services</span>
                </h1>

                <p class="lead fw-semibold text-trans-dark mb-3">
                    Fast, structured office moving solutions for startups, corporate headquarters, IT parks &amp; commercial hubs.
                </p>

                <p class="text-trans-muted mb-4 fs-6 lh-base">
                    At <strong><?= $company3 ?></strong>, we specialize in commercial and corporate relocations planned for zero business disruption. Our dedicated commercial move managers handle IT server racks, office furniture, confidential documents, and employee workstations systematically with weekend/overnight execution.
                </p>

                <!-- Key Feature Pills -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="trans-feature-tag"><i class="bi bi-clock-history text-trans-secondary me-1"></i> Zero Downtime Moving</span>
                    <span class="trans-feature-tag"><i class="bi bi-cpu-fill text-trans-secondary me-1"></i> IT Server Packing</span>
                    <span class="trans-feature-tag"><i class="bi bi-tags-fill text-trans-secondary me-1"></i> Color-Coded Labeling</span>
                    <span class="trans-feature-tag"><i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i> Confidential Shredding</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Specialized Commercial Solutions Grid -->
<section class="trans-solutions-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-grid-3x3-gap-fill text-trans-secondary me-1"></i>
                <span>OUR COMMERCIAL SERVICES</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Tailored Corporate Office Solutions</h2>
            <p class="text-trans-muted">Engineered for corporate headquarters, IT server rooms, workstations &amp; archives.</p>
        </div>

        <div class="row g-4">
            <!-- Solution 1: Corporate Headquarters -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Corporate Shifting</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">End-to-end office shifting with dedicated project management and floor plan alignment.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Project Move Manager</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Floorplan Mapping</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Overnight Execution</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: IT & Server Infrastructure -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-server"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">IT &amp; Server Moving</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Anti-static bubble wrapping, padded flight cases &amp; server rack transportation.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Anti-Static ESD Wraps</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Padded Flight Cases</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Climate Controlled Freight</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Employee Workstations -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-display-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Workstation Shifting</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Modular desk dismantling, monitor bubble wrapping &amp; wire management setup.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Desk Color-Coding</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Monitor Protection</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Modular Re-Assembly</span></div>
                    </div>
                </div>
            </div>

            <!-- Solution 4: Document & File Archiving -->
            <div class="col-md-6 col-lg-3">
                <div class="trans-solution-card">
                    <div>
                        <div class="trans-solution-icon-box">
                            <i class="bi bi-folder-symlink-fill"></i>
                        </div>
                        <h4 class="fw-bold text-trans-primary mb-2 fs-5">Document Archiving</h4>
                        <p class="text-trans-muted fs-7 lh-base mb-3">Color-coded security crates for legal files, financial audit books &amp; archives.</p>
                    </div>
                    <div class="trans-card-checklist">
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Sealed File Crates</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Serial Index Tagging</span></div>
                        <div class="trans-check-item"><i class="bi bi-check-circle-fill me-2"></i><span>Confidential Handling</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Safety & Security Protocol -->
<section class="trans-safety-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <div class="trans-hero-badge mb-2">
                    <i class="bi bi-shield-lock-fill text-trans-secondary me-1"></i>
                    <span>CORPORATE SECURITY</span>
                </div>
                <h2 class="trans-fw-black text-trans-primary display-6 mb-0">Commercial Security Protocols</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="text-trans-muted mb-0">Engineered to protect confidential corporate assets, electronics &amp; legal documentation.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-cpu-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Anti-Static IT Packing</h5>
                        <p class="text-trans-muted fs-7 mb-0">ESD bubble rolls and cushioned flight cases for servers, PCs &amp; electronics.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-tags-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Color-Code System</h5>
                        <p class="text-trans-muted fs-7 mb-0">Floor &amp; desk color-coded tagging for 100% accurate placement at new office.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-moon-stars-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">Weekend/Overnight Move</h5>
                        <p class="text-trans-muted fs-7 mb-0">Execution during non-working hours so employees resume work Monday morning.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="trans-safety-box">
                    <div class="trans-safety-icon"><i class="bi bi-file-earmark-lock-fill"></i></div>
                    <div>
                        <h5 class="fw-bold text-trans-primary mb-1 fs-6">NDA &amp; Security Protocol</h5>
                        <p class="text-trans-muted fs-7 mb-0">Strict background checks &amp; signed non-disclosure agreements for all crew members.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. 5-Stage Office Move Process -->
<section class="trans-workflow-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-width-750 mx-auto mb-5">
            <div class="trans-hero-badge mb-2">
                <i class="bi bi-signpost-split-fill text-trans-secondary me-1"></i>
                <span>COMMERCIAL WORKFLOW</span>
            </div>
            <h2 class="trans-fw-black text-trans-primary display-6 mb-2">How Office Relocation Works</h2>
            <p class="text-trans-muted">5 structured steps for seamless corporate shifting without business loss.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">01</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Strategy &amp; Move Plan</h5>
                    <p class="text-trans-muted fs-7 mb-0">Floor plan analysis, timeline scheduling &amp; IT protocol setup.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">02</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Color-Coded Packing</h5>
                    <p class="text-trans-muted fs-7 mb-0">Systematic packing of individual workstations &amp; department archives.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">03</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Secure Freight Transit</h5>
                    <p class="text-trans-muted fs-7 mb-0">Dedicated container trucks with GPS telematics &amp; digital locks.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">04</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">New Office Setup</h5>
                    <p class="text-trans-muted fs-7 mb-0">Unpacking and placing desks, chairs, and IT hardware according to layout.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg col-6">
                <div class="trans-flow-step">
                    <div class="trans-flow-num">05</div>
                    <h5 class="fw-bold text-trans-primary mb-2 fs-6">Final Sign-Off</h5>
                    <p class="text-trans-muted fs-7 mb-0">Post-move audit &amp; debris clearance before business hours begin.</p>
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
                <h2 class="trans-fw-black text-trans-primary display-6 mb-2">Estimated Office Shifting Rates</h2>
                <p class="text-trans-muted mb-0">100% clear itemized pricing with zero hidden charges. All quotes include formal IBA approved bills.</p>
            </div>
        </div>

        <div class="trans-table-card table-responsive">
            <table class="table trans-table align-middle">
                <thead>
                    <tr>
                        <th>Office Scale</th>
                        <th>Packing &amp; IT Handling</th>
                        <th>Execution Schedule</th>
                        <th>Local City Shifting</th>
                        <th>Intercity Relocation</th>
                        <th>Insurance &amp; GST</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Micro Office</strong> (1 - 10 Desks)</td>
                        <td>Standard IT &amp; Workstation Wrap</td>
                        <td>Same Day (6 - 10 Hrs)</td>
                        <td><span class="fw-bold text-trans-primary">₹9,500 - ₹18,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹22,000 - ₹40,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Medium Office</strong> (10 - 50 Desks)</td>
                        <td>Color-Coded &amp; ESD IT Cases</td>
                        <td>Overnight / Weekend</td>
                        <td><span class="fw-bold text-trans-primary">₹18,000 - ₹45,000</span></td>
                        <td><span class="fw-bold text-trans-primary">₹45,000 - ₹90,000</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Large Corporate</strong> (50 - 150 Desks)</td>
                        <td>Server Rack &amp; Modular Setup</td>
                        <td>Weekend Batch Move</td>
                        <td><span class="fw-bold text-trans-primary">₹45,000 - ₹1,10,000</span></td>
                        <td><span class="fw-bold text-trans-primary">Custom Quote</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                    <tr>
                        <td><strong>Enterprise Move</strong> (150+ Desks)</td>
                        <td>Dedicated Move Management</td>
                        <td>Phase-Wise Transition</td>
                        <td><span class="fw-bold text-trans-primary">Custom Quote</span></td>
                        <td><span class="fw-bold text-trans-primary">Custom Quote</span></td>
                        <td><span class="badge bg-success-subtle text-success fw-bold">Included</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

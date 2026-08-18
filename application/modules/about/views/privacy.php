<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => "Read how $company3 collects, protects, and handles your personal information with 100% data security & confidentiality.",
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- Schema.org Privacy Policy Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy | <?= $company3 ?>",
  "description": "Privacy policy and data protection terms of <?= $company3 ?> regarding relocation inquiries, household shifting bookings, and personal data protection.",
  "publisher": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  }
}
</script>

<!-- Main Privacy Policy Content Section -->
<section class="py-5 policy-section-v2">
    <div class="container py-lg-3">
        <div class="row g-4">

            <!-- Sidebar Table of Contents (Sticky on Desktop) -->
            <div class="col-lg-4 col-xl-3">
                <div class="policy-sidebar-sticky">

                    <!-- TOC Card -->
                    <div class="policy-toc-card mb-4">
                        <div class="policy-toc-title">
                            <i class="bi bi-list-nested"></i>
                            <span>QUICK NAVIGATION</span>
                        </div>
                        <ul class="policy-toc-list">
                            <li><a href="#overview" class="policy-toc-link active"><i class="bi bi-chevron-right"></i> 1. Overview</a></li>
                            <li><a href="#info-collect" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 2. Info We Collect</a></li>
                            <li><a href="#use-data" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 3. How We Use Info</a></li>
                            <li><a href="#security" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 4. Data Security</a></li>
                            <li><a href="#third-party" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 5. Third-Party Sharing</a></li>
                            <li><a href="#cookies" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 6. Cookies Policy</a></li>
                            <li><a href="#rights" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 7. Your Data Rights</a></li>
                            <li><a href="#contact-dpo" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 8. Contact Helpdesk</a></li>
                        </ul>
                    </div>

                    <!-- Contact / Support Card -->
                    <div class="policy-contact-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="exp-icon-box" style="background: rgba(255,255,255,0.15); color: #fff;">
                                <i class="bi bi-shield-lock-fill fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-white mb-0">Privacy Concern?</h6>
                                <small class="text-white opacity-75 fs-7">Our Data Officer is here</small>
                            </div>
                        </div>
                        <p class="text-white opacity-85 fs-7 mb-3">Have questions about your personal data or relocation booking details?</p>
                        <a href="<?= $mailhtml ?>" class="btn btn-about-quote w-100 py-2 fs-7 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-envelope-fill"></i> Email Support
                        </a>
                    </div>

                </div>
            </div>

            <!-- Main Content Body Area -->
            <div class="col-lg-8 col-xl-9">
                <article class="policy-card-v2">

                    <!-- Document Header -->
                    <div class="border-bottom pb-3 mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                            <span class="about-eyebrow-pill mb-0">
                                <i class="bi bi-shield-check"></i>
                                LEGAL &amp; CONFIDENTIALITY
                            </span>
                            <small class="text-about-muted fw-semibold">
                                <i class="bi bi-clock-history me-1"></i> Last Updated: <?= date('F d, Y') ?>
                            </small>
                        </div>
                        <h1 class="fw-black text-about-primary h2 mb-2">Privacy Policy &amp; Data Protection</h1>
                        <p class="text-about-muted mb-0">Your privacy is fundamental to us. This policy outlines how <?= $company3 ?> collects, safeguards, and utilizes customer data during packing, moving, and transport bookings across India.</p>
                    </div>

                    <!-- Highlight Guarantee Box -->
                    <div class="policy-highlight-box">
                        <h5><i class="bi bi-shield-fill-check"></i> 100% Zero-Spam &amp; Data Security Pledge</h5>
                        <p class="mb-0 fs-7 text-about-dark">We never sell, rent, or lease customer mobile numbers or personal details to third-party telemarketers. All quote inquiries and move details remain strictly confidential between you and <?= $company3 ?>.</p>
                    </div>

                    <!-- Section 1: Overview -->
                    <section id="overview">
                        <h2><i class="bi bi-info-circle-fill"></i> 1. Overview &amp; Scope</h2>
                        <p><?= $company3 ?> ("Company", "We", "Us", or "Our") is committed to maintaining the highest standards of data protection and privacy under the <strong>Information Technology Act, 2000</strong> and the <strong>Digital Personal Data Protection (DPDP) Act, 2023</strong> of India.</p>
                        <p>This Privacy Policy applies to all visitors, customers, and users who interact with our website (<?= site_url() ?>), submit instant quote requests, request call-backs, or book household shifting, office relocation, vehicle transport, or warehouse storage services.</p>
                    </section>

                    <!-- Section 2: Information We Collect -->
                    <section id="info-collect">
                        <h2><i class="bi bi-collection-fill"></i> 2. Information We Collect</h2>
                        <p>To provide accurate moving estimates, consignment tracking, and IBA-compliant billing, we collect the following types of information:</p>
                        
                        <h3>A. Personal Identification Data</h3>
                        <ul>
                            <li><strong>Contact Details:</strong> Full Name, Primary Mobile Number, Alternative Contact Number, and Email Address.</li>
                            <li><strong>Relocation Addresses:</strong> Pick-up address (origin city, house number, floor details) and Drop-off destination address (destination city, pin code).</li>
                            <li><strong>Consignment Details:</strong> Item inventory (e.g. 1BHK, 2BHK, 3BHK, vehicle model, fragile goods, electrical appliances).</li>
                        </ul>

                        <h3>B. Technical &amp; Browsing Information</h3>
                        <ul>
                            <li><strong>Device Information:</strong> IP address, browser type, operating system, device identifiers, and referring URL.</li>
                            <li><strong>Tracking &amp; Usage:</strong> Pages visited, time spent on consignment tracking pages, and website interaction metrics.</li>
                        </ul>
                    </section>

                    <!-- Section 3: How We Use Info -->
                    <section id="use-data">
                        <h2><i class="bi bi-gear-fill"></i> 3. How We Use Your Information</h2>
                        <p>We process your personal information strictly for legitimate business and operational relocation purposes, including:</p>
                        <ol>
                            <li><strong>Service Execution:</strong> Generating precise cost estimates, assigning move managers, scheduling packing crews, and dispatching transport vehicles.</li>
                            <li><strong>Tracking &amp; Updates:</strong> Sending real-time SMS, WhatsApp updates, and GPS location links for your consignment in transit.</li>
                            <li><strong>Billing &amp; IBA Documentation:</strong> Generating GST tax invoices, Goods Transport Agency (GTA) consignment notes, Lorry Receipts (LR), and insurance documentation.</li>
                            <li><strong>Customer Support:</strong> Responding to inquiries, feedback, pre-move surveys, and resolving insurance claim requests.</li>
                        </ol>
                    </section>

                    <!-- Section 4: Data Security -->
                    <section id="security">
                        <h2><i class="bi bi-lock-fill"></i> 4. Data Security &amp; Protection Measures</h2>
                        <p>We implement stringent technical and organizational security controls to protect your data against unauthorized access, loss, or alteration:</p>
                        
                        <div class="policy-highlight-box primary-theme">
                            <h5><i class="bi bi-file-earmark-lock-fill"></i> Enterprise-Grade Security Standards</h5>
                            <ul class="mb-0 fs-7">
                                <li><strong>SSL Encryption:</strong> 256-bit HTTPS encryption for all web communications and online quote forms.</li>
                                <li><strong>Restricted Access:</strong> Access to customer booking data is restricted strictly to authorized logistics managers and dispatch personnel.</li>
                                <li><strong>Secure Servers:</strong> Customer records are stored in secure firewall-protected cloud servers with daily automated backups.</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Section 5: Third-Party Sharing -->
                    <section id="third-party">
                        <h2><i class="bi bi-share-fill"></i> 5. Third-Party Sharing &amp; Disclosure</h2>
                        <p>We do not share your personal data with external marketers. Data is shared exclusively with vetted operational partners under strict confidentiality obligations when required for service completion:</p>
                        <ul>
                            <li><strong>Transit Insurance Providers:</strong> Name, address, and declared consignment value shared with licensed insurance companies (e.g. ICICI Lombard, National Insurance) when transit insurance is requested.</li>
                            <li><strong>Logistics &amp; Escort Partners:</strong> Vehicle driver details and pick-up/drop addresses shared with assigned transport drivers for smooth doorstep delivery.</li>
                            <li><strong>Legal &amp; Regulatory Bodies:</strong> Disclosed only if mandated by law enforcement authorities, court orders, or statutory tax audits.</li>
                        </ul>
                    </section>

                    <!-- Section 6: Cookies Policy -->
                    <section id="cookies">
                        <h2><i class="bi bi-cookie"></i> 6. Cookies &amp; Web Analytics</h2>
                        <p>Our website utilizes standard session cookies to enhance browsing experience, remember form inputs during session navigation, and analyze web traffic patterns via Google Analytics.</p>
                        <p>You can choose to disable cookies through your web browser settings. However, disabling cookies may affect certain interactive features such as instant cost calculators or live tracking widgets.</p>
                    </section>

                    <!-- Section 7: Your Data Rights -->
                    <section id="rights">
                        <h2><i class="bi bi-person-check-fill"></i> 7. Your Rights &amp; Choices</h2>
                        <p>As a customer of <?= $company3 ?>, you have the following rights regarding your personal information:</p>
                        <ul>
                            <li><strong>Right to Access:</strong> Request a copy of the personal data we hold about your relocation account.</li>
                            <li><strong>Right to Rectification:</strong> Request correction of inaccurate addresses, contact numbers, or inventory details.</li>
                            <li><strong>Right to Erasure:</strong> Request deletion of your personal contact data post-completion of your relocation service and settlement of final accounts.</li>
                            <li><strong>Opt-Out of Marketing:</strong> Unsubscribe from promotional SMS or promotional WhatsApp updates at any time by contacting support.</li>
                        </ul>
                    </section>

                    <!-- Section 8: Contact Helpdesk -->
                    <section id="contact-dpo">
                        <h2><i class="bi bi-headset"></i> 8. Contact Our Privacy Helpdesk</h2>
                        <p>For any privacy-related questions, data update requests, or grievance redressal, please contact our Data Protection Office:</p>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <div class="trust-item-v2 h-100">
                                    <div class="trust-icon-v2">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-about-primary mb-1">Office Location</h6>
                                        <p class="text-about-muted mb-0 fs-7"><?= $company3 ?>, <?= $address ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="trust-item-v2 h-100">
                                    <div class="trust-icon-v2">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-about-primary mb-1">Call Helpline</h6>
                                        <a href="<?= $phonehtml ?>" class="fw-bold text-about-secondary fs-7 text-decoration-none"><?= $phone ?></a>
                                        <br>
                                        <a href="<?= $mailhtml ?>" class="text-about-muted fs-7 text-decoration-none"><?= $mail ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="about-cta-v2 py-5">
    <div class="container">
        <div class="cta-box-v2 text-white shadow-lg">
            <div class="cta-glow-v2"></div>
            <div class="row align-items-center g-4 position-relative">
                <div class="col-lg-7">
                    <h3 class="display-6 fw-black text-white mb-2">Book Safe &amp; Confidential Relocation!</h3>
                    <p class="text-white opacity-90 fw-medium mb-0 fs-6">Get an instant free price estimate with 100% zero-spam pledge and IBA-approved zero-damage shifting.</p>
                </div>
                <div class="col-lg-5 text-lg-end d-flex flex-wrap align-items-center justify-content-lg-end gap-3">
                    <a href="<?= site_url('contact-us') ?>" class="btn btn-outline-light fw-bold py-2.5 px-4 rounded-5 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-envelope-fill text-about-secondary"></i>
                        <span>CONTACT US</span>
                    </a>
                    <a href="#" class="btn btn-about-quote d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>GET FREE QUOTE</span>
                        <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
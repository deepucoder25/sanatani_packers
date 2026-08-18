<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms & Conditions',
    'bc_desc' => "Review the service terms, transit insurance coverage, cancellation rules, and booking guidelines of $company3.",
    'breadcrumbs' => [
        ['name' => 'Terms & Conditions']
    ]
]);
?>

<!-- Schema.org Terms of Service Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Terms and Conditions | <?= $company3 ?>",
  "description": "Terms of service, relocation booking guidelines, transit insurance rules, and cancellation policies of <?= $company3 ?>.",
  "publisher": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>"
  }
}
</script>

<!-- Main Terms & Conditions Content Section -->
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
                            <li><a href="#service-agreement" class="policy-toc-link active"><i class="bi bi-chevron-right"></i> 1. Service Agreement</a></li>
                            <li><a href="#pricing-terms" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 2. Pricing &amp; Quotes</a></li>
                            <li><a href="#packing-transit" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 3. Packing &amp; Transit</a></li>
                            <li><a href="#insurance" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 4. Transit Insurance</a></li>
                            <li><a href="#prohibited" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 5. Prohibited Items</a></li>
                            <li><a href="#payment-terms" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 6. Payment Terms</a></li>
                            <li><a href="#cancellation" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 7. Cancellation &amp; Refund</a></li>
                            <li><a href="#jurisdiction" class="policy-toc-link"><i class="bi bi-chevron-right"></i> 8. Legal Jurisdiction</a></li>
                        </ul>
                    </div>

                    <!-- Assistance Box -->
                    <div class="policy-contact-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="exp-icon-box" style="background: rgba(255,255,255,0.15); color: #fff;">
                                <i class="bi bi-file-earmark-text-fill fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-white mb-0">Booking Questions?</h6>
                                <small class="text-white opacity-75 fs-7">24/7 Move Helpdesk</small>
                            </div>
                        </div>
                        <p class="text-white opacity-85 fs-7 mb-3">Need clarification regarding transit insurance claims, LR bills, or cancellation rules?</p>
                        <a href="<?= $phonehtml ?>" class="btn btn-about-quote w-100 py-2 fs-7 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
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
                                <i class="bi bi-file-earmark-check"></i>
                                SERVICE GUARANTEE &amp; TERMS
                            </span>
                            <small class="text-about-muted fw-semibold">
                                <i class="bi bi-clock-history me-1"></i> Effective Date: <?= date('F d, Y') ?>
                            </small>
                        </div>
                        <h1 class="fw-black text-about-primary h2 mb-2">Terms and Conditions of Service</h1>
                        <p class="text-about-muted mb-0">Welcome to <?= $company3 ?>. By booking or utilizing our packing, moving, household shifting, or vehicle transportation services, you agree to comply with the terms and conditions set forth below.</p>
                    </div>

                    <!-- Highlight Box -->
                    <div class="policy-highlight-box">
                        <h5><i class="bi bi-patch-check-fill"></i> IBA Approved &amp; Transparent Billing Commitment</h5>
                        <p class="mb-0 fs-7 text-about-dark">All relocation contracts issued by <?= $company3 ?> come with 100% transparent pricing, formal Lorry Receipts (LR), GST invoices, and comprehensive inventory lists with no hidden charges.</p>
                    </div>

                    <!-- Section 1: Service Agreement -->
                    <section id="service-agreement">
                        <h2><i class="bi bi-hand-thumbs-up-fill"></i> 1. Service Agreement &amp; Acceptance</h2>
                        <p>These Terms and Conditions govern the contract between <?= $company3 ?> ("Company") and the customer ("Client") booking relocation services.</p>
                        <p>Submitting an online quote request, signing a physical inventory quotation, or paying a booking token advance constitutes full agreement and legal acceptance of these Terms and Conditions.</p>
                    </section>

                    <!-- Section 2: Pricing & Quotes -->
                    <section id="pricing-terms">
                        <h2><i class="bi bi-calculator-fill"></i> 2. Quotation &amp; Pricing Terms</h2>
                        <p>Quotations issued by <?= $company3 ?> are calculated based on distance, volume/weight of goods, packing material grade, labor requirements, vehicle type, and floor numbers at origin and destination.</p>

                        <h3>A. Final Charges &amp; Additional Services</h3>
                        <ul>
                            <li><strong>Pre-Move Survey:</strong> Estimates are based on the initial inventory list provided by the client or recorded during pre-move survey.</li>
                            <li><strong>Additional Inventory:</strong> Adding unlisted items or extra furniture on the packing day will incur proportional revisions in moving charges.</li>
                            <li><strong>Floor / Elevator Charges:</strong> Additional labor charges apply if high-rise floors lack working service elevators or if long carrying distance exceeds 50 meters from vehicle parking to door.</li>
                            <li><strong>Toll &amp; Octroi:</strong> Interstate toll taxes, green taxes, and state border octroi permit charges are included or specified transparently in the formal quotation.</li>
                        </ul>
                    </section>

                    <!-- Section 3: Packing & Transit -->
                    <section id="packing-transit">
                        <h2><i class="bi bi-truck"></i> 3. Packing, Transit &amp; Delivery Timeline</h2>
                        <p>We take extreme care using 5-layer protective packing materials (bubble wrap, corrugated sheets, stretch film, edge guards, and wooden crates).</p>

                        <div class="policy-highlight-box primary-theme">
                            <h5><i class="bi bi-clock-fill"></i> Delivery Timelines &amp; Transit Guidelines</h5>
                            <ul class="mb-0 fs-7">
                                <li><strong>Estimated Transit Time:</strong> Delivery dates provided are estimates based on standard highway traffic and weather conditions.</li>
                                <li><strong>Force Majeure:</strong> Delays caused by natural calamities, heavy floods, national strikes, highway blockades, or regional curfews are beyond company control.</li>
                                <li><strong>Customer Inspection:</strong> Clients must inspect consignment inventory upon doorstep unloading and sign the delivery receipt (LR Copy).</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Section 4: Transit Insurance -->
                    <section id="insurance">
                        <h2><i class="bi bi-shield-shaded"></i> 4. Transit Insurance &amp; Liability Coverage</h2>
                        <p>We strongly recommend optional <strong>All-Risk Transit Insurance</strong> (coverage against fire, road accidents, vehicle overturn, or theft) for all long-distance household and vehicle shifting:</p>

                        <h3>A. Insurance Policy Rules</h3>
                        <ul>
                            <li><strong>Insurance Charge:</strong> Transit insurance premium is charged at standard government rates (typically 1.5% to 3% of declared consignment value).</li>
                            <li><strong>Customer Valuation:</strong> The client must fill out the declared inventory value list accurately prior to packing.</li>
                            <li><strong>Excluded Claims:</strong> Internal electronic failure of appliances without external damage, owner-packed items (packed by client himself), and jewelry/cash are not covered under transit insurance policies.</li>
                            <li><strong>Claim Filing:</strong> Damage or loss claims must be reported within <strong>48 hours</strong> of consignment delivery along with photos/videos and original LR receipt.</li>
                        </ul>
                    </section>

                    <!-- Section 5: Prohibited Items -->
                    <section id="prohibited">
                        <h2><i class="bi bi-slash-circle-fill"></i> 5. Prohibited &amp; Restricted Goods</h2>
                        <p>For safety and statutory compliance under Indian Transport Laws, <?= $company3 ?> strictly refuses to transport the following items:</p>

                        <ul class="text-danger fw-semibold">
                            <li>Explosives, fireworks, ammunition, or arms.</li>
                            <li>Inflammable liquids, gas cylinders, petrol/diesel, paints, or kerosene.</li>
                            <li>Cash, currency, gold/silver jewelry, stock certificates, or valuable documents (Must be moved by client personally).</li>
                            <li>Perishable food items, plants, or live animals/pets.</li>
                            <li>Illegal contraband, narcotics, or unauthorized substances.</li>
                        </ul>

                        <p class="fs-7 text-about-muted">If prohibited goods are concealed inside boxes without company knowledge, the client assumes full legal and financial responsibility for any resulting damages, fines, or police seizures.</p>
                    </section>

                    <!-- Section 6: Payment Terms -->
                    <section id="payment-terms">
                        <h2><i class="bi bi-receipt"></i> 6. Payment Terms &amp; Billing</h2>
                        <p>Payments for packing and moving services must be cleared according to the agreed milestone structure:</p>

                        <ol>
                            <li><strong>Booking Advance:</strong> Token advance (10% to 20%) payable at the time of order confirmation.</li>
                            <li><strong>On Packing Completion:</strong> 80% payable upon completion of packing and loading into transport vehicle at origin.</li>
                            <li><strong>Balance Payment:</strong> Remaining balance payable prior to doorstep unloading at destination.</li>
                            <li><strong>Accepted Modes:</strong> UPI, Bank NEFT/RTGS, Credit/Debit Cards, or Cash.</li>
                        </ol>
                    </section>

                    <!-- Section 7: Cancellation & Refund -->
                    <section id="cancellation">
                        <h2><i class="bi bi-arrow-counterclockwise"></i> 7. Cancellation &amp; Refund Policy</h2>
                        <p>We understand that moving schedules can change. Our cancellation terms are structured as follows:</p>

                        <ul>
                            <li><strong>Cancellation 24+ Hours Before Move:</strong> 100% full refund of booking token advance.</li>
                            <li><strong>Cancellation Within 24 Hours:</strong> Token advance refunded minus nominal administrative processing charge (₹500 - ₹1000).</li>
                            <li><strong>Cancellation On Packing Day (Crew Dispatched):</strong> Vehicle positioning and labor dispatch charges deducted from advance.</li>
                            <li><strong>Refund Timeline:</strong> Approved refunds are credited to the client’s bank account within 3 to 5 business days.</li>
                        </ul>
                    </section>

                    <!-- Section 8: Legal Jurisdiction -->
                    <section id="jurisdiction">
                        <h2><i class="bi bi-building"></i> 8. Governing Law &amp; Jurisdiction</h2>
                        <p>These Terms and Conditions are governed by and construed in accordance with the laws of the Republic of India. Any disputes, claims, or legal proceedings arising out of or related to our relocation services shall be subject to the exclusive jurisdiction of the competent courts in <strong>Deoghar, Jharkhand</strong>.</p>

                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div class="trust-item-v2 h-100">
                                    <div class="trust-icon-v2">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-about-primary mb-1">Move Coordinator</h6>
                                        <a href="<?= $phonehtml ?>" class="fw-bold text-about-secondary fs-7 text-decoration-none"><?= $phone ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="trust-item-v2 h-100">
                                    <div class="trust-icon-v2">
                                        <i class="bi bi-envelope-check-fill"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-about-primary mb-1">Billing Support</h6>
                                        <a href="<?= $mailhtml ?>" class="fw-bold text-about-primary fs-7 text-decoration-none"><?= $mail ?></a>
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
                    <h3 class="display-6 fw-black text-white mb-2">Have Questions About Your Move?</h3>
                    <p class="text-white opacity-90 fw-medium mb-0 fs-6">Get free advice from our relocation experts and instant transparent quotes for home or vehicle shifting.</p>
                </div>
                <div class="col-lg-5 text-lg-end d-flex flex-wrap align-items-center justify-content-lg-end gap-3">
                    <a href="<?= site_url('contact-us') ?>" class="btn btn-outline-light fw-bold py-2.5 px-4 rounded-5 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill text-about-secondary"></i>
                        <span>CALL SUPPORT</span>
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
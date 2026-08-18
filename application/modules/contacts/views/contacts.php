<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 1. Breadcrumbs Header Banner -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => "Get in touch with $company3 for instant moving quotes, 24/7 customer support, branch office locations & expert relocation advice.",
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Schema.org ContactPage Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Us | <?= $company3 ?>",
  "description": "Contact <?= $company3 ?> for home shifting, office relocation, vehicle transport, and commercial logistics quotes across India.",
  "publisher": {
    "@type": "Organization",
    "name": "<?= $company3 ?>",
    "url": "<?= site_url() ?>",
    "telephone": "<?= @$phone ?>",
    "email": "<?= @$email ?>"
  }
}
</script>

<!-- 2. Quick Contact Channels Grid -->
<section class="cnt-channels-section py-5">
    <div class="container py-lg-3">
        <div class="row g-4">
            <!-- Channel 1: Phone Support (Light Blue) -->
            <div class="col-sm-6 col-lg-3">
                <a href="<?= $phonehtml ?>" class="text-decoration-none">
                    <div class="cnt-channel-card cnt-channel-blue">
                        <div class="cnt-channel-icon">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <h5 class="fw-bold text-cnt-primary mb-1 fs-6">24/7 Customer Care</h5>
                        <p class="text-cnt-muted fs-7 mb-2">Instant phone consultation &amp; support</p>
                        <span class="fw-bold text-cnt-primary fs-6 d-inline-flex align-items-center gap-1">
                            <span><?= $phone ?></span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Channel 2: WhatsApp Chat (Light Green) -->
            <div class="col-sm-6 col-lg-3">
                <a href="<?= $whatsapphtml ?>&text=Hi%20<?= urlencode($company3) ?>,%20I%20need%20a%20moving%20quotation." target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                    <div class="cnt-channel-card cnt-channel-green">
                        <div class="cnt-channel-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <h5 class="fw-bold text-cnt-primary mb-1 fs-6">WhatsApp Dispatch</h5>
                        <p class="text-cnt-muted fs-7 mb-2">Live chat &amp; instant photo quotes</p>
                        <span class="fw-bold text-success fs-6 d-inline-flex align-items-center gap-1">
                            <span>Chat on WhatsApp</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Channel 3: Official Email (Light Orange) -->
            <div class="col-sm-6 col-lg-3">
                <a href="<?= $emailhtml ?>" class="text-decoration-none">
                    <div class="cnt-channel-card cnt-channel-orange">
                        <div class="cnt-channel-icon">
                            <i class="bi bi-envelope-at-fill"></i>
                        </div>
                        <h5 class="fw-bold text-cnt-primary mb-1 fs-6">Official Email</h5>
                        <p class="text-cnt-muted fs-7 mb-2">Send corporate RFQs &amp; complaints</p>
                        <span class="fw-bold text-cnt-secondary fs-6 text-truncate max-w-100 fs-7 d-inline-flex align-items-center gap-1">
                            <span><?= $email ?></span>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Channel 4: IBA Approved Status (Light Purple) -->
            <div class="col-sm-6 col-lg-3">
                <div class="cnt-channel-card cnt-channel-purple">
                    <div class="cnt-channel-icon">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h5 class="fw-bold text-cnt-primary mb-1 fs-6">IBA Approved &amp; GST</h5>
                    <p class="text-cnt-muted fs-7 mb-2">Bank relocation bills &amp; 100% insurance</p>
                    <span class="badge bg-purple-subtle text-purple fw-bold px-2.5 py-1.5 rounded-pill fs-7">
                        <i class="bi bi-check-circle-fill me-1"></i> Verified &amp; Certified
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Main Interactive Contact Hub (Form + HQ Card) -->
<section class="cnt-hub-section py-5">
    <div class="container py-lg-4">
        <div class="row g-4 align-items-stretch">
            <!-- Left Column: Quick Inquiry / Booking Form -->
            <div class="col-lg-7">
                <div class="cnt-form-card">
                    <div class="cnt-section-badge mb-3">
                        <i class="bi bi-send-fill fs-6 text-cnt-secondary"></i>
                        <span>GET AN INSTANT PRICE QUOTE</span>
                    </div>

                    <h2 class="cnt-fw-black text-cnt-primary display-6 mb-2">Send Us A Message</h2>
                    <p class="text-cnt-muted mb-4 fs-6">Fill in your relocation details below and our packing expert will call you back within 15 minutes with a zero-obligation quotation.</p>

                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small mb-1.5">Your Full Name <span class="text-danger">*</span></label>
                                <div class="cnt-input-group-stylish">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <input type="text" name="name" class="cnt-input-field" placeholder="e.g. Rahul Sharma" required>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small mb-1.5">Phone / Mobile Number <span class="text-danger">*</span></label>
                                <div class="cnt-input-group-stylish">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <input type="tel" name="phone" class="cnt-input-field" placeholder="e.g. 9876543210" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small mb-1.5">Email Address</label>
                                <div class="cnt-input-group-stylish">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <input type="email" name="email" class="cnt-input-field" placeholder="e.g. rahul@example.com">
                                </div>
                            </div>

                            <!-- Required Service -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small mb-1.5">Required Service</label>
                                <div class="cnt-input-group-stylish">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-truck-front-fill"></i>
                                    </div>
                                    <select name="service" class="cnt-input-field form-select border-0">
                                        <option value="Home Shifting">Household Shifting</option>
                                        <option value="Bike Transportation">Bike Transportation</option>
                                        <option value="Car Transportation">Car Transportation</option>
                                        <option value="Office Relocation">Office Relocation</option>
                                        <option value="Packing & Moving">Packing &amp; Moving</option>
                                        <option value="Loading & Unloading">Loading &amp; Unloading</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label class="form-label fw-bold text-dark small mb-1.5">Your Shifting Message / Requirements</label>
                                <div class="cnt-input-group-stylish align-items-start">
                                    <div class="cnt-input-addon pt-3">
                                        <i class="bi bi-chat-left-text-fill"></i>
                                    </div>
                                    <textarea name="message" class="cnt-input-field" rows="4" placeholder="Tell us your pickup city, destination city, and preferred moving date..."></textarea>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="cnt-contact-submit-btn w-100 d-inline-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-send-fill"></i> Send Message &amp; Get Free Quote
                                </button>
                            </div>
                        </div>

                        <div id="contactformresults" class="mt-3"></div>
                    </form>

                    <!-- Form Result Message Container -->
                    <div id="resultContactFormPage" class="mt-3"></div>
                </div>
            </div>

            <!-- Right Column: Corporate HQ & Trust Card -->
            <div class="col-lg-5">
                <div class="cnt-info-card h-100">
                    <div class="cnt-info-pattern"></div>
                    <div class="position-relative z-1 d-flex flex-column justify-content-between h-100">
                        <div>
                            <div class="cnt-section-badge mb-3">
                                <i class="bi bi-building-fill text-cnt-secondary me-1"></i>
                                <span>HEADQUARTERS &amp; INFO</span>
                            </div>

                            <h3 class="cnt-fw-black text-cnt-primary display-6 mb-4">Corporate Office</h3>

                            <!-- Mini Info Box 1: Address -->
                            <div class="cnt-detail-box mb-3">
                                <div class="cnt-detail-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold text-cnt-primary mb-1 fs-6">Head Office Location</h6>
                                    <p class="text-cnt-muted fs-7 mb-0 lh-base">
                                        <?= $address ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Mini Info Box 2: Operating Hours -->
                            <div class="cnt-detail-box mb-3">
                                <div class="cnt-detail-icon">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <h6 class="fw-bold text-cnt-primary mb-0 fs-6">Operating Hours</h6>
                                        <span class="badge bg-success-subtle text-success fw-bold fs-8"><i class="bi bi-dot"></i> Open Now</span>
                                    </div>
                                    <p class="text-cnt-muted fs-7 mb-1">Monday – Sunday: 8:00 AM – 10:00 PM</p>
                                    <small class="text-cnt-secondary fw-semibold fs-7"><i class="bi bi-truck me-1"></i> 24/7 Highway Dispatch</small>
                                </div>
                            </div>

                            <!-- Mini Info Box 3: IBA & License -->
                            <div class="cnt-detail-box mb-0">
                                <div class="cnt-detail-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-cnt-primary mb-1 fs-6">Government &amp; IBA Registration</h6>
                                    <p class="text-cnt-muted fs-7 mb-0 lh-base">IBA Code: Approved &bull; GST Registration Verified &bull; ISO 9001:2015 Certified Relocation Provider.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
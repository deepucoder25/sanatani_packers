<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content qte-modal-content">
            <!-- Modal Header with SVG Curved Accent Underline -->
            <div class="contact-form-header qte-modal-header d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="qte-modal-title mb-1" id="qteModalLabel">Get a free quote</h4>
                    <svg class="qte-header-curve" width="130" height="8" viewBox="0 0 130 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5.5C35 2 95 2 128 5.5" stroke="var(--secondary-color)" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <button type="button" class="qte-close-btn" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Form Body -->
            <form id="quotemodal" class="ajax-form qte-modal-body" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row g-3">
                    <!-- Your Name -->
                    <div class="col-md-6">
                        <div class="qte-input-group">
                            <div class="qte-input-icon">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <input type="text" class="qte-input-control" name="name" placeholder="Your Name" required>
                        </div>
                    </div>

                    <!-- Mobile Number -->
                    <div class="col-md-6">
                        <div class="qte-input-group">
                            <div class="qte-input-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <input type="tel" class="qte-input-control" name="phone" placeholder="Mobile Number" required>
                        </div>
                    </div>

                    <!-- Your Email -->
                    <div class="col-md-12">
                        <div class="qte-input-group">
                            <div class="qte-input-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <input type="email" class="qte-input-control" name="email" placeholder="Your Email">
                        </div>
                    </div>

                    <!-- From City -->
                    <div class="col-6">
                        <div class="qte-input-group">
                            <div class="qte-input-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <input type="text" class="qte-input-control" name="mfrom" placeholder="From City">
                        </div>
                    </div>

                    <!-- To City -->
                    <div class="col-6">
                        <div class="qte-input-group">
                            <div class="qte-input-icon">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <input type="text" class="qte-input-control" name="mto" placeholder="To City">
                        </div>
                    </div>

                    <!-- Relocation Details Message -->
                    <div class="col-12">
                        <div class="qte-input-group align-items-start">
                            <div class="qte-input-icon pt-2.5">
                                <i class="bi bi-chat-left-text-fill"></i>
                            </div>
                            <textarea name="message" rows="4" class="qte-input-control" placeholder="Describe your relocation needs..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                    <button id="submitbquotemodal" type="submit" class="qte-btn-submit d-inline-flex align-items-center gap-2">
                        <span>Get My Free Quote</span>
                        <i class="bi bi-send-fill fs-6"></i>
                    </button>
                    <button type="reset" onclick="document.getElementById('resultquotemodal').innerHTML = '';" class="qte-btn-reset">
                        Clear Form
                    </button>
                </div>

                <div id="resultquotemodal" class="mt-3"></div>
            </form>
        </div>
    </div>
</div>

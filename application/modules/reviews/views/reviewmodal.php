<!-- Review Modal -->
<div class="modal fade custom-modal" id="rvwmdl" tabindex="-1" role="dialog" aria-labelledby="rvwmdl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content review-modal-card">
            
            <!-- Header Banner -->
            <div class="review-modal-header">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="review-modal-title"><i class="bi bi-chat-square-heart me-2"></i>Leave us Feedback, Suggestion, or Complaints</h4>
                        <p class="review-modal-subtitle mb-0">Your feedback helps us deliver an exceptional moving experience</p>
                    </div>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4">
                <form id="reviewsform" enctype="multipart/form-data" action="javascript:void(0);" onsubmit="event.preventDefault(); return false;">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label class="custom-field-label">Full Name <span class="text-danger">*</span></label>
                                <div class="form-icon-wrap">
                                    <i class="bi bi-person input-icon"></i>
                                    <input type="text" class="form-control custom-input" id="name" name="name" placeholder="Full Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label class="custom-field-label">Email Address <span class="text-danger">*</span></label>
                                <div class="form-icon-wrap">
                                    <i class="bi bi-envelope input-icon"></i>
                                    <input type="email" class="form-control custom-input" name="email" placeholder="Email Address" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label class="custom-field-label">Review Title</label>
                                <div class="form-icon-wrap">
                                    <i class="bi bi-chat-left-dots input-icon"></i>
                                    <input type="text" class="form-control custom-input" name="title" placeholder="Review Title">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label class="custom-field-label">Ratings <span class="text-danger">*</span></label>
                                <div class="rating-picker-wrapper">
                                    <div class="reviews-rating">
                                        <input type="radio" name="stars" value="5" id="rating-5"><label for="rating-5" title="5 Stars - Excellent"></label>
                                        <input type="radio" name="stars" value="4" id="rating-4"><label for="rating-4" title="4 Stars - Very Good"></label>
                                        <input type="radio" name="stars" value="3" id="rating-3"><label for="rating-3" title="3 Stars - Average"></label>
                                        <input type="radio" name="stars" value="2" id="rating-2"><label for="rating-2" title="2 Stars - Poor"></label>
                                        <input type="radio" name="stars" value="1" id="rating-1"><label for="rating-1" title="1 Star - Poor"></label>
                                    </div>
                                    <span class="rating-hint-text" id="ratingHintText">Click stars to rate</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label class="custom-field-label">Write Your Experience <span class="text-danger">*</span></label>
                                <div class="form-icon-wrap">
                                    <i class="bi bi-pencil-square input-icon textarea-icon"></i>
                                    <textarea class="form-control custom-input custom-textarea" name="desc" rows="3" placeholder="Write Your Experience" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label class="custom-field-label">Add Image <small class="text-muted">(optional)</small></label>
                                <div class="custom-file-upload-box" onclick="document.getElementById('image').click();">
                                    <input type="file" name="img" id="image" class="d-none" accept="image/*" onchange="handleFileSelect(this)">
                                    <div class="upload-box-content">
                                        <div class="upload-icon-circle">
                                            <i class="bi bi-cloud-arrow-up"></i>
                                        </div>
                                        <div class="upload-text">
                                            <span class="upload-main-text" id="fileNameDisplay">Click to browse or attach image</span>
                                            <span class="upload-sub-text">PNG, JPG or WEBP image file</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div id="result"></div>
                            <div class="d-flex justify-content-end gap-2 mt-2">
                                <button type="button" onclick="resetForm();" class="btn btn-clear-custom">
                                    Clear <i class="bi bi-trash ms-1"></i>
                                </button>
                                <button id="submitbtn" type="submit" class="btn btn-submit-custom">
                                    Submit <i class="bi bi-send ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
(function() {
    function initReviewModal() {
        var reviewsForm = document.getElementById('reviewsform');
        if (!reviewsForm) return;

        reviewsForm.addEventListener('submit', function(event) {
            event.preventDefault();
            submitReviewForm();
        });

        var starInputs = document.querySelectorAll('input[name="stars"]');
        var hintText = document.getElementById('ratingHintText');
        var hints = {
            '5': '5 Stars - Excellent!',
            '4': '4 Stars - Very Good!',
            '3': '3 Stars - Average',
            '2': '2 Stars - Poor',
            '1': '1 Star - Poor'
        };

        starInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                if (hintText) {
                    hintText.textContent = hints[this.value] || 'Click stars to rate';
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initReviewModal);
    } else {
        initReviewModal();
    }
})();

function submitReviewForm() {
    var form = document.getElementById('reviewsform');
    var resultDiv = document.getElementById('result');
    var submitBtn = document.getElementById('submitbtn');
    if (!form || !resultDiv) return;

    if (form.dataset.submitting === "true") return;

    var formData = new FormData(form);

    var name = (formData.get('name') || '').toString().trim();
    var email = (formData.get('email') || '').toString().trim();
    var desc = (formData.get('desc') || '').toString().trim();

    if (!name || !email || !desc) {
        resultDiv.innerHTML = '<div class="alert alert-warning py-2 m-0"><i class="bi bi-exclamation-triangle-fill me-1"></i> Please fill in all required fields (Name, Email, and Experience).</div>';
        return;
    }

    form.dataset.submitting = "true";
    if (submitBtn) submitBtn.disabled = true;

    resultDiv.innerHTML = '<div class="alert alert-info py-2 m-0"><i class="bi bi-hourglass-split me-1"></i> Submitting your review, please wait...</div>';

    fetch("<?php echo site_url('reviews/review') ?>", {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        if (data && data.err === 0) {
            resultDiv.innerHTML = "<div class='alert alert-success py-2 m-0'><i class='bi bi-check-circle-fill me-1'></i> " + (data.msg || "Success! Thank you for your review!") + "</div>";
            setTimeout(function() {
                closeReviewModal();
            }, 1200);
        } else {
            resultDiv.innerHTML = "<div class='alert alert-danger py-2 m-0'><i class='bi bi-exclamation-triangle-fill me-1'></i> " + (data ? data.msg : "Something went wrong.") + "</div>";
            form.dataset.submitting = "false";
            if (submitBtn) submitBtn.disabled = false;
        }
    })
    .catch(function(error) {
        console.error("Review submission error:", error);
        resultDiv.innerHTML = '<div class="alert alert-danger py-2 m-0"><i class="bi bi-exclamation-triangle-fill me-1"></i> An error occurred while posting your review. Please try again later.</div>';
        form.dataset.submitting = "false";
        if (submitBtn) submitBtn.disabled = false;
    });
}

function handleFileSelect(input) {
    var display = document.getElementById('fileNameDisplay');
    if (display && input.files && input.files[0]) {
        display.innerHTML = '<i class="bi bi-image text-success me-1"></i> Attached: ' + input.files[0].name;
    }
}

function closeReviewModal() {
    var modalEl = document.getElementById('rvwmdl');
    if (modalEl) {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            var modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
            if (modalInstance) modalInstance.hide();
        } else if (typeof $ !== 'undefined' && $.fn && $.fn.modal) {
            $('#rvwmdl').modal('hide');
        } else {
            modalEl.classList.remove('show');
            modalEl.style.display = 'none';
            document.body.classList.remove('modal-open');
            var backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(function(b) { b.remove(); });
        }
    }
    resetForm();
}

function resetForm() {
    var form = document.getElementById('reviewsform');
    if (form) {
        form.reset();
        form.dataset.submitting = "false";
    }
    var submitBtn = document.getElementById('submitbtn');
    if (submitBtn) submitBtn.disabled = false;
    var display = document.getElementById('fileNameDisplay');
    if (display) display.textContent = 'Click to browse or attach image';
    var hintText = document.getElementById('ratingHintText');
    if (hintText) hintText.textContent = 'Click stars to rate';
    var resultDiv = document.getElementById('result');
    if (resultDiv) resultDiv.innerHTML = '';
}

// Clear any browser POST history so refreshing the page never prompts "Confirm Form Resubmission"
if (window.history && window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>



 


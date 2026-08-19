<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Track Consignment',
    'bc_h1' => 'Track Your Consignment',
    'bc_desc' => 'Track your shipment in real-time with live GPS location updates, consignment status & estimated delivery timelines across India.'
]); 
?>

<section class="track-page-section">
    <div class="container">
        <div class="row">
            <!-- Center Column for Premium Tracking Card -->
            <div class="col-lg-10 col-xl-9 mx-auto">

                <!-- 1. Search Box Card -->
                <div class="track-search-card text-center mb-4">
                    <div class="cnt-section-badge mb-2">
                        <i class="bi bi-geo-alt-fill me-1"></i> LIVE CONSIGNMENT TRACKING
                    </div>

                    <h2 class="track-title mb-2">
                        Track Your <span class="text-cnt-secondary">Shipment</span>
                    </h2>
                    <p class="track-subtitle">
                        Enter your LR / consignment tracking number below to view real-time location updates, transit status, and estimated delivery schedule.
                    </p>

                    <form action="" id="tracking_form" class="mx-auto" style="max-width: 650px;">
                        <div class="track-input-group">
                            <i class="bi bi-box-seam-fill track-input-icon"></i>
                            <input type="text" class="form-control track-input-field flex-grow-1" id="trackingNumber" name="trackingNumber" placeholder="Enter Tracking Number (e.g. 123456)" required>
                            <button type="submit" class="track-submit-btn" id="tracking_submit">
                                <i class="bi bi-search"></i> <span>Track Now</span>
                            </button>
                            <button type="reset" class="track-reset-btn ms-2 d-none d-sm-flex" title="Reset">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        <div id="statusMessage" class="mt-3 text-start"></div>
                    </form>

                    <!-- Feature Badges -->
                    <div class="track-badge-row">
                        <div class="track-feature-badge">
                            <i class="bi bi-shield-check"></i> 100% Verified Tracking
                        </div>
                        <div class="track-feature-badge">
                            <i class="bi bi-lightning-charge-fill"></i> Instant Status Updates
                        </div>
                        <div class="track-feature-badge">
                            <i class="bi bi-truck"></i> Pan-India Coverage
                        </div>
                    </div>
                </div>

                <!-- 2. Tracking Details Wrapper (hidden until data loads) -->
                <div class="contact-tracking-details-card mt-4" style="display: none;">
                    <div class="track-details-wrapper">
                        
                        <!-- Header Bar -->
                        <div class="track-details-header">
                            <h4 class="track-details-title">
                                <i class="bi bi-diagram-3-fill text-cnt-secondary"></i>
                                Shipment Status Details
                            </h4>
                            <span class="track-status-pill-active">
                                <span class="pm-pulse-dot me-2"></span> Active Cargo Status
                            </span>
                        </div>

                        <!-- 6 Info Grid Cards -->
                        <div class="track-info-grid">
                            <div class="track-info-box">
                                <div class="track-info-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="track-info-content">
                                    <span class="track-info-label">Customer Name</span>
                                    <span class="track-info-val" id="customerName">-</span>
                                </div>
                            </div>

                            <div class="track-info-box">
                                <div class="track-info-icon">
                                    <i class="bi bi-file-text-fill"></i>
                                </div>
                                <div class="track-info-content">
                                    <span class="track-info-label">LR Number</span>
                                    <span class="track-info-val" id="lrNumber">-</span>
                                </div>
                            </div>

                            <div class="track-info-box">
                                <div class="track-info-icon">
                                    <i class="bi bi-truck-front-fill"></i>
                                </div>
                                <div class="track-info-content">
                                    <span class="track-info-label">Shipment Type</span>
                                    <span class="track-info-val" id="shipmentType">-</span>
                                </div>
                            </div>

                            <div class="track-info-box">
                                <div class="track-info-icon">
                                    <i class="bi bi-geo-alt-fill text-primary"></i>
                                </div>
                                <div class="track-info-content">
                                    <span class="track-info-label">Origin</span>
                                    <span class="track-info-val" id="origin">-</span>
                                </div>
                            </div>

                            <div class="track-info-box">
                                <div class="track-info-icon">
                                    <i class="bi bi-pin-map-fill text-cnt-secondary"></i>
                                </div>
                                <div class="track-info-content">
                                    <span class="track-info-label">Destination</span>
                                    <span class="track-info-val" id="destination">-</span>
                                </div>
                            </div>

                            <div class="track-info-box">
                                <div class="track-info-icon">
                                    <i class="bi bi-calendar2-check-fill text-success"></i>
                                </div>
                                <div class="track-info-content">
                                    <span class="track-info-label">Expected Delivery</span>
                                    <span class="track-info-val text-success">
                                        <span id="ex_del_date">-</span> <i class="bi bi-check-circle-fill contact-tracking-success ms-1"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar Timeline Section -->
                        <div class="track-timeline-section">
                            <div class="contact-tracking-progress">
                                <div class="contact-progress-bar-container">
                                    <div class="contact-progress">
                                        <div class="contact-progress-bar" role="progressbar"></div>
                                    </div>
                                    <div class="contact-progress-steps">
                                        <div class="contact-step step-processing">
                                            <div class="contact-step-icon"><i class="bi bi-gear-fill"></i></div>
                                            <div class="contact-step-label">Process</div>
                                            <div class="contact-step-date" id="processing-date"></div>
                                        </div>
                                        <div class="contact-step step-picked">
                                            <div class="contact-step-icon"><i class="bi bi-box-seam"></i></div>
                                            <div class="contact-step-label">Picked</div>
                                            <div class="contact-step-date" id="picked-date"></div>
                                        </div>
                                        <div class="contact-step step-transit">
                                            <div class="contact-step-icon"><i class="bi bi-truck"></i></div>
                                            <div class="contact-step-label">In Transit</div>
                                            <div class="contact-step-date" id="transit-date"></div>
                                        </div>
                                        <div class="contact-step step-delivered">
                                            <div class="contact-step-icon"><i class="bi bi-check-lg"></i></div>
                                            <div class="contact-step-label">Delivered</div>
                                            <div class="contact-step-date" id="delivered-date"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking History Table -->
                        <div class="track-history-section">
                            <h5 class="track-section-title-sm">
                                <i class="bi bi-clock-history text-cnt-secondary"></i> TRACKING HISTORY
                            </h5>
                            <div class="track-history-table">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th>STATUS</th>
                                                <th>DATE</th>
                                                <th>EVENT / REMARKS</th>
                                            </tr>
                                        </thead>
                                        <tbody id="trackingTableBody">
                                            <!-- Dynamic Rows Injected by JS -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Support Callout Footer -->
                        <div class="track-support-footer">
                            <div class="track-support-info">
                                <div class="track-support-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-cnt-primary mb-1">Need Direct Support for your Consignment?</h6>
                                    <p class="text-cnt-muted small mb-0">Call our 24/7 helpdesk or get in touch with our operations team.</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <a href="<?= $phonehtml ?>" class="btn btn-warning btn-sm rounded-pill px-3 py-2 fw-bold text-dark d-inline-flex align-items-center gap-1 shadow-sm">
                                    <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                                </a>
                                <a href="<?= site_url('contacts') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-envelope-fill"></i> Contact Us
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info">Please wait...</div>');
            $(this).prop('disabled', true);
            $('.contact-tracking-details-card').hide();

            $.post("<?php echo site_url('tracking/track') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').show();

                    // Populate details
                    $('#customerName').text(response.main.c_name);
                    $('#lrNumber').text(response.main.tracking_id);
                    $('#shipmentType').text(response.main.ship_type);
                    $('#origin').text(response.main.ship_from);
                    $('#destination').text(response.main.ship_to);
                    $('#ex_del_date').text(response.main.ex_del_date);

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date);
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date);
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date);
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date);
                    }

                    // Set active step
                    $('.contact-step').removeClass('active');
                    if (activeStep > 0) {
                        $(`.contact-step:nth-child(${activeStep})`).addClass('active');
                    }

                    // Update progress bar width
                    $('.contact-progress-bar').css('width', progress + '%');

                    // Build tracking table
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            $('#trackingTableBody').append(`
                                <tr>
                                    <td>${steps[item.type]}</td>
                                    <td>${item.date}</td>
                                    <td>${item.remarks}</td>
                                </tr>
                            `);
                        });
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger">${response.message}</div>`);
                }
            }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
                $('#tracking_submit').prop('disabled', false);
                $('#statusMessage').html('<div class="alert alert-danger">Error: ' + textStatus + ' - ' + errorThrown + '</div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('');
            $('#trackingTableBody').empty();
        });
    });
</script>

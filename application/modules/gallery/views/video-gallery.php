<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Video Gallery',
    'bc_h1' => 'Video Gallery',
    'bc_desc' => 'Watch live video demonstrations of our zero-damage packing techniques, heavy furniture handling, vehicle transport & shifting operations.'
]); 
?>

<!-- Main Page Content Section (col-12 Full Width) -->
<section class="gal-page-section">
    <div class="container">
        
        <!-- Header Card (col-12) -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="gal-header-card">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <div class="gal-section-badge mb-2">
                                <i class="bi bi-play-circle-fill me-1"></i> FIELD OPERATION VIDEOS
                            </div>
                            <h2 class="gal-title mb-2">
                                Moving &amp; Transport <span class="text-gal-secondary">Video Gallery</span>
                            </h2>
                            <p class="gal-subtitle mb-0">
                                At <strong><?= $company3 ?></strong>, we maintain complete transparency in our logistics operations. Watch our field videos to see how our trained professionals handle heavy-duty cargo loading, packing, and vehicle transportation.
                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <a href="<?= site_url('photo-gallery') ?>" class="gal-filter-btn">
                                <i class="bi bi-camera-fill text-gal-secondary"></i> View Photo Gallery
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Videos Grid (col-12) -->
        <div class="row g-4 mb-5">
            <?php if(!empty($videos)): ?>
                <?php foreach($videos as $video): ?>
                <div class="col-lg-6 col-12">
                    <div class="gal-video-card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="<?= $video->video_url ?>" title="<?= htmlspecialchars($video->title) ?>" allowfullscreen class="border-0"></iframe>
                        </div>
                        <div class="p-3">
                            <h5 class="gal-photo-title mb-0"><?= htmlspecialchars($video->title) ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center text-muted py-4">
                    <p class="mb-0">No videos currently available in the video gallery database.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Quality Commitment Banner -->
        <div class="row">
            <div class="col-12">
                <div class="gal-quality-banner d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="pm-title-icon-box" style="width: 46px; height: 46px; font-size: 1.3rem;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-gal-primary mb-1">Authentic On-Site Footage</h5>
                            <p class="text-gal-muted small mb-0">All video clips are recorded on-site during actual shifting operations. We do not use simulated or stock footage.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" class="btn btn-warning btn-sm rounded-pill px-4 py-2 fw-bold text-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-lightning-charge-fill me-1"></i> Get Free Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

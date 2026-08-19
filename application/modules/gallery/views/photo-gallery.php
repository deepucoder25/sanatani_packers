<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Photo Gallery',
    'bc_h1' => 'Photo Gallery',
    'bc_desc' => 'Explore visual highlights of our multi-layer protective packing, enclosed car carriers, warehouse storage & expert relocation team in action.'
]); 
?>

<!-- Main Page Content Section (col-12 Full Width) -->
<section class="gal-page-section">
    <div class="container">
        
        <!-- 1. Header Card (col-12) -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="gal-header-card">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <div class="gal-section-badge mb-2">
                                <i class="bi bi-camera-fill me-1"></i> LOGISTICS OPERATIONS IN ACTION
                            </div>
                            <h2 class="gal-title mb-2">
                                Our Moving &amp; Transport <span class="text-gal-secondary">Photo Gallery</span>
                            </h2>
                            <p class="gal-subtitle mb-0">
                                Take a look at our on-field photos demonstrating our dedication to safety, multi-layer protective bubble wrapping, containerized truck fleets, and organized supply chain management across India.
                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <a href="<?= site_url('video-gallery') ?>" class="gal-filter-btn">
                                <i class="bi bi-play-circle-fill text-gal-secondary"></i> Watch Video Gallery
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Full-Width Photos Grid (col-12) -->
        <div class="row g-4 mb-5">
            <?php if(!empty($photos)): ?>
                <?php foreach($photos as $photo): ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="gal-photo-card">
                        <div class="gal-img-wrapper">
                            <?php if(!empty($photo->album_name)): ?>
                            <span class="gal-album-tag"><?= htmlspecialchars($photo->album_name) ?></span>
                            <?php else: ?>
                            <span class="gal-album-tag">Logistics Showcase</span>
                            <?php endif; ?>
                            
                            <img loading="lazy" src="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>" class="gal-photo-img" alt="<?= htmlspecialchars($photo->title) ?>">
                            
                            <div class="gal-img-overlay">
                                <a href="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>" target="_blank" class="gal-zoom-btn" title="View Full Image">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                            </div>
                        </div>

                        <div class="gal-card-body">
                            <h5 class="gal-photo-title"><?= htmlspecialchars($photo->title) ?></h5>
                            <div class="gal-photo-meta">
                                <i class="bi bi-shield-check text-gal-secondary me-1"></i>
                                <span>Verified Operations</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="p-4 bg-white rounded-4 border shadow-sm max-width-750 mx-auto">
                        <i class="bi bi-images text-gal-secondary fs-1 mb-2 d-block"></i>
                        <h5 class="fw-bold text-gal-primary mb-2">No Gallery Photos Added Yet</h5>
                        <p class="text-gal-muted mb-0">Photos uploaded via the Admin Panel will appear here automatically.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- 3. Quality Assurance Banner (col-12) -->
        <div class="row">
            <div class="col-12">
                <div class="gal-quality-banner d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="pm-title-icon-box" style="width: 46px; height: 46px; font-size: 1.3rem;">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-gal-primary mb-1">100% Real On-Field Photos &mdash; Zero Stock Images</h5>
                            <p class="text-gal-muted small mb-0">All photographs shown demonstrate our actual Sanatani Packers and Movers crew, dedicated truck fleets, and 5-layer packing materials in action.</p>
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

<?php 
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} 

if (!empty($lat) && !empty($lon)) { ?>
  <!-- Styled Map Wrapper Card -->
  <div class="pm-map-wrapper-card h-100 d-flex flex-column justify-content-between">
    <!-- Header Banner -->
    <div class="pm-map-header-bar p-3 p-md-4 d-flex flex-wrap align-items-center justify-content-between gap-2">
      <div>
        <div class="pm-section-badge mb-1">
          <i class="bi bi-geo-alt-fill text-pm-secondary me-1"></i>
          <span>SERVICE LOCATION HUB</span>
        </div>
        <h4 class="pm-map-title mb-0">
          Relocation Coverage Map — <span class="text-pm-secondary"><?= htmlspecialchars($city) ?></span>
        </h4>
      </div>

      <div class="d-flex align-items-center gap-2">
        <span class="pm-map-status-pill">
          <span class="pm-pulse-dot me-1"></span> Active Local Operations
        </span>
      </div>
    </div>

    <!-- Map Container -->
    <div class="pm-map-iframe-container position-relative flex-grow-1 d-flex flex-column">
      <iframe
          width="100%"
          height="100%"
          style="min-height: 320px;"
          class="pm-city-map-iframe flex-grow-1"
          loading="lazy"
          allowfullscreen
          src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
      </iframe>

      <!-- Map Bottom Info Bar Overlay -->
      <div class="pm-map-bottom-bar p-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-2 text-white">
          <i class="bi bi-truck text-warning fs-5"></i>
          <span class="small fw-semibold">Doorstep Pickup &amp; Safe Packing Available Across All Pin Codes in <strong><?= htmlspecialchars($city) ?></strong></span>
        </div>
        <a href="<?= $phonehtml ?>" class="btn btn-warning btn-sm rounded-pill px-3 py-1 fw-bold text-dark d-inline-flex align-items-center gap-1 shadow-sm ms-auto">
          <i class="bi bi-telephone-fill"></i> Contact <?= htmlspecialchars($city) ?> Hub
        </a>
      </div>
    </div>
  </div>
<?php } ?>
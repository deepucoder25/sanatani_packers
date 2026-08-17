<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            // Need absolute URL for schema if it's relative, but site_url() or base_url() is often used in $crumb['url']
            // If it's just a fragment, we assume it's correctly formatted by the controller/view.
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Section -->
<section class="dynamic-bc-section">
    <div class="bc-glow-left"></div>
    <div class="container position-relative text-center" style="z-index: 2;">
        <nav class="dyn-bc-nav" aria-label="breadcrumb">
            <div class="bc-pill-wrapper">
                <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill me-1"></i> Home</a>
                <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                    <?php foreach ($breadcrumbs as $crumb): ?>
                        <i class="bi bi-chevron-right dyn-bc-sep"></i>
                        <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                            <a href="<?= $crumb['url'] ?>"><?= isset($crumb['name']) ? $crumb['name'] : $crumb['title'] ?></a>
                        <?php else: ?>
                            <span class="dyn-bc-current"><?= isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '') ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <i class="bi bi-chevron-right dyn-bc-sep"></i>
                    <span class="dyn-bc-current"><?= isset($bc_current) ? $bc_current : '' ?></span>
                <?php endif; ?>
            </div>
        </nav>
        <?php if (isset($bc_h1) && !empty($bc_h1)): ?>
            <h1 class="dyn-bc-title"><?= $bc_h1 ?></h1>
        <?php elseif (isset($bc_title_white) || isset($bc_title_orange)): ?>
            <h1 class="dyn-bc-title"><?= isset($bc_title_white) ? trim($bc_title_white) : '' ?> <?= isset($bc_title_orange) ? trim($bc_title_orange) : '' ?></h1>
        <?php endif; ?>
        <?php if (isset($bc_desc) && !empty($bc_desc)): ?>
            <p class="dyn-bc-desc mb-0"><?= $bc_desc ?></p>
        <?php endif; ?>
    </div>
</section>
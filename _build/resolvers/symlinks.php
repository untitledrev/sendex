<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/sendex/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/sendex')) {
            $cache->deleteTree(
                $dev . 'assets/components/sendex/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/sendex/', $dev . 'assets/components/sendex');
        }
        if (!is_link($dev . 'core/components/sendex')) {
            $cache->deleteTree(
                $dev . 'core/components/sendex/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/sendex/', $dev . 'core/components/sendex');
        }
    }
}

return true;
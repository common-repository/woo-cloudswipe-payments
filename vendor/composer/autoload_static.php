<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c8556112f59d6b0c191db3bf356b9ac
{
    public static $classMap = array (
        'CloudSwipe_WC_Address' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-address.php',
        'CloudSwipe_WC_Customer' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-customer.php',
        'CloudSwipe_WC_Invoice' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-invoice.php',
        'CloudSwipe_WC_Line_Items' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-line-items.php',
        'CloudSwipe_WC_Line_Totals' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-line-totals.php',
        'CloudSwipe_WC_Log' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-log.php',
        'CloudSwipe_WC_Metadata' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-metadata.php',
        'CloudSwipe_WC_Price' => __DIR__ . '/../..' . '/includes/class-cloudswipe-wc-price.php',
        'CloudSwipe_Wp' => __DIR__ . '/..' . '/cloudswipe/cloudswipe-wp/src/class-cloudswipe-wp.php',
        'CloudSwipe_Wp_Invoice' => __DIR__ . '/..' . '/cloudswipe/cloudswipe-wp/src/class-cloudswipe-wp-invoice.php',
        'CloudSwipe_Wp_Resource' => __DIR__ . '/..' . '/cloudswipe/cloudswipe-wp/src/class-cloudswipe-wp-resource.php',
        'Cs_Slurp_Tweaker' => __DIR__ . '/../..' . '/includes/class-cs-slurp-tweaker.php',
        'Json_Api_Wp_Exception' => __DIR__ . '/..' . '/joeybeninghove/json-api-wp-client/src/class-json-api-wp-exception.php',
        'Json_Api_Wp_Http' => __DIR__ . '/..' . '/joeybeninghove/json-api-wp-client/src/class-json-api-wp-http.php',
        'Json_Api_Wp_Resource' => __DIR__ . '/..' . '/joeybeninghove/json-api-wp-client/src/class-json-api-wp-resource.php',
        'Json_Api_Wp_Url' => __DIR__ . '/..' . '/joeybeninghove/json-api-wp-client/src/class-json-api-wp-url.php',
        'WC_Gateway_CloudSwipe' => __DIR__ . '/../..' . '/includes/class-wc-gateway-cloudswipe.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8c8556112f59d6b0c191db3bf356b9ac::$classMap;

        }, null, ClassLoader::class);
    }
}

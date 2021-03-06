<?php
/**
 * Functions for get_theme_mod()
 *
 
 */
if (!function_exists('medical_hub_get_option')) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function medical_hub_get_option($key = '')
    {
        if (empty($key)) {
            return;
        }
        $medical_hub_default_options = medical_hub_get_default_theme_options();

        $default = (isset($medical_hub_default_options[$key])) ? $medical_hub_default_options[$key] : '';

        $theme_option = get_theme_mod($key, $default);

        return $theme_option;

    }

endif;


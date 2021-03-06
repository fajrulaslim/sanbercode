<?php
/**
 * Hooks
 * @since 2.8
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Hooks' ) ) :

class HT_CTC_Hooks {

    public $version = HT_CTC_VERSION;

    public $main_options = '';
    public $other_options = '';

    public function __construct() {
        $this->hooks();
        $this->main_options = get_option('ht_ctc_main_options');
        $this->other_options = get_option('ht_ctc_othersettings');
    }

    private function hooks() {
        // action hooks
        add_action( 'ht_ctc_ah_before_fixed_position', array($this, 'comment') );

        // filter hooks
        add_filter( 'ht_ctc_fh_is_ga_enable', array($this, 'is_ga_enable') );
        add_filter( 'ht_ctc_fh_is_fb_pixel', array($this, 'is_fb_pixel') );
        add_filter( 'ht_ctc_fh_is_fb_an_enable', array($this, 'is_fb_an_enable') );
    }

    // comment before floting style
    function comment() {
        $comment = "<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v$this->version -->";
        echo $comment;
    }

    // is_ga_enable
    function is_ga_enable( $is_ga_enable ) {
        return (isset( $this->main_options['google_analytics'] )) ? 'yes' : $is_ga_enable;
    }

    // is_fb_pixel
    function is_fb_pixel( $is_fb_pixel ) {
        return (isset( $this->main_options['fb_pixel'] )) ? 'yes' : $is_fb_pixel;
    }

    // is_fb_an_enable
    function is_fb_an_enable( $is_fb_an_enable ) {
        return (isset( $this->other_options['fb_analytics'] )) ? 'yes' : $is_fb_an_enable;
    }



}

new HT_CTC_Hooks();

endif; // END class_exists check
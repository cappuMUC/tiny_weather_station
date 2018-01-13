<?php
/**
 * @package WW_Weather_Widget
 * @version 0.0
 */
/*
   Plugin Name: WW Weather Widget
   Plugin URI: https://github.com/cappumuc/ww-weather-widget
   Description: Dieses Plugin stellt ein Widget zur Verfügung, welches die gemessenen Temperaturen der Wachstation in Wordpress darstellen kann.
   Author: Bernhard Rohloff
   Version: 0.0
   Author URI: https://withoutacast.de
 */

class WW_Weather_Widget extends WP_Widget {

    public function __construct()
	{
		parent::__construct(
				'ww_weather_widget',
				__( 'WW Weather Widget', 'text_domain' ),
				array(
					'customize_selective_refresh' => true,
					)
				);
	}

	public function form($instance)
	{

	}

	public function update($new_instance, $old_instance)
	{

	}

	public function widget($args, $instance)
	{
	  ?>
	  <h3>Temperaturen am See</h3>
	  <ul>
	  <li class="temperature" >Wasser: 5°C</li>
	  <li class="temperature" >Luft: 15°C</li>
	  </ul>
	  <span>Last update: 04.01.2018 10:41:46</span>
	  <?php
	}

}

function register_ww_weather_widget() {
	register_widget('ww_weather_widget');
}

add_action( 'widgets_init', 'register_ww_weather_widget' );

?>

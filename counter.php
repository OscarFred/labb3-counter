<?php
/**
 * Plugin Name: Counter
 * Description: A plugin to check if a string is 7 characters.
 * Version: 1.0
 * Author: Oscar Fredriksson
 */

if ( ! defined('ABSPATH')) {
    die;
}

if ( class_exists('ofWeather')) {
    $ofWeather = new Counter();
}

class Counter {
    
    }

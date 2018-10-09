<?php
/*
Plugin Name: Custom Forms Plugin
Plugin Uri: N/A
description: A plugin containing the different custom forms we need.
Version: 1.0
Author: CCK Web & IT IVS
Author URI: https://www.cck-webogit.dk/
License: GPL 3
 */

function showDanishContact() {
    readfile(plugins_url('contact_forms/contact_form_danish.html', __FILE__));
}
function showEnglishContact() {
    readfile(plugins_url("contact_forms/contact_form_english.html", __FILE__));
}
function showDanishSponsor() {
    readfile(plugins_url("sponsor_forms/sponsor_form_danish.html", __FILE__));
}
function showEnglishSponsor() {
    readfile(plugins_url("sponsor_forms/sponsor_form_english.html", __FILE__));
}
function showDanishVolunteer() {
    readfile(plugins_url("volunteer_forms/volunteer_form_danish.html", __FILE__));
}
function showEnglishVolunteer() {
    readfile(plugins_url("volunteer_forms/volunteer_form_english.html", __FILE__));
}

add_shortcode('danish_contact', 'showDanishContact');
add_shortcode('english_contact', 'showEnglishContact');
add_shortcode('danish_sponsor', 'showDanishSponsor');
add_shortcode('english_sponsor', 'showEnglishSponsor');
add_shortcode('danish_volunteer', 'showDanishVolunteer');
add_shortcode('english_volunteer', 'showEnglishVolunteer');
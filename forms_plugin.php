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
    readfile("contact_forms/contact_form_danish.html");
}
function showEnglishContact() {
    readfile("contact_forms/contact_form_english.html");
}
function showDanishSponsor() {
    readfile("sponsor_forms/sponsor_form_danish.html");
}
function showEnglishSponsor() {
    readfile("sponsor_forms/sponsor_form_english.html");
}
function showDanishVolunteer() {
    readfile("volunteer_forms/volunteer_form_danish.html");
}
function showEnglishVolunteer() {
    readfile("volunteer_forms/volunteer_form_english.html");
}

add_shortcode('danish_contact', 'showDanishContact');
add_shortcode('english_contact', 'showEnglishContact');
add_shortcode('danish_sponsor', 'showDanishSponsor');
add_shortcode('english_sponsor', 'showEnglishSponsor');
add_shortcode('danish_volunteer', 'showDanishVolunteer');
add_shortcode('english_volunteer', 'showEnglishVolunteer');
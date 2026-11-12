<?php 
// CONFIG - These control the look and details on your site. Consult documentation for more details.

// GENERAL

// Page title for your site
define('title', 'TRUF.us | Spittin TRUF'); 

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', 'TRUF');

// A description of your site, shown on the homepage.
define('description', 'TRUF.us | Spittin TRUF Yo!'); 

// The favicon for your site
define('favicon', '/frontend/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/frontend/assets/img/logo-black.png');

// Enable Cloudflare Turnstile
// It is highly recommended you use Turnstile to stop spam. You can get a site and secret key from here:
// https://dash.cloudflare.com/?to=/:account/turnstile
define("enableTurnstile", false);

// Cloudflare Turnstile Site Key
define("turnstileSiteKey", '0x4AAAAAAAwhabRTvVD3iN5A');

// Set TURNSTILE_SECRET_KEY in the server environment.
define("turnstileSecretKey", getenv('TURNSTILE_SECRET_KEY') ?: '');

// Enables the custom URL field
// true or false
define('enableCustomURL', false);

// Optional
// Set a primary colour to be used. Default: #007bff
// Here are some other colours you could try:
// #f44336: red, #9c27b0: purple, #00bcd4: teal, #ff5722: orange, #007bff: default
define('colour', '#35063e');

// Optional
// Set a background image to be used.
// default: unsplash.com random daily photo of the day
// More possibilities of photo embedding from unsplash could be found at: https://source.unsplash.com
// define('backgroundImage', 'https://source.unsplash.com/daily');

// FOOTER

// Footer links use a label and URL, with optional text or whole-link emphasis.
$footerLinks = [
    [
        "label" => "Contribute to the project?",
        "highlight" => "Buy Me a Coffee",
        "url" => "https://www.buymeacoffee.com/truf/"
    ],
    [
        "label" => "Privacy Policy",
        "url" => "/privacy.php",
        "emphasize" => true
    ],
    [
        "label" => "MichaelR.xyz",
        "url" => "https://michaelr.xyz?utm_source=truf&utm_medium=website&utm_id=link",
        "emphasize" => true
    ]
    //"Legal"   =>  "https://yourls.org/",
    //"Admin"   =>  "/admin"
];

?>

<?php

namespace App\Service;

class Router {

    public function newRequest(string $uri) {

        require_once match($uri) {
            '/' => "app/Page/home_page.php",

            // -- Base -- \\

            '/base/random-digits' => "app/Page/Base/random_digit.php",
            '/base/number-between' => "app/Page/Base/number_between.php",
            '/base/random-number' => "app/Page/Base/random_number.php",
            '/base/random-float' => "app/Page/Base/random_float.php",

            // -- Address -- \\

            '/address/coordinates' => "app/Page/Address/coordinates.php",
            '/address/address' => "app/Page/Address/address.php",

            // -- DateTime -- \\

            '/date-time/date-time' => "app/Page/DateTime/date_time.php",

            // -- Internet -- \\

            '/internet/email' => "app/Page/Internet/email.php",
            '/internet/domain' => "app/Page/Internet/domain.php",
            '/internet/password' => "app/Page/Internet/password.php",
            '/internet/user-name' => "app/Page/Internet/user_name.php",
            '/internet/url' => "app/Page/Internet/url.php",
            '/internet/slug' => "app/Page/Internet/slug.php",
            '/internet/ip' => "app/Page/Internet/ip.php",
            '/internet/mac-address' => "app/Page/Internet/mac_address.php",

            // -- Lorem -- \\

            '/lorem/words' => "app/Page/Lorem/words.php",
            '/lorem/sentences' => "app/Page/Lorem/sentences.php",
            '/lorem/paragraphs' => "app/Page/Lorem/paragraphs.php",
            '/lorem/text' => "app/Page/Lorem/text.php",

            // -- Person -- \\

            '/person/name' => "app/Page/Person/name.php",

            // -- PhoneNumber -- \\

            '/phone-number/phone-number' => "app/Page/PhoneNumber/phone_number.php",

            default => "app/Page/error_page.php"
        };
    }
}

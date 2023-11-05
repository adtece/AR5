<?php

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$countries = explode(";", $data);
$capitals = [];

foreach ($countries as $country){
    $countrydata = explode(",", $country);[
        'country' => $country[$i],
        'city' => $city[$i],
    ];
}

echo "<pre>";
var_dump($capitals);

?>
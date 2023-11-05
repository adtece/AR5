<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryArray = explode(",", $country);
$capitals = [];

for ($i = 0; $i < count($countryArray); $i++){
    $countrycountry["country"] = $countryArray[$i];
    array_push($capitals, $countrycountry);
}

echo "<pre>";
var_dump($capitals);

?>
<div class="location vcard"><div class="adr">
<?php echo $name; ?>
<?php if ($street) {?>
<div class="street-address">
<?php if ($street && $postal_code) {
  $url = 'http://www.findvej.dk/';
  $findvej_array = preg_split('/[\s,.]+/', $street, -1);
  if (count($findvej_array > 1)) {
    $url .= $findvej_array[0] . $findvej_array[1];
  }
  else {
    $url .= $findvej_array[0];
  }
  $url .= ',' . $postal_code;
  print l($street, $url); ?>
<?php
}  
  else {
    echo $street;
      if ($additional) {
        echo ' '. $additional;
      }
 } ?>
<?php } ?>

</div>
<?php
  if ($city || $province || $postal_code) {
    $city_province_postal = array();

    if ($postal_code) {
      print'<span class="postal-code">'. $postal_code .' </span>';
    }
    if ($city) {
      print '<span class="locality">'. $city .'</span>';
    }
    if ($province) {
      
    }
  }
?>
<?php if ($country_name) { ?>
<div class="country-name"><?php echo $country_name; ?></div>
<?php } ?>
<?php
  // "Geo" microformat, see http://microformats.org/wiki/geo
  if ($latitude && $longitude) {
    // Assume that 0, 0 is invalid.
    if ($latitude != 0 || $longitude != 0) {
?>
<span class="geo"><abbr class="latitude" title="<?php echo $latitude; ?>"><?php echo $latitude_dms; ?></abbr>, <abbr class="longitude" title="<?php echo $longitude; ?>"><?php echo $longitude_dms; ?></abbr></span>
<?php
    }
  }
?>
</div></div>
<?php echo $map_link; ?>

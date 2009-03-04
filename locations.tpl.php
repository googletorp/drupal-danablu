<?php if (count($locations)) {?>
<div class="label"><?php echo count($locations) > 1 ? t('Locations') : t('Location');?></div>
<?php
  foreach ($locations as $location) {
    echo $location;
  }
}

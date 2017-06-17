<?php

namespace Functions;

function button($props, $content) {
  $attrs = shortcode_atts(
    ['href' => '#'],
    $props
  );
  return "<a class='btn' href='".$attrs['href']."'>".$content."</a>";
}

add_shortcode('button', '\Functions\button');

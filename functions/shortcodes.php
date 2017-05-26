<?php

namespace Shortcodes;

function button($props, $content) {
  $attrs = shortcode_atts(
    ['href' => '#'],
    $props
  );
  return "<a class='btn' href='".$attrs['href']."'>".$content."</a>";
}

add_shortcode('button', 'Shortcodes\button');

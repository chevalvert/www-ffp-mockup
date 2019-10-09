<?php
  // XXX: depending on WP helpers, this snippet may be useless on production
  if (isset($text) && $text) {
    $post = nl2br($text, false);
    $post = '<p>' . preg_replace('#(<br>[\r\n]+){2}#', "</p>\n\n<p>", $post) . '</p>';
    echo $post;
  }
?>

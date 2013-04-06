<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="col-first">
    <?php print $content['picture']; ?>
  </div>

  <div class="col-last">
    <div class="message-content"<?php print $content_attributes; ?>>
      <?php
      hide($content[$babble_field]);
      hide($content[$babble_field . '_babble_comment_form']);
      hide($content[$babble_field . '_babble_host_links']);
      print render($content);
      ?>
    </div>

    <div class="message-comment">
      <?php
      print render($content[$babble_field]);
      print render($content[$babble_field . '_babble_comment_form']);
      print render($content[$babble_field . '_babble_host_links']);

      ?>
    </div>
  </div>

</div>

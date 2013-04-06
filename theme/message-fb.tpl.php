<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <?php if ($url): ?>
        <a href="<?php print $url; ?>"><?php print $title; ?></a>
      <?php else: ?>
        <?php print $title; ?>
      <?php endif; ?>
    </h2>
  <?php endif; ?>

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

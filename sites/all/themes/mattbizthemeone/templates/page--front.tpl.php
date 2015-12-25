<?php
global $base_url;
if ($site_name || $site_slogan): ?>
  <div id="site-name-slogan" class="brand navbar-brand <?php if ($hide_site_name && $hide_site_slogan) { print ' element-invisible'; } ?>">

    <?php if ($site_name): ?>
      <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
        <strong>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </strong>
      </h1>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div id="site-slogan" <?php if ($hide_site_slogan) { print 'class="element-invisible"'; } ?>>
        <?php print $site_slogan; ?>
      </div>
    <?php endif; ?>

  </div> <!-- /#name-and-slogan -->
<?php endif; ?>

  <div class="homepage_wrapper">
    <div class="vide_block" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%">
    </div>
    <div class="calendar_button">
      <a href="<?php echo $base_url?>/calendar1" class="button">View Calendar</a>
    </div>

  </div>

  <div id="footer">
    <div class="column <?php $no_panels ? print 'container' : ''; ?>">
      <?php print render($page['footer']); ?>
    </div>
  </div>

<script src="/sites/all/themes/mattbizthemeone/scripts/jquery.vide.js"></script>

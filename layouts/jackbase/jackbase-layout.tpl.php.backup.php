<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="l-constrained webcaret-headerbar">

      <div class="l-branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <h1 class="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['header']); ?>

    <div id="off-canvas" class="l-off-canvas">
      <a id="off-canvas-show" href="#off-canvas" class="l-off-canvas-show"><?php print t('Show Navigation'); ?></a>
      <a id="off-canvas-hide" href="#" class="l-off-canvas-hide"><?php print t('Hide Navigation'); ?></a>
      <?php print render($page['navigation']); ?>
    </div>

  </header>
    <div class="webcaret-banner"><?php print render($page['webcaret_banner']); ?></div>

  <?php if (!empty($page['highlighted'])): ?>
    <div class="l-highlighted-wrapper">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <div class="l-main l-constrained">
    <div class="l-content" role="main">
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
    <div class="jackbasewrapper">
      <?php print render($page['contentleft']); ?>
      <?php print render($page['contentcenter']); ?>
      <?php print render($page['contentright']); ?>
    </div>
    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div>

  <footer class="footer" role="contentinfo">
    <div class="l-footer-wrapper">
      <div class="wrapmyfoot">
        <?php print render($page['footer1']); ?>
        <?php print render($page['footer2']); ?>
        <?php print render($page['footer3']); ?>
        <?php print render($page['footer4']); ?>
      </div>
    </div>
    <div class="wrapmycopy">
        <?php print render($page['copy']); ?>
    </div>
  </footer>
</div>

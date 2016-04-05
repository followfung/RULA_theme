<?php

/**
 * @file
 * This is the template file for the pdf object
 *
 * @TODO: Add documentation about this file and the available variables
 */
?>

<div class="islandora-pdf-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="Article">
  <div class="islandora-pdf-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-pdf-content-new col-md-6">
        <?php print $islandora_content; ?>
      	<?php if (isset($islandora_download_link)): ?>
			<div class="islandora_download_link">
				<?php print $islandora_download_link; ?>
			</div>
      <?php endif; ?>
  </div>
      <div class="islandora-pdf-metadata col-md-6 pull-right">
      <?php print $metadata; ?>
  </div>
    <?php endif; ?>
  </div>
  <div class="islandora-pdf-description">
	  <?php print $description; ?>
  </div>
</div>

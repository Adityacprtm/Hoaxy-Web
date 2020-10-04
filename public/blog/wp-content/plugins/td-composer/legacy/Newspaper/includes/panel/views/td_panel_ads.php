<?php

td_api_ad::helper_display_ads();

?>

<!-- Modal Video Popup -->
<?php echo td_panel_generator::box_start('Modal Video Popup', false); ?>
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">Ad code:</span>
		<p>Paste your ad code here.</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::textarea(array(
			'ds' => 'td_option',
			'option_id' => 'tds_modal_video_ad'
		));
		?>
	</div>
</div>

<!-- A title for the Ad-->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">AD title:</span>

		<p>A title for the Ad, like - <strong>Advertisement</strong>.</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::input( array(
			'ds'        => 'td_option',
			'option_id' => 'tds_modal_video_ad_title'
		) );
		?>
	</div>
</div>
<?php echo td_panel_generator::box_end();?>


<?php
//backround add
echo td_panel_generator::box_start('Background click Ad', false);?>

<div class="td-box-row">
	<div class="td-box-description td-box-full">
		<span class="td-box-title">Notice:</span>
		<p>Please go to <strong>BACKGROUND</strong> tab if you also need a background image</p>
	</div>
	<div class="td-box-row-margin-bottom"></div>
</div>

<!-- ad box code -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">URL</span>
		<p>Paste your link here like : http://www.domain.com</p>
	</div>
	<div class="td-box-control-full td-panel-input-wide">
		<?php
		echo td_panel_generator::input(array(
			'ds' => 'td_option',
			'option_id' => 'tds_background_click_url',
		));
		?>
	</div>
</div>


<!-- ad taget -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">Open in new window</span>
		<p>If enabled, this option will open the URL in a new window. Leave disabled for the URL to be loaded in current page</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_background_click_target',
			'true_value' => '_blank',
			'false_value' => ''
		));
		?>
	</div>
</div>

<?php  echo td_panel_generator::box_end();?>




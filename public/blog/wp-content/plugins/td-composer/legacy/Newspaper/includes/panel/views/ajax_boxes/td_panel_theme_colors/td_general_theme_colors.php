<!-- theme_color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">THEME ACCENT COLOR</span>
        <p>Select theme accent color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_theme_color',
            'default_color' => '#4db2ec'
        ));
        ?>
    </div>
</div>


<!-- BACKGROUND COLOR -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">BACKGROUND COLOR</span>
        <p>Select theme background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_site_background_color',
            'default_color' => ''
        ));
        ?>
    </div>
</div>

<?php if( 'Newspaper' == TD_THEME_NAME && td_global::is_tdb_registered() ) { ?>
<!-- BOXED LAYOUT -->
<div class="td-box-row tdb-hide">
    <div class="td-box-description">
        <span class="td-box-title">BACKGROUND BOXED LAYOUT</span>
        <p>Make background boxed layout</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::checkbox( array(
            'ds'          => 'td_option',
            'option_id'   => 'tds_site_boxed',
            'true_value'  => '',
            'false_value' => 'hide'
        ) );
        ?>
    </div>
</div>
<?php } ?>


<!-- HEADERS BACKGROUND COLOR -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">HEADERS BACKGROUND COLOR</span>
		<p>Select a global header background color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_header_color',
			'default_color' => ''
		));
		?>
	</div>
</div>


<!-- HEADERS TEXT COLOR -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">HEADERS TEXT COLOR</span>
		<p>Select a global header text color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_text_header_color',
			'default_color' => ''
		));
		?>
	</div>
</div>
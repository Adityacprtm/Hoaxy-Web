<?php

class td_module_mx3 extends td_module {

    function __construct($post, $module_atts = array()) {
        //run the parrent constructor
        parent::__construct($post, $module_atts);
    }

    function render() {
        ob_start();
        $title_length = $this->get_shortcode_att('mx3_tl');
        $modified_date = $this->get_shortcode_att('show_modified_date');
        ?>

        <div class="<?php echo $this->get_module_classes();?>">
            <?php echo $this->get_image('td_324x235');?>

            <div class="td-module-meta-info">
                <?php echo $this->get_title($title_length);?>
                <?php if (td_util::get_option('tds_category_module_mx3') == 'yes') { echo $this->get_category(); }?>
                <?php echo $this->get_author();?>
                <?php echo $this->get_date($modified_date);?>
                <?php echo $this->get_comments();?>
            </div>

        </div>

        <?php return ob_get_clean();
    }
}
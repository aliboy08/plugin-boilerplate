<?php
ff_modules_load_settings_page();
$settings = new FF_Modules_Settings_Page();
?>

<form action="" method="POST">

    <?php
    // $settings->input_text([
    //     'key' => 'sample_input',
    //     'label' => 'Sample Input',
    // ]);

    // $settings->textarea([
    //     'key' => 'sample_textarea',
    //     'label' => 'Sample textarea',
    // ]);

    // $settings->select([
    //     'key' => 'sample_select',
    //     'label' => 'Sample Select',
    //     'options' => [
    //         'option_value' => 'Option Label',
    //     ]
    // ]);

    $settings->save_button();
    ?>

</form>
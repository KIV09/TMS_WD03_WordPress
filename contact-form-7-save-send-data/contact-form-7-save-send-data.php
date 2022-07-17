<?php
/**
 * Plugin Name: Перехват данных из контакт-формы
 * Description: Сохранение отправляемых данных из контакт-формы в базу данных
 * Author:      {Имя автора}
 * Author URI:  {Ссылка на автора}
 * Version:     1.0
 */

register_activation_hook( __FILE__, 'cf7_save_send_data_activation' );
function cf7_save_send_data_activation() {
	if ( ! is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
		die( 'Плагин Contact Form 7 не установлен!' );
	}
}

register_uninstall_hook( __FILE__, 'cf7_save_send_data_uninstall' );
function cf7_save_send_data_uninstall() {

}

add_action( 'admin_menu', 'cf7_save_send_data_option_page' );
function cf7_save_send_data_option_page() {
	add_options_page(
		'Перехват данных из форм',
		'Перехват данных из форм',
		'manage_options',
		'cf7_save_send_data',
		'cf7_save_send_data_admin_page'
	);
}

function cf7_save_send_data_admin_page() {
	?>
    <form action="options.php" method="post">
		<?php
		settings_fields( 'cf7_save_send_data' );
		do_settings_fields( 'cf7_save_send_data_settings_page');
		submit_button( 'Сохранить' );
		?>
    </form>
	<?php
}

add_action( 'admin_init', 'cf7_save_send_data_admin_init' );
function cf7_save_send_data_admin_init() {
	add_settings_section(
		'cf7_save_send_data_setting',
		'Настройки',
		'cf7_save_send_data_setting_callback',
		'cf7_save_send_data_settings_page'
	);

	add_settings_field(
		'cf7_save_send_data_select',
		'Формы',
		'cf7_save_send_data_select_callback',
		'cf7_save_send_data_settings_page'
	);
}

function cf7_save_send_data_setting_callback() {
	echo 'Выберите формы в списке ниже';
}

function cf7_save_send_data_select_callback() {
	$forms = get_posts( [
		'post_type'   => 'wpcf7_contact_form',
		'post_status' => 'publish',
		'numberposts' => -1
	] );
    $options = get_option('cf7_save_send_data');
	?>
    <select name="cf7_save_send_data[cf7_save_send_data_select][]" multiple="multiple" size="10">
		<?php foreach ( $forms as $form ): ?>
            <?php
            $selected = '';
            if (
                !empty($options['cf7_save_send_data_select'])
                && in_array($form->ID, $options['cf7_save_send_data_select'])
            ) {
                $selected = 'selected="selected"';
            }
            ?>
            <option
                value="<?= $form->ID; ?>"
                <?= $selected; ?>
            >
                <?= $form->post_title; ?>
            </option>
		<?php endforeach; ?>
    </select>
	<?php
}
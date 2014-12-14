<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$settings_lang = [
	'description' => 'Configure reCAPTCHA settings',
	'label' => 'reCAPTCHA',
	'fields' => [
		'public_key' => [
			'comment'			=> 'Get the Public Key from https://www.google.com/recaptcha/admin',
			'label'				=> 'Public Key',
			'placeholder'	=> 'Insert the reCAPTCHA Public Key for this site'
		],
		'private_key' => [
			'comment'			=> 'Get the Private Key from https://www.google.com/recaptcha/admin',
			'label'				=> 'Private Key',
			'placeholder'	=> 'Insert the reCAPTCHA Private Key for this site'
		]
	]
];
<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\reCAPTCHA
 */

namespace AxC\reCAPTCHA;

/**
 * reCAPTCHA Plugin Information File
 */
class Plugin extends \System\Classes\PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = ['AxC.Framework'];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'				=> 'reCAPTCHA',
			'description'	=> trans('axc.recaptcha::lang.plugin.description'),
			'author'			=> 'Alex Carrega',
			'icon'				=> 'icon-code'
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return ['AxC\reCAPTCHA\Components\reCAPTCHA' => 'reCAPTCHA'];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'				=> trans('axc.recaptcha::lang.settings.label'),
				'icon'				=> 'icon-plus-square',
				'description'	=> trans('axc.recaptcha::lang.settings.description'),
				'class'				=> 'AxC\reCAPTCHA\Models\Settings',
				'category'		=> \AxC\Framework\Models\Settings::CATEGORY_AXC,
				'order'				=> 3
			]
		];
	}
}

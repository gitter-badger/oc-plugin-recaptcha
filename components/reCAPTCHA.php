<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\reCAPTCHA\Components
 */

namespace AxC\reCAPTCHA\Components;

/**
 * reCAPTCHA component class.
 */
class reCAPTCHA extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.recaptcha::lang.component.name'),
			'description'	=> trans('axc.recaptcha::lang.component.description')
		];
	}

	/**
	 * The CMS controller executes this method every time when the page or layout loads.
	 * Set the reCAPTCHA private and public keys.
	 * @return null
	 */
	public function onRun()
	{
		$this->page['public_key'] = \AxC\reCAPTCHA\Models\Settings::get('public_key');
		$this->page['private_key'] = \AxC\reCAPTCHA\Models\Settings::get('private_key');
	}
}
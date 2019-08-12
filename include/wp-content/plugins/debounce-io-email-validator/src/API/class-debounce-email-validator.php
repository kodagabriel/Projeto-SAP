<?php
/**
 * The email validator
 *
 * @package DEBOUNCE/API
 */

/**
 * Class DEBOUNCE_Email_Validator
 */
class DEBOUNCE_Email_Validator {

	/**
	 * Whether the email address is valid.
	 *
	 * @var bool
	 */
	protected $is_valid = TRUE;

	/**
	 * The email to validate.
	 *
	 * @var string
	 */
	protected $email = '';


	/**
	 * The email address status.
	 *
	 * @var string
	 */
	protected $email_status = '';

	/**
	 * The API object.
	 *
	 * @var object
	 */
	protected $api = NULL;

	/**
	 * Validate the email address.
	 *
	 * @return boolean
	 */
	public function validate() {

		$api = $this->get_api();
		$api->set_email( $this->get_email() );
		$response = $api->request();
		if ( ! empty( $response->debounce->code ) ) {
			$this->set_email_status( str_replace('8,','',$response->debounce->code) );
		}

		$this->set_is_valid( TRUE );

		// If there was an connection error, consider the email address as valid.
		if ( NULL === $response ) {
			$this->set_is_valid( TRUE );

			/**
			 * Filters whether the email address is valid.
			 *
			 * @param boolean $is_valid 
			 * @param object  $response 
			 */
			return apply_filters( 'debounce_email_valid', $this->get_is_valid(), $response );
		}

      // TODO: configurable admin option for 305, 308
		$valid_statuse = array(
			'4',
			'5',
			'7',
						
			'0'
		);

		if ( ! in_array( $this->get_email_status(), $valid_statuse, TRUE ) ) {
			$this->set_is_valid( FALSE );
		}

		// If the API Key is invalid or depleted, we update an option to show an admin notice.
		if ( '0' === $this->get_email_status() ) {
			update_option( 'debounce-api-key-invalid', 1 );
		}

		/**
		 * Filters whether the email is valid.
		 *
		 * @param boolean $is_valid Whether the email is valid or not.
		 * @param object  $response The response
		 */
		return apply_filters( 'debounce_email_valid', $this->get_is_valid(), $response );
	}

	/**
	 * Get the validity status of an email address.
	 *
	 * @return bool
	 */
	public function get_is_valid() {

		return $this->is_valid;
	}

	/**
	 * Set the validity status of an email address.
	 *
	 * @param bool $is_valid The validity.
	 *
	 * @return bool
	 */
	protected function set_is_valid( $is_valid ) {

		$this->is_valid = (bool) $is_valid;
		return $this->get_is_valid();
	}

	/**
	 * Get the email address.
	 *
	 * @return string
	 */
	public function get_email() {

		return $this->email;
	}

	/**
	 * Set the email address.
	 *
	 * @param string $email
	 *
	 * @return string
	 */
	public function set_email( $email ) {

		$this->email = (string) $email;
		return $this->get_email();
	}

	/**
	 * Set the email address status.
	 *
	 * @param string $status
	 *
	 * @return string
	 */
	public function set_email_status( $status ) {

		$this->email_status = (string) $status;
		return $this->get_email_status();
	}

	/**
	 * Get the email address status.
	 *
	 * @return string
	 */
	public function get_email_status() {

		return $this->email_status;
	}

	/**
	 * Get the API
	 *
	 * @return object
	 */
	public function get_api() {

		return $this->api;
	}

	/**
	 * Set the API.
	 *
	 * @param object $api The API Object.
	 *
	 * @return object
	 */
	public function set_api( $api ) {

		$this->api = (object) $api;
		return $this->get_api();
	}
}

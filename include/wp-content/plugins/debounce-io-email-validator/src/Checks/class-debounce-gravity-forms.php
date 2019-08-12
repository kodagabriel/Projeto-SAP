<?php
/**
 * This class handles the checks for Gravity Forms.
 *
 * @package DEBOUNCE/Checks
 */

/**
 * Class DEBOUNCE_GravityForms
 */
class DEBOUNCE_GravityForms {

	/**
	 * The validator object
	 *
	 * @var object
	 */
	protected $validator = NULL;


	/**
	 * DEBOUNCE_GravityForms constructor.
	 */
	public function __construct() {}

	/**
	 * Set up the handler.
	 */
	public function setup() {

		add_filter( 'gform_field_validation', array( $this, 'validate' ), 10, 4 );
	}

	/**
	 * Validate form data.
	 *
	 * @param result
	 *
	 * @param value 
	 *
	 * @param form 
	 *
	 * @param field 
	 *
	 * @return result 
	 */
	public function validate( $result, $value, $form, $field ) {
        	if ( $field->type == 'email' && $result['is_valid'] ) {
		   	$this->validator->set_email( $value );
		    	$this->validator->validate();		    		
		    	if ( !$this->validator->get_is_valid() ) {
				$result['is_valid'] = false;
             			$result['message']  = empty( $field->errorMessage ) ? __( 'This email address is invalid or not allowed - please check.', 'email-validator-by-debounce' ) : $field->errorMessage;
			}
    		}
    		return $result;
	}

	/**
	 * Set the validator.
	 *
	 * @param object $validator The validator.
	 *
	 * @return object
	 */
	public function set_validator( $validator ) {

		$this->validator = (object) $validator;
		return $this->get_validator();
	}

	/**
	 * Get the validator.
	 *
	 * @return object
	 */
	public function get_validator() {

		return $this->validator;
	}

}

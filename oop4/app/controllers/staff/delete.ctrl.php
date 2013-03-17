<?php

require_once(_PATH_APP_ . 'classes/controller.class.php');

/**
 * Delete a staff person
 */
class StaffDeleteController extends SharedFirstlevelController
{
	/**
	 * Manage data for delete
	 */	
	public function run()
	{	
		$submit 	= $this->post->getValue( 'delete', 'text' );
		$staff_id	= $this->post->getValue( 'staff_id', 'text' );		
		
		if( isset( $submit ) )
		{
			$staff= Factorymodel::getClass( 'StaffStaffModel' );

			if( $staff_id )
			{
				$staff->deleteStaffById( $staff_id );				
			}

			header( 'Location: /list-staff' ) ;
			
		}

		$staff = new StaffStaffModel();
		$staffs = $staff->getStaffs();
	}
}


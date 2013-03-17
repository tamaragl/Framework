<?php

require_once('/var/www/wc/trainee2013/oop4/app/classes/model.class.php' );
require_once('/var/www/wc/trainee2013/oop4/app/models/staff/staff.model.php' );
require_once ('/var/www/wc/trainee2013/oop4/core/classes/pdo_connector.class.php' );


class testStaffTest extends PHPUnit_Framework_TestCase
{
	
	public function setUp()
	{
		$this->db = $this->getMockBuilder( 'PDOConnector' )
							->disableOriginalConstructor()
                    		->getMock();	

		$this->db->expects($this->any())
             		->method( 'connect' )            
             		->will($this->returnValue( true )); 


        $this->encrypter	= $this->getMockBuilder( 'Encrypter' )
							->disableOriginalConstructor()
                    		->getMock();


        $this->staff = new StaffStaffModel( $this->db,  $this->encrypter);

       
	}


	public function testGetStaffs()
	{

		$this->db->expects($this->any())
					->method('fetchAll')
             		->will($this->returnValue( array() ));

        $this->assertEquals( 	array(),
								$this->staff->getStaffs(),
								'Error in output');

	}


	public function testgetStaffByIdWith1()
	{
		$this->db->expects($this->any())
					->method('fetchAll')
             		->will($this->returnValue( array() ));

        $this->assertEquals( 	array(),
								$this->staff->getStaffById( 1 ),
								'Error in output');
	}


	public function testupdateStaffByIdWithAllParams()
	{
		$this->db->expects($this->any())
					->method( 'execute' )
             		->will( $this->returnValue( true ) );

        $this->assertEquals( 	true,
								$this->staff->updateStaffById( 
															'tamara', 
															'garcia',
															1,
															'',
															'tamara@tamara.es',
															1,
															1,
															'tamara',
															34),
								'Error in output');
	}


	public function testdeleteStaffById()
	{
		$this->db->expects($this->any())
					->method( 'execute' )
             		->will( $this->returnValue( true ) );

       $this->assertEquals( true,
							$this->staff->deleteStaffById( 34 ),
							'Error in output');
	}



	public function testSetStaffTamara()
	{
		$this->db->expects($this->any())
					->method( 'execute' )
             		->will( $this->returnValue( true ) );

       $this->assertEquals( true,
							$this->staff->setStaff( 'tamara',
													'garcia',
													1,
													'',
													'tamara@tamara.es',
													1,
													1,
													'tamara',
													1 ),
							'Error in output');

	}

	public function testgetStaffByUsernameTamara()
	{
		$this->db->expects($this->any())
					->method('fetchAll')
             		->will($this->returnValue( array() ));

        $this->assertEquals( 	array(),
								$this->staff->getStaffByUsername( 'Tamara' ),
								'Error in output');
	}

	public function testvalidateLogin()
	{
		$this->db->expects($this->any())
					->method('fetchAll')
             		->will($this->returnValue( true ));

        $this->assertEquals( 	true,
								$this->staff->validateLogin( 'Tamara', 'password' ),
								'Error in output');
	}

	public function testSetStaffUser()
	{
		$this->db->expects($this->any())
					->method( 'execute' )
             		->will( $this->returnValue( true ) );

       $this->assertEquals( true,
							$this->staff->setStaffUser( 'tamara',
													'garcia',
													1,												
													'tamara@tamara.es',
													1,
													1,
													'tamara',
													'password' ),
							'Error in output');
	}


	


	public function testIsExistEmail()
	{
		$this->db->expects($this->any())
					->method( 'fetchAll' )
             		->will( $this->returnValue( true ) );

       $this->assertEquals( true,
							$this->staff->isExistEmail( 
													'tamara',
													'garcia',
													1,												
													'tamara@tamara.es',
													1,
													1,
													'tamara',
													'password' ),
							'Error in output');
	}


	public function testSetCodeAuth()
	{
		$this->db->expects($this->any())
					->method( 'execute' )
             		->will( $this->returnValue( true ) );

       	$this->assertEquals( true,
							$this->staff->setCodeAuth( 'tamara@tamara.es','code' ),
							'Error in output');
	}


	public function testIsCorrectCodeAuth()
	{
		$this->db->expects($this->any())
					->method( 'fetchAll' )
             		->will( $this->returnValue( true ) );

       $this->assertEquals( true,
							$this->staff->isCorrectCodeAuth('tamara@tamara.es','code' ),
							'Error in output');
	}


	public function testSetPasswordByEmail()
	{
		$this->db->expects($this->any())
					->method( 'execute' )
             		->will( $this->returnValue( true ) );

       $this->assertEquals( true,
							$this->staff->setPasswordByEmail('tamara@tamara.es','password' ),
							'Error in output');
	}

	public function testEncryptPassword()
	{
		$this->encrypter->expects($this->any())
					->method( 'encrypt' )
					->with('password')
             		->will( $this->returnValue( true ) );


       	$this->assertEquals( true ,
							$this->staff->encryptPassword( 'password' ),
							'Error in output');
	}





}
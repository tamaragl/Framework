<?php

class Registrygetdata
{
	/** 
     * Registry array of objects 
     * @var array
     */  
    private static $objects = array();
    
    /** 
     * The instance of the registry
     * @var object 
     */  
    private static $instance;
    
    /**
     * Prevent access directly
     */
    private function __construct(){}
    
    /**
     * Prevent access directly
     */
    private function __clone(){}
    
    /** 
     * Singleton method used to access the object 
     * @return object a instance of class
     */  
    public static function singleton() 
    {
        if( !isset( self::$instance ) )
        {
        	self::$instance = new self();
        } 

        return self::$instance;
    }
    
    /**
     * Get object protected
     * @param string $key key for access to array by key
     * @return mixed
     */
    protected function get( $key )
    {
        if( isset( self::$objects[$key] ) )
        {
            $result = self::$objects[$key];
        }
        else
        {
            $result = NULL;
        }
        
        return $result;
    }

    /**
     * Set object protected function you can use only
     * inside from this class
     * @param string $key
     * @param mixed  
     */
    protected function set( $key, $value )
    {
        self::$objects[$key] = $value;
    }

    /**
     * Get stored object
     * @param string $key
     * @return mixed
     */
    static function getObject( $key )
    {
        return self::singleton()->get( $key );
    }

    /**
     * Store object
     * @param string $key
     * @param mixed $instance
     * @return mixed
     */
    static function storeObject( $key, $instance )
    {
        return self::singleton()->set( $key, $instance );
    }
}
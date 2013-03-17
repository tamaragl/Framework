<?php

/**
 * Subscribe events
 */
abstract class Observer
{
	/**
	 * Store event's observers
	 * @var array $my_subscriptions
	 */
	protected $my_subscriptions;

	/**
	 * Invoke the action when a event happens
	 *	@param string $event 
	 */
	public function update( $event )
	{
		call_user_func( array( $this, $this->my_subscriptions[$event] ) );
	}

	/**
	 * Registy events for Observer
	 * @param string $event. When invoke action
	 * @param string $action 
	 *
	 */
	public function registerEvent( $event, $action )
	{
		$this->my_subscriptions[$event] = $action;
	}




}
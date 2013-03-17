<?php 

class Subject
{
	/**
	 * Store observers subscriptions
	 */
	protected $list_observers = array();

	/**
	 * Store events and observers
	 * @param string $event
	 * @param string $observer
	 */
	public function registerObserver( $event, $observer )
	{
		if( !empty( $this->list_observers ) )
		{
			foreach ($this->list_observers[$event] as $value) 
			{
				if( !$value == $observer )
				 {
				 	$this->list_observers[$event][] = $observer; 
				 }
			}
		}
		else
		{
			$this->list_observers[$event][] = $observer; 
		}
				
	}	


	/**
	 * Delete a observer o observer's list
	 * @param string $event
	 * @param string $observer
	 */
	public function unregisterOberver( $event, $observer )
	{

		foreach ($this->list_observers[$event] as  $key => $value) {

			if( !$value == $observer )
			 {
			 	unset( $this->list_observers[$event][$key] ); 
			 }
		}
	}


	/**
	 * Notify all observers when occurs event
	 * @param string $event
	 */
	public function notifyObservers( $event )
	{
		foreach ( $this->list_observers[$event] as $observer ) 
		{
			$observer->update( $event );
		}
	}




}
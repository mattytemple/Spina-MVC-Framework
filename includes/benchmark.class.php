<?php
// benchmark is a handy class for improving the performance of your application
//
// TIMING EXEC TIME
// just call mark('example_start') to start a timer
// then call mark('example_end') create a end time for a timer
// then using elapsed_time() and passing the 2 markers you setup (above) you will recieve the number of scounds between the 2 points back
//
// OTHER FUNCTIONS
// the benchmark class includes some other functions like memory_usage() this simply returns the current amount of server RAM been used by PHP.

class benchmark {
	var $marker = array();	
	
	function mark($name) {
		$this->marker[$name] = strtotime("now");
	}
	
	function elapsed_time($start, $end)	{
		$elapsed_time = $this->marker[$end] - $this->marker[$start];
		return $elapsed_time;
	}	
	
	function memory_usage() {
		$mem_usage = memory_get_usage(true); 
        if ($mem_usage < 1024) {
            return $mem_usage." B"; 
		} elseif($mem_usage < 1048576) { 
            return round($mem_usage/1024,2)." KB"; 
		} else {
            return round($mem_usage/1048576,2)." MB"; 
		}
	}
}
?>
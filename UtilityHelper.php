<?php
class UtilityHelper
{
    function get_calling_class() {
    
        //get the trace
        $trace = debug_backtrace();
        
        // Get the calling class
        $class = ( isset( $trace[1]['class'] ) ? $trace[1]['class'] : NULL );
    
        for ( $i=1; $i<count( $trace ); $i++ ) {
            if ( isset( $trace[$i] ) && isset( $trace[$i]['class'] ) )
                 if ( $class != $trace[$i]['class'] )
                     return $trace[$i]['class'];
        }
    }
}
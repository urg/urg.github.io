<?php

class IntegerParameter {
	const FILTER_TYPE = 'integer' ;
	public function validate( $filteredValue ) {
		$result = filter_var ( $filteredValue , FILTER_VALIDATE_INT );
		if ( $result === FALSE ) {
			throw new BadRequestException( " \" { $this ->getName()} \" should be an in");
		}
		return $result;
      	}
}

$p = new IntegerParameter();
echo $p->validate( new \DateTime() );

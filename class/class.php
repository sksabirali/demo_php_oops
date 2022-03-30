<?php
class Calculation
{
	public $total_count;
	public $return_tr;
	public function __construct()
	{
		
	}
	public function cal($total_count)
	{
		$this->return_tr .= '<tr>';
		$this->return_tr .= '<td>123</td>';
		$this->return_tr .= '</tr>';
		return $this->return_tr;
	}
	public function __destruct()
	{
	}
}

?>
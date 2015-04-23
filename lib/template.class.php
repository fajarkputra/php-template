<?php
class template
{
	private $assignedValues = array();
	private $tpl;
	
	function __construct($path = '')
	{
		if(!empty($path))
		{
			if(file_exists($path))
			{
				$this->tpl = file_get_contents($path);
			}
			else
			{
				echo "<b>Template Error</b> : File not Exists";
			}
		}
	}
	
	function assign($_searchString,$_replaceString)
	{
		if(!empty($_searchString))
		{
			$this->assignedValues[strtoupper($_searchString)] = $_replaceString;
		}
	}
	function show()
	{
		if(count($this->assignedValues) > 0)
		{
			foreach($this->assignedValues as $key => $value)
			{
				$this->tpl = str_replace('{'.$key.'}',$value,$this->tpl);
			}
		}
		return $this->tpl;
	}
}
<?php
	function list_view($desc)
	{
		$y = strpos($desc,',');
		while($y=strpos($desc,','))
		{
			$desc = str_replace("," , "</li><li>", $desc);
		}
		return $desc;
	}
?>
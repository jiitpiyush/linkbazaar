<?php
    function validate_email($email)
    {
    	if(filter_var($email,FILTER_VALIDATE_EMAIL))
    	{
            if(!empty(check($email)))
        		return $email;
            else
                return;
    	}
    	else
    	{
    		return;
    	}
    }

    function check($str)
    {
        $w = preg_match('/`/', $str);
        $x = preg_match('/"/', $str);
        $y = preg_match("/'/", $str);
        $z = preg_match('/;/', $str);

        if($x || $y ||$z || $w)
        {
            return;
        }
        else
        {
            return $str;
        }
    }
?>
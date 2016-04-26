<?php
	 $options = [
                'cost' => 11,
                'salt' => "piyushsrivastava0123456789"
            ];
	echo password_hash(strval("piyush"), PASSWORD_BCRYPT, $options);
?>
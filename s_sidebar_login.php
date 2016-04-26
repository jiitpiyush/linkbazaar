                        <?php
                            if(isset($_SESSION['Username']))
                            {
                                echo "<li class='sidebar'><a href='/login/logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a></li>";
                            }
                            else
                            {
                                echo "<li class='sidebar'><a href='/login/'><span class='glyphicon glyphicon-user'></span> Login</a></li>";
                            }
                            ?>
                        <?php
                            if(isset($_SESSION['Username']))
                            {
                                echo "<li class='panel panel-default' id='dropdown'>
                                    <a data-toggle='collapse' href='#dropdown-lvl1'>
                                        <span class='glyphicon glyphicon-user'></span>".$_SESSION['Username']."<span class='caret'></span>
                                    </a>

                                    <!-- Dropdown level 1 -->
                                    <div id='dropdown-lvl1' class='panel-collapse collapse'>
                                        <div class='panel-body'>
                                            <ul class='nav navbar-nav sidebar'>
                                                <li><a href='/account/'>View Profile</a></li>
                                                <li><a href='/login/logout.php'>Logout</a></li>

                                                <!-- Dropdown level 2 
                                                <li class='panel panel-default' id='dropdown'>
                                                    <a data-toggle='collapse' href='#dropdown-lvl2'>
                                                        <span class='glyphicon glyphicon-off'></span> Sub Level <span class='caret'></span>
                                                    </a>
                                                    <div id='dropdown-lvl2' class='panel-collapse collapse'>
                                                        <div class='panel-body'>
                                                            <ul class='nav navbar-nav'>
                                                                <li><a href='#'>Link</a></li>
                                                                <li><a href='#'>Link</a></li>
                                                                <li><a href='#'>Link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                -->
                                            </ul>
                                        </div>
                                    </div>
                                </li>";
                            }
                            else
                            {
                                echo "<li class='sidebar'><a href='/login/'><span class='glyphicon glyphicon-user'></span> Login</a></li>";
                            }
                            ?>

<?php
    $base = $_SERVER['DOCUMENT_ROOT'];
    include "$base/if_bookmark.php";
    include "$base/if_voted.php";
    echo "<div class='panel-group' id='accordion'>";
    
    function print_data($data,$i){
        $b = if_bookmark($data['id']);
        echo "<div class='panel panel-default'>
                    <div class='panel-heading' data-toggle='collapse'>
                        <h4 class='panel-title' data-toggle='collapse' data-parent='#accordion' href=#collapse$i>
                            <a data-toggle='collapse' data-parent='#accordion' href=#collapse$i>".$data['name']."</a>
                            <span style='cursor:pointer;' >
                                <span style='float:right;' id=".$data['id']." class='ic'>";
                                if(!$b){
                                    echo "<span class='glyphicon glyphicon-star-empty'></span>";
                                }
                                else{
                                    echo "<span class='glyphicon glyphicon-star'></span>";
                                }

                                if(!if_voted($data['id'])){
                                    echo "<span class='glyphicon glyphicon-thumbs-up' ></span><sub>votes: ".$data['vote']."</sub>";
                                }
                                else{
                                    echo "<span class='glyphicon glyphicon-thumbs-up th-up' ></span><sub>votes: ".$data['vote']."</sub>";
                                }   
                                    echo "<span onclick='goTo(".$data['id'].")' class='glyphicon glyphicon-arrow-right'></span>
                                </span>
                            </span>
                        </h4>
                    </div>
                    <div id=collapse$i class='panel-collapse collapse'>
                        <div class='panel-body'>
                        	<ul class='desc_view'>
                        		<li>".list_view($data['desc'])."</li>
                        	</ul>
                        </div>
                    </div>
                </div>";
        }
?>
        
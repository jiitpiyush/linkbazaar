                <style>
                .middle-col{
                background-color:#eee;
                }
                </style>
<?php
    $base = $_SERVER['DOCUMENT_ROOT'];
    include "$base/if_bookmark.php";
    function print_data($data,$i){
    $b = if_bookmark($data['id']);
                echo "<div>
                    <label class='name'>".$data['name']."</label>
                    <span style='cursor:pointer'>
                        <p style='float:right;margin-right:50px' class='ic'>";
                                if(!$b){
                                    echo "<span id='bookmark".$data['id']."' onclick='bookmark(".$data['id'].")' class='glyphicon glyphicon-star-empty'></span>";
                                }
                                else{
                                    echo "<span id='bookmark".$data['id']."' onclick='bookmark(".$data['id'].")' class='glyphicon glyphicon-star'></span>";
                                }
                            echo "<span id='thumb".$data['id']."' onclick='thumb(".$data['id'].")' class='glyphicon glyphicon-thumbs-up' ></span>
                            <span onclick='goTo(".$data['id'].")' class='glyphicon glyphicon-arrow-right'></span>
                        </p>
                    </span>
                </div>
                <div class='source'>
                <ul class='list-group'>
                	<li>
        <div class='panel panel-default'>
            <div class='panel-body'>            
               <div class='panel-more1'>
     			<ul class='desc_view'>
     				<li>".list_view($data['desc'])."</li>
     			</ul>
     		</div>
     		</div>
            </div>
        </div>
    </li>
  <hr/>";
    }
?>
    
                
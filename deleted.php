<!-- In Projects -->


                    <div id="location" class="box animation fadeInLeft" style="padding:8px;">
                        	<div>
                        		<!--<span class="glyphicon glyphicon-map-marker box_icon"></span>-->
                    			<span class="box_title">Projects Name</span>
                            </div>
                            
                            <div class="box_text">
                           <?php
                                
                                for($i = 0; $i<count($projects); $i++) {
					               $ImageName=split("@@@",$projects[$i]['images']);
                            ?> 	 <a href="projects.php?id=<?php echo $projects[$i]['tableId'] ?>" style="display:inline-block;width:16.3%;">
                         <span style="display:block;"> <img src="admin/uploaded/gallery/<?php echo $ImageName[0] ?>"  alt="<?php echo $projects[$i]['title'] ?>" width="100%" /></span><span style="display:block;height:50px;"><?php echo $projects[$i]['title'] ?></span>

                                                            
                                                        </a>
                                <?php }?>
                               
                            </div>
                    	</div> 
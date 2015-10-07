
  <center><i class="huge desktop icon""></i><h3>Computers</h3>
              <hr>
                <?php 
                    
                   if(!empty($comps)){
                      foreach($comps as $comps){
                             $comp_id = $comps['comp_id'];
                             $comp_num = $comps['comp_num'];
                             $location = $comps['location'];
                             $status = $comps['status'];
                     

                     ?>


                   
                     <button class="ui basic button"> 
                        
                     <center><i class="huge <?php if($status==1){ echo 'green';}else{ echo 'red'; }; ?> 
                                desktop icon"></i>
                         <p> <b>PC-<?php echo $comp_num ?> <br> <?php echo $location ?></b></p>
                         <a id="editpc" class="ui button mini yellow"><i class="write icon"></i></a>
                         <a class="ui mini red button" href="#"><i class="remove icon"></i></a>       
                     </button>
  

   
                     <?php 
                        }
                        }
                      ?>
  
                
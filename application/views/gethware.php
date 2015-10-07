<table class="ui compact table">
  <thead>
    <tr>
      <th></th>
      <th>Name</th>
      <th>Description</th>
      <th>Date Installed</th>
      <th>Serial No.</th>
      <th>PC ID</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  
 
  <center><i class="huge desktop icon""></i><h3>Hardwares</h3>
              <hr>
                <?php 
                    
                   if(!empty($hwares)){
                      foreach($hwares as $hwares){
                             $hw_id = $hwares['hw_id'];
                             $hw_name = $hwares['hw_name'];
                             $hw_description = $hwares['hw_description'];
                             $hw_dateinstalled = $hwares['hw_dateinstalled'];
                             $hw_serialno = $hwares['hw_serialno'];
                             $hw_comp_id = $hwares['hw_comp_id'];
                             $hw_status = $hwares['hw_status'];
                     ?>
              <tr>
                  <th>
                   <?php echo $hw_id; ?>   
                  </th>
                  <th>
                  <?php echo $hw_name; ?>
                  </th>
                  <th>
                  <?php echo $hw_description; ?>
                  </th>
                  <th>
                  <?php echo $hw_dateinstalled; ?>
                  </th>
                  <th>
                  <?php echo $hw_serialno; ?>
                  </th>
                  <th>
                  <?php echo $hw_comp_id;?>
                  </th>
                  <th>
                     <button class="ui basic button"> 
                     <center><i class=" <?php if($hw_status==1){ echo 'green';}else{ echo 'red'; }; ?> 
                                desktop icon"></i>
                     </button>
                  </th>
                
                  
                  <th><a id="editpc" class="ui button mini yellow"><i class="write icon"></i></a>
                  <a class="ui mini red button" href="#"><i class="remove icon"></i></a></th>       
                     
                     
                 </tr>
   
                     <?php 
                        }
                        }
                      ?>
  
 </tbody>
</table>      
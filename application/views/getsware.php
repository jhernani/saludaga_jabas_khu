<table class="ui compact table">
  <thead>
    <tr>
      <th></th>
      <th>Name</th>
      <th>Description</th>
      <th>Date Installed</th>
      <th>Date Type</th>
      <th>Date Expire</th>
      <th>Product Key</th>
      <th>PC ID</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  
 
  <center><i class="huge desktop icon""></i><h3>Softwares</h3>
              <hr>
                <?php 
                    
                   if(!empty($swares)){
                      foreach($swares as $swares){
                             $sw_id = $swares['sw_id'];
                             $sw_name = $swares['sw_name'];
                             $sw_description = $swares['sw_description'];
                             $sw_dateinstalled = $swares['sw_dateinstalled'];
                             $sw_type = $swares['sw_type'];
                             $sw_expire = $swares['sw_expire'];
                             $sw_productkey = $swares['sw_productkey'];
                             $sw_comp_id = $swares['sw_comp_id'];
                             $sw_status = $swares['sw_status'];
                     ?>
              <tr>
                  <th>
                   <?php echo $sw_id; ?>   
                  </th>
                  <th>
                  <?php echo $sw_name; ?>
                  </th>
                  <th>
                  <?php echo $sw_description; ?>
                  </th>
                  <th>
                  <?php echo $sw_dateinstalled; ?>
                  </th>
                  <th>
                  <?php echo  $sw_type; ?>
                  </th>
                  <th>
                  <?php echo $sw_expire; ?>
                  </th>
                
                  <th>
                  <?php echo $sw_productkey; ?>
                  </th>
                  <th>
                  <?php echo $sw_comp_id;?>
                  </th>
                  <th>
                     <button class="ui basic button"> 
                     <center><i class=" <?php if($sw_status==1){ echo 'green';}else{ echo 'red'; }; ?> 
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
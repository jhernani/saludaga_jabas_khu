


  
<!-- top -->



<body>
<div id="board" class="ui equal width grid">
<div class="column">
    
  <table class="ui orange celled padded table">

   <thead>
      <tr>
          <th>
   
          <i class="list layout icon"></i>
          <select name="select" id="selasset">
            <option value="computer">Computer</option>
            <option value="hardware">Hardware</option>
            <option value="software">Software</option>
            </select>
          </th>
          <th>
     
              <button class="circular ui icon add button">
                <i class="plus icon"></i>
              </button>
             
           </th>
     
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>
       <div id="computer" class="assets"> 
        <div id="viewdata" >   
         <br/>
       </div>
        <script>viewdata();</script>
       </div>
                
       <div id="hardware" class="assets"> 
        <div >   
       
         <br/>
       </div>
           <script>viewhardware();</script>
       </div>  
                
       <div id="software" class="assets"> 
        <div>   
            <script>viewsoftware();</script>
         <br/>
       </div>
       </div>  
      </td>
      </tr>
  </tbody>
  </table>

</div>
</div>
<?php $this->load->view('modals/addpc');  ?>
</body>
</html>
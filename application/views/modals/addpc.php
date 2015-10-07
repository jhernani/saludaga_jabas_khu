

<div class="ui test modal">
  <i class="close icon"></i>
  <div class="header">
  
     <h1>   Add an Asset  </h1>
 
  </div>
  <label>Asset Type:</label>
  <select name="select" id="selectMe">
  <option value="option1">Computer</option>
  <option value="option2">Hardware</option>
  <option value="option3">Software</option>
  </select>
  <center><div style="font-size:10px;width:50%;" id="info"></div></center>
<div id="option1" class="group">           
<form id="addpc" class="ui form segment">
 <div class="two fields">
    <div class="field">
      <label>Computer Number</label>
      <input placeholder="Computer Number" name="comp_num" type="text">
    </div>
    <div class="field">
      <label>Status</label>
      <div class="ui selection dropdown">
        <input name="status" type="hidden">
        <div class="default text">Status</div>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item" data-value="1">Active</div>
          <div class="item" data-value="0">Inactive</div>
        </div>
      </div>
    </div>
  </div>
  <div class="field">
    <label>Location</label>
    <input placeholder="Location" name="location" type="text">
  </div>
   
  <div class="ui clear button">Clear</div>
  <button type="submit" class="ui positive button">Submit<i class="checkmark icon"></i></button> 
 
</form>
        
<div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
  </div>
      
  </div>
  <div id="option2" class="group">
      <form id="addhw" class="ui form segment">
  <div class="two fields">
    <div class="field">
      <label>Hardware Name</label>
      <input placeholder="Name" name="hw_name" type="text">
    </div>
    <div class="field">
      <label>Status</label>
      <div class="ui selection dropdown">
        <input name="hw_status" type="hidden">
        <div class="default text">Status</div>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item" data-value="1">Active</div>
          <div class="item" data-value="0">Inactive</div>
        </div>
      </div>
    </div>
  </div>
  <div class="two fields">
      <div class="field">
      <label>Hardware Description</label>
        <input placeholder="Brand,Model,Manufacturer.." name="hw_description" type="text">
      </div>
      <div class="field">
      <label>Serial Number</label>
        <input placeholder="Serial Number" name="hw_serialno" type="text">
      </div>
   </div>
  <div class="two fields">
    <div class="field">
      <label>Date Installed</label>
      <input name="hw_dateinstalled" type="date">
    </div>
    <div class="field">
      <label>Installed In</label>
      <div class="ui selection dropdown">
        <input name="hw_comp_id" type="hidden">
        <div class="default text">Computer Number</div>
        <i class="dropdown icon"></i>
        <div id="pop_pcs" class="menu">
         
        </div>
      </div>
    </div>
  </div>
<div class="ui clear button">Clear</div>
<button type="submit" class="ui positive button">Submit<i class="checkmark icon"></i></button> 
</form>
      <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    
  </div>
  </div>
  <div id="option3" class="group">
     <form id="addsw" class="ui form segment">
  <div class="two fields">
    <div class="field">
      <label>Software Name</label>
      <input placeholder="Name" name="sw_name" type="text">
    </div>
      <div class="field">
        <label>Software Description</label>
        <input placeholder="Version,Developer,Distributor.." name="sw_description" type="text">
      </div>
   
  </div>
  
  <div class="four fields">
        <div class="field">
        
      <label>Status</label>
      <div class="ui selection dropdown">
        <input name="sw_status" type="hidden">
        <div class="default text">Status</div>
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item" data-value="1">Active</div>
          <div class="item" data-value="0">Inactive</div>
        </div>
      </div>
    </div>
      <div class="field">
        <label>Software License Type</label>
       <select name="sw_type" id="selecttype">
        <option value="0">Free</option>
        <option value="1">Paid</option>
        </select>
      </div>
    <div class="field">
      <label>Date Installed</label>
      <input name="sw_dateinstalled" type="date">
    </div>
   
    <div class="field">
      <label>Installed In</label>
      <div class="ui selection dropdown">
        <input name="sw_comp_id" type="hidden">
        <div class="default text">Computer Number</div>
        <i class="dropdown icon"></i>
        <div id="pop_pcs1" class="menu">
         
            
        </div>
      </div>
    </div>
  </div>
  <div id="1" class="group1 three fields">
      <div class="field">
        <label>Expiration Date</label>
      <input  name="sw_expire" type="date">
     </div>
   
      <div class="field">
        <label>Software Product Key</label>
        <input placeholder="Product Key" name="sw_productkey" type="text">
      </div>
   
  </div>
    <div class="ui clear button">Clear</div>
    <button type="submit" class="ui positive button">Submit<i class="checkmark icon"></i></button> 
</form>
    
   <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    
  </div>
  </div>   
        
  
</div>
       
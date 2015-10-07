<div id="topmenu" class="ui horizontal inverted menu fixed top">

  <div class="right item">
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="Search...">
        <i class="search link icon"></i>
      </div>
    </div>
	
    <a href="logout" class="ui item">
      <i class="sign out red large icon"></i>Logout
    </a>
</div>

</div>





<!--vertical menu-->

<div class="ui vertical teal sticky menu fixed left" style="width:20%;">
<div class="container" style="background-color:#FA7252;height:10%;">

<div class="item">
	
    <div class="content">
      Welcome!
	  <div class="ui sub header"><?php echo $this->session->userdata('emp_name'); ?></div>
      <?php echo $this->session->userdata('position'); ?>
    </div>
  </div>
  
  </div>
  
<div id="sidebar">
    
    
  <a class="<?php if($this->uri->segment(2)=="home"){echo "active";}?> item" href="home">
      <i class="home icon"></i> Home
    </a>
    <a  class="<?php if($this->uri->segment(2)=="assets"){echo "active";}?> item" href="assets" >
      <i class="list layout icon"></i> Assets
    </a>
    <a  class="<?php if($this->uri->segment(2)=="monitoring"){echo "active";}?> item" href="monitoring">
      <i class="configure icon"></i> Monitoring
    </a>
    <a class="<?php if($this->uri->segment(2)=="musers"){echo "active";}?> item" href="musers">
      <i class="users icon"></i> Manage Users</a>
    </a>
    <a class="<?php if($this->uri->segment(2)=="reports"){echo "active";}?> item"  href="reports">
      <i class="file text icon"></i> Reports
    </a> 
	<a href="calendar" class="<?php if($this->uri->segment(2)=="mycal"){echo "active";}?>item">
      <i class="calendar icon"></i> Calendar
    </a>
	</div>
</div>


<head>
  <style type="text/css">
    body {
      background-color: #e4e4e4;
      margin-top: 100px;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  </head>


<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">

 <h2 class="ui teal image header">
      <img src="<?php echo base_url()?>assets/images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
 
      
      <form class="ui large form" action="<?php echo base_url()?>main/login_validation" method="post" accept-charset="utf-8">
          
          <div class="ui stacked segment">
       
            <div class="field">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input type="text" name="email" placeholder="E-mail address">
                </div>
            </div>

            <div class="field">

            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
            </div>
          <input type="submit" value="Login" class="ui fluid large teal submit button"/>
        

        <div class="ui error message"></div>

       </div> 
      </form>

     <?php echo validation_errors("<div class='ui error message'>","</div>"); ?>
      
    
  </div>
</div>


</body>
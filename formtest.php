<!--

	<?php include 'header.html'; ?>
    <?php include 'navbar.html'; ?>
	
    
<br>
<br>
<br>
-->


<!--
<div class="container">
<form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
    </div>
-->
<!--

      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'L0tsof!nformation';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $name = addslashes ($_POST['name']);
               $experience = addslashes ($_POST['experience']);
                $qual = addslashes ($_POST['qual']);
                $shop = addslashes ($_POST['shop']);
                $shop_link = addslashes ($_POST['shop_link']);
                $Hobbies = addslashes ($_POST['Hobbies']);
            }else {
                $name = ($_POST['name']);
               $experience = ($_POST['experience']);
                $qual = ($_POST['qual']);
                $shop = ($_POST['shop']);
                $shop_link = ($_POST['shop_link']);
                $Hobbies = ($_POST['Hobbies']);
            }
            
            $emp_salary = $_POST['emp_salary'];
            
            $sql = "INSERT INTO mechanics ". "(name, experience, qual, shop, shop_link, Hobbies)".
                "VALUES('$name','$experience','$qual', '$shop', '$shop_link', '$Hobbies')";
               
            mysql_select_db('Certiride');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
            <div class="container">
                <h1>Add Mechanic</h1>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Name</td>
                        <td><input name = "name" type = "text" 
                           id = "name"></td>
                     </tr>
                     <tr>
                        <td width = "100">Experience</td>
                        <td><input name = "experience" type = "text" 
                           id = "experience"></td>
                     </tr>
                     <tr>
                        <td width = "100">Qualifications</td>
                        <td><input name = "qual" type = "text" 
                           id = "qual"></td>
                     </tr>
                     <tr>
                        <td width = "100">Shop</td>
                        <td><input name = "shop" type = "text" 
                           id = "shop"></td>
                     </tr>
                     <tr>
                        <td width = "100">Shop Link</td>
                        <td><input name = "shop_link" type = "text" 
                           id = "shop_link"></td>
                     </tr>
                     <tr>
                        <td width = "100">Hobbies</td>
                        <td><input name = "Hobbies" type = "text" 
                           id = "Hobbies"></td>
                     </tr>
                  
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add mechanic">
                        </td>
                     </tr>
                  
                  </table>
               </form>
                </div>
<br>
            
            <?php
         }
      ?>

<br>
<hr>


<div class="container">

<div id="wufoo-z1dmnjr21fijduw">
Fill out my <a href="https://blakecertiride.wufoo.com/forms/z1dmnjr21fijduw">online form</a>.
</div>
    
    </div>

-->

<!--

<div class="container">
     Change the width and height values to suit you best 
    <div class="typeform-widget" data-url="https://blake70.typeform.com/to/Cf1VDJ" data-text="Certiride - Sell my car" style="width:100%;height:500px;"></div>

</div>
<br>
<br>

<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>

-->




<!--
<script type="text/javascript">var z1dmnjr21fijduw;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'blakecertiride',
'formHash':'z1dmnjr21fijduw',
'autoResize':true,
'height':'678',
'async':true,
'host':'wufoo.com',
'header':'show',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { z1dmnjr21fijduw = new WufooForm();z1dmnjr21fijduw.initialize(options);z1dmnjr21fijduw.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>

-->

<!--

    
    <?php    
        include 'footer.html';
    ?>

        
    
</html>-->

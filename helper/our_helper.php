<?php

/************************************************************
   genterate unique name for files

************************************************************/
$photo = uniqid().date("Y-m-d-H-i-s").str_replace(" ", "_", $_FILES["picture"]['name']);

/************************************************************
   genterate randdom string

************************************************************/
function randStr($num){
  $arr = array_merge(range("A", "Z"), range("a", "z"), range(0, 9));
  $str = "";
  for ($i=1; $i <=$num; $i++) {
    $str .= $arr[rand(0, count($arr)-1)];
  }
  return $str;
}

function calc($p, $v, $d = 0){
  $p = $p - ($p*$d)/100;
  $p = $p + ($p*$v)/100;
  return $p;
}

/************************************************************
   make a  safe url in php

************************************************************/

function safeURL($input){
  $out = "";
  $input = strtolower($input);
  for($i = 0; $i < strlen($input); $i++){
    $working = ord(substr($input,$i,1));
    if($working == 32){
      $out .= "-";
    }
    else if($working == 47){
      $out .= "-";
    }
    else if(($working>=97)&&($working<=122)){
      $out .=  chr($working);
    } elseif(($working>=48)&&($working<=57)){
      $out .=  chr($working);
    }
  }
  $out = str_replace("--", "-", $out);
  $out = str_replace("--", "-", $out);
  $out = str_replace("--", "-", $out);
  return $out;
}

/************************************************************
   word limitaion in php

************************************************************/

function cutWordString($string, $strword, $strchar){
  $str = $string;
  $givenCharect = $strchar;
  $givenWord = $strword;
  $Character = substr($str, 0, $givenCharect);
  $Word = str_word_count($Character);

  if(strlen($str) < $Character) {
    $strRestult = wordwrap($str, strlen($str));
    $strRestult = explode("\n", $strRestult);
    $strRestult = $strRestult[0] ." <a href='#'>Read more</a>";
    echo $strRestult;
  } else{
    if($Word > $givenWord){
      echo "<h1>You can give at least ".$givenWord." words.</h1>";
    }else{
       $strRestult = wordwrap($str, $givenCharect);
       $strRestult = explode("\n", $strRestult);
       $strRestult = $strRestult[0] ." <a href='#'>Read more</a>";
       echo $strRestult;
    }
  }

}

cutWordString($string, 10, 100);
echo "<br/>====================<br/>";
cutWordString($string1, 10, 70);


/************************************************************
   insertin data in a text file 

************************************************************/


if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(file_exists("text.txt")){
    $str ="
".$_POST['name']." ".$_POST['email']." ".$_POST['contact'];
  }else {
    $str = $_POST['name']." ".$_POST['email']." ".$_POST['contact'];
  }
  $fh = fopen("text.txt", "a");
  fwrite($fh,$str );
  fclose($fh);
  echo "<script >self.location='form.php?succes=Insert Succesfully';</script>";

}else {
  echo "<script >self.location='form.php?error=Error generated';</script>";
  die();
}





/************************************************************
   inserting display and search text in a text file using class 

************************************************************/

class Booklist2{
  public $isbn;
  public $bookName;
  public $authorName;
  
  public function __construct($isbn, $bookName, $authorName){
    $this->isbn = $isbn;
    $this->bookName = $bookName;
    $this->authorName = $authorName;
    
    if(file_exists("book2.txt")){
      $str = "\n".$this->isbn." ".$this->bookName." ".$this->authorName;
    }else{
      $str = $this->isbn." ".$this->bookName." ".$this->authorName;

    }

    // open file append mode a== append 
    $fh = fopen("book2.txt", "a");
    fwrite($fh , $str);
    fclose($fh);

  }
  public function display(){
    $file = file("book2.txt");
    foreach($file as $value){
      list($isbn , $bookName, $authorName) = explode(" ", $value);
    ?>
    <table border="1">
      <tr>
        <td><?php echo $isbn; ?></td>
        <td><?php echo $bookName; ?></td>
        <td><?php echo $authorName; ?></td>
      </tr>
    </table>
    <?php }
  }





/************************************************************
   apcepting data in specific pattern

************************************************************/


if(isset($_POST['btn'])){
  extract($_POST);
  $msg = "";
  if($name){
    if(strlen($name) < 4 || strlen($name) > 10){
    $msg .= "name must be between 4-10<br/>";
  }else{
    $msg .= "your name is : ".$name."<br/>";
  }
  }
  if($email){
    $pattern = "/@/";
    if(preg_match($pattern, $email)){
      $msg .= "your email is : ".$email."<br/>";
    }else{
      $msg .= "email must have @<br/>";
    }
  }else{
    $msg .= "enter you email<br/>";
  }
  if($mobile){
    $mobilepattern = "/[0-9]{3}-[0-9]{3}-[0-9]{6}/";
    if(preg_match($mobilepattern, $mobile)){
      $msg .= "you mobile is : ".$mobile."<br/>";
    }else{
      $msg .= "mobile must have this pattern xxx-xxx-xxxxxxx<br/>";
    }
  }
  else{
    $msg .=" enter your moblie<br/>";
  }
  if($msg){
    echo "<h1>{$msg}</h1>";
  }
}









if($_SERVER["REQUEST_METHOD"] == "POST"){
  extract($_POST);
  $msg = "";
  // name
  if($name){
    if(strlen($name) <4 || strlen($name) > 20){
      $msg .= "name can't less than 4 and more than 20 character.<br/>";
    }else{
      $msg .= "Name  is : ".$name."<br/>";
    }
  }else{
    $msg .="enter your name<br/>";
  }
  // email
  if($email){
    if(strlen($email) < 10 || strlen($email) > 30){
      $msg .="email must contain between 10-30 charectar.<br/>";
    }
    $pattern = "/[a-zA-Z0-9]{4,}[@]{1}[a-zA-Z]{5,}[.]{1}[a-zA-Z]{2,}/";

    // if you are in trouble to remember this code simply write the folowing code.


    // $pattern = "/[@]/";  

    if(preg_match($pattern, $email )){
      $msg .= "<br/>".$email." is valid email'";
    }else{
      $msg .="<br/>". "Email must have a @ and . sing .";
    }
    
  }else{
    $msg .="Please enter your email.<br/>";
  }
  // phone 
  if($phone){
    $phonePattern = "/[0-9]{3}-[0-9]{3}-[0-9]{6}/";
    if(preg_match($phonePattern, $phone)){
      $msg .= "your phone is: ".$phone."<br/>";
    }else{
      $msg .= "phone number must enter this pattern xxx-xxx-xxxxxx<br/>";
    }
  }else {
    $msg .="Enter you phone number.<br/>";
  }
  if($password){
    if(strlen($password) < 4 || strlen($password) > 10){
      $msg .="password length must between 4-10.<br/>";
    }else{
      $msg .="your password is :".$password;
    }
  }else{
    $msg .="Enter your password.<br/>";
  }
  if($address){
    if(strlen($address) < 10){
      $msg .="address length must at least character. <br/>";
    }else{
      $msg .="your address is :".$address;
    }
  }else{
    $msg .="Enter your address.";
  }

  if($msg){
    echo "<h2>{$msg}</h2>";
  }

  
}

?>
<script>
  

  function myWindow(){
    var name = window.document.forms[0].elements[0].value;
    var email = window.document.forms[0].elements[1].value;
    var password = window.document.forms[0].elements[2].value;
    var checkEmail = /\S+@\S+\.\S+/;
    
    var  msg = "";
    
    if (name == "") { 
      msg += "Enter your name\n";
    }
    else if(name.match(/[@,#,$,!,~,`,^,&,%,0-9]/)) {
      msg += "Name can't be conatain any number or sepecial digit.\n";
    }
    
    if (email == "")  {
      msg +="Enter your email\n";
    }
    else if(!checkEmail.test(email)) {
      msg += "Invlid Email\n";
    }

    if (password.length < 1)  {
      msg +="Enter your pass\n";
    }
    else if(password.length < 5) {
      msg += "Password must be more than 5 digit\n"
    }
    else if(password.length > 10) {
      msg += "Password must be less than 10 digit\n"
    }

    if(msg == "") {
      var win = window.open("", " ", "height=300 , width=300 ");
      win.document.write("<body>");
      win.document.write("<h1> Input Data </h1><br/>");
      win.document.write("Your Name is : " + name+"<br/>");
      win.document.write("Your Email is : " + email+"<br/>");
      win.document.write("Your Password is : " + password);
      win.document.write("</body>");
    }else {
      alert(msg);
    }
    return false;
    
  }


    function passwordCheck() {
      /**********************************************************
        Password validation
      ***********************************************************/
      var passArr =[
        "vary weak",
        "weak",
        "average",
        "strong",
        "strongest",
        "very Strong"
      ]
      var pass =  document.getElementById('password').value;
      var score = 0;
      
        if(pass.length>= 3) {
          score++
          
        } 
        if(pass.length>= 8) {
          score++
          
        }
         
        if(pass.match(/[0-9]/)) {
          score++
          
        } 
        if(pass.match(/[a-z]/ && /[A-Z]/)) {
          score++
        
        } 
        if(pass.match(/[@,#,$,!,~,`,^,&,%]/)) {
          score++
          
        } 
        document.getElementById('password_status').innerHTML = passArr[score];
        document.getElementById('password_status').className = "password_class"+score;
      

    }


      /**********************************************************
        Email validation
      ***********************************************************/
    function emailCheck() {


      var arr = [
        "admin@gmail.com",
        "hasan@gmail.com",
        "kalam@gmail.com",
        "mamun@gmail.com",
        "moheb@gmail.com",
        "tarek@gmail.com",
        "jwel@gmail.com",
        "rajin@gmail.com",
        "anis@gmail.com"
      ]
        
      
      var em = document.getElementById('email').value;
      var status = 0;
      if(em.length >0) {
        if(validateEmail(em)) {
          for(index in arr) {
            if(arr[index]==em){
              status++;
              break;
            }
          }
          if(status == 0) {
            document.getElementById('email_status').innerHTML = "Available"
            document.getElementById('email_status').className = "email_success"
          }
          if(status == 1) {
            document.getElementById('email_status').innerHTML = "Not Available"
            document.getElementById('email_status').className = "email_status"
          }
        } else {
          document.getElementById('email_status').innerHTML = "Invalid Email",
          document.getElementById('email_status').className = "email_status"
        }

      } else {
        document.getElementById('email_status').innerHTML = ""
      }

      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(String(email).toLowerCase());
      }



      return false
  }
  function newWindow(){
    var msg = "";
    var emailTest = /\S+@\S+\.\S+/;
    var name = window.document.forms[0].elements[0].value;
    var email = window.document.forms[0].elements[1].value;
    var password = window.document.forms[0].elements[2].value;
    
    if(name==""){
      msg += "Name is requerd\n";
    }
    else if(name.match(/[~,@,#,$,%,^,&,*,(,),{,},0-9]/)) {
    //else if(name.match(/[@,#,$,!,~,`,^,&,%,0-9]/)) {
      msg +="name can't be amy number or special charecter\n";
    }
    if(email ==""){
      msg += "email is requerd\n";
    }
    else if(!emailTest.test(email)){
      msg +="Invalid email";
    }
    if(password.length <1){
      msg += "password is requerd\n";
    }
    else if(password.length <5){
      msg +="password must be more than 5 digit\n";
    }
    else if(password.length >10){
      msg +="password must be less than 10 digit\n";
    }
    if(msg==""){
      var win = window.open('', '', 'height=300, width=300');
      //var win = window.open("", " ", "height=300 , width=300 ");
      win.document.write("<body>");
      win.document.write("<h1>Input Data</h1><br/>");
      win.document.write("your name is : "+name+"<br/>");
      win.document.write("your name is : "+email+"<br/>");
      win.document.write("your name is : "+password+"<br/>");
      
      win.document.write("</body>");
      
    }else {
      alert(msg);
    }
    
    return false;
    }
    
    
    var setCockie = document.cockie ="Hasan";
    //expires=Tue, 08 Oct 2019 07:42:00 UTC;
    //alert(setCockie);
    





    function validateForm(){
    
    var name = window.document.forms[0].elements[0].value;
    var email = window.document.forms[0].elements[1].value;
    var pass = window.document.forms[0].elements[2].value;
    var checkEmail = /\S+@\S+\.\S+/;
    
    
    var msg = '';
    if(name == ""){
      msg += "Name is required\n";
    }
    if(email ==""){
      msg += "Email is required\n";
    } 
    else if(!checkEmail.test(email)) {
      msg +="Invalid Email\n";
    }
    if(pass.length <1){
      msg += "password is required\n";
    }
    else if(pass.length <5){
      msg +="Password mustbe more than 5 digit.\n";
    }
    else if(pass.length >10){
      msg +="Password mustbe less than 10 digit.\n";
    }
    
    if(msg == "") {
      var win = window.open("", "", "width=300 height=300");
      win.document.write("<body>");
      win.document.write('<h1>Input Data </h1><br/>');
      win.document.write('your name is : '+name+"<br/>");
      win.document.write('your name is : '+email+"<br/>");
      win.document.write('your name is : '+pass+"<br/>");
      win.document.write("</body>");
    }
    else {
      alert(msg);
    }
    
    }





/************************************************************
   this php code mustbe added for validation of email  line 561 to 614

************************************************************
  require "../library/model.php"; 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $crud = new Crud();
    $where = array(
       'email' => $_POST['test_email']
    );
    $status = $crud->ReadData("*", 'user' ,  $where);
    if( $status->num_rows > 0){
      echo 0;
    }else{
      echo 1;
    }
  }
  die();
*/

    jQuery(document).ready(function($) {
      jQuery("body").on('input',"input[name='email']", function(event) {
        var email = $(this).val();
        email = email.toLowerCase();


        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        $(".email-status").removeClass('success');
        if(re.test(String(email))){

          $.ajax({
            type: 'POST',
            data: {
              'test_email': email
            },
            url: 'http://localhost/IDB/1252639/jquery/php18_mvc2_jquery/api/ajax-register.php',
            success: function(data){
              
               data = parseInt(data);
              if(data){
                $(".email-status").addClass('success');
                $(".email-status").text("Available");
              }else{
                $(".email-status").text(" email already used");
              }
              
            }
          });
          
        }else if (email.length == 0) {
          $(".email-status").text("");
        }
        else{
          $(".email-status").addClass('email-status');
          $(".email-status").text("Invalid Email");
        }
      });

      






</script>
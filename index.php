<?php

/********************************
*	header section 				*
*********************************/
if(isset($_GET['f'])){
	include "includes/frontInclude/header.php";

}
// login page
else if(isset($_GET['logi'] )){
	if($_GET['logi']){
		include "includes/login-header.php";
	}else{
		include "includes/login-header.php";
	}
}
// super admin
else if(isset($_GET['s'])){
	if($_GET['s']){
		include "includes/adminInclude/header.php";
	}else{
		include "includes/login-header.php";
	}
}
// teacher login
else if(isset($_GET['t'] )){
	if($_GET['t']){
		include "includes/teacherInclude/header.php";
	}else{
		include "includes/login-header.php";
	}
}
// student login
else if(isset($_GET['st'] )){
	if($_GET['st']){
		include "includes/studentInclude/header.php";
	}else{
		include "includes/login-header.php";
	}
}
// parent login
else if(isset($_GET['pr'] )){
	if($_GET['pr']){
		include "includes/parentInclude/header.php";
	}else{
		include "includes/login-header.php";
	}
}
// librarian login
else if(isset($_GET['lr'] )){
	if($_GET['lr'] ){
		include "includes/librarianInclude/header.php";
	}else{
		include "includes/login-header.php";
	}
}
// account login
else if(isset($_GET['acc'] )){
	if($_GET['acc']){
		include "includes/accountantInclude/header.php";
	}else{
		include "includes/login-header.php";
	}
}
else{
	include "includes/frontInclude/header.php";
}


/********************************
*	body section 				*
*********************************/
if(isset($_GET['f'])){
	if(file_exists("views/front/".$_GET['f'].".blade.php")){
		include "views/front/".$_GET['f'].".blade.php";
	}else{
		include "views/front/404.php";
	}
}
		// login page
else if(isset($_GET['logi'])){
	if($_GET['logi']){
		if(file_exists("views/login/".$_GET['logi'].".exe.php")){
			include "views/login/".$_GET['logi'].".exe.php";
		}else{
			include "views/login/".$_GET['logi'].".exe.php";
		}
	}else{
		include "views/login.exe.php";
	}
}
		// super admin
else if(isset($_GET['s'])){
	if($_GET['s']){
		if(file_exists("views/admin/".$_GET['s'].".exe.php")){
			include "views/admin/".$_GET['s'].".exe.php";
		}else{
			include "views/admin/404.php";
		}
	}else{
		include "views/login.exe.php";
	}
}
		// teache page
else if(isset($_GET['t'])){
	if($_GET['t']){
		if(file_exists("views/teacher/".$_GET['t'].".exe.php")){
			include "views/teacher/".$_GET['t'].".exe.php";
		}else{
			include "views/teacher/404.php";
		}
	}else{
		include "views/login/login.exe.php";
	}
}
		// student page
else if(isset($_GET['st'])){
	if($_GET['st']){
		if(file_exists("views/student/".$_GET['st'].".exe.php")){
			include "views/student/".$_GET['st'].".exe.php";
		}else{
			include "views/student/404.php";
		}
	}else{
		include "views/login.exe.php";
	}
}
		// parent page
else if(isset($_GET['pr'])){
	if($_GET['pr']){
		if(file_exists("views/parent/".$_GET['pr'].".exe.php")){
			include "views/parent/".$_GET['pr'].".exe.php";
		}else{
			include "views/parent/404.php";
		}
	}else{
		include "views/login.exe.php";
	}
}
		// accountant page
else if(isset($_GET['acc'])){
	if($_GET['acc']){
		if(file_exists("views/accountant/".$_GET['acc'].".exe.php")){
			include "views/accountant/".$_GET['acc'].".exe.php";
		}else{
			include "views/accountant/404.php";
		}
	}else{
		include "views/login.exe.php";
	}
}
		// librarian page
else if(isset($_GET['lr'])){
	if($_GET['lr']){
		if(file_exists("views/librarian/".$_GET['lr'].".exe.php")){
			include "views/librarian/".$_GET['lr'].".exe.php";
		}else{
			include "views/librarian/404.php";
		}
	}else{
		include "views/login.exe.php";
	}
}
else{
	include "views/front/home.blade.php";
}

/********************************
*	footer section 				*
*********************************/

if(isset($_GET['f'])){
	include "includes/frontInclude/footer.php";
}
// login page
else if(isset($_GET['logi'])){
	if($_GET['logi']){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/login-footer.php";
	}
}
// super admin
else if(isset($_GET['s'])){
	if($_GET['s']){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/adminInclude/login-footer.php";
	}
}
// teacher page
else if(isset($_GET['t'])){
	if($_GET['t'] ){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/login-footer.php";
	}
}
// student page
else if(isset($_GET['st'])){
	if($_GET['st']){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/adminInclude/login-footer.php";
	}
}
// parent page
else if(isset($_GET['pr'])){
	if($_GET['pr']){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/adminInclude/login-footer.php";
	}
}
// accountant page
else if(isset($_GET['acc'])){
	if($_GET['acc']){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/adminInclude/login-footer.php";
	}
}
// librarian page
else if(isset($_GET['lr'])){
	if($_GET['lr']){
		include "includes/adminInclude/footer.php";
	}else{
		include "includes/adminInclude/login-footer.php";
	}
}
else{
	include "includes/frontInclude/footer.php";
}

?>

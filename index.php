<?php
header("Content-type: text/html; charset=utf8");

error_reporting(7);

$ip_sec=explode(".",trim($_SERVER['REMOTE_ADDR']));


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<link href="index.css" rel="stylesheet" type="text/css" />  
    <script src="index.js"></script>

</head>
<body>		
            <nav id="navbar" class="">
                <div class="nav-wrapper">
                    <!-- Navbar Logo -->
                    <div class="logo">
                    <!-- Logo Placeholder for Illustration -->
                    <a href="https://www.jgnet.tw/"><img width="300px" height="auto" src="./img/jgnet_logo.png" alt="宅急網股份有限公司"></a>

                    </div>
                </div>
            </nav>
            
</br></br>
			<div class="form-style-10">
			<h1>註冊裝置<span>請填寫下方表單，</br>系統將為您註冊目前使用的裝置。<br></span></h1>
				<form>
                    
                    <div class="section" ><span>1</span>姓名</div>
                    <div class="inner-wrap">
                        <label>請輸入您的姓名<input type="text" name="cid" /></label>
                    </div>

                    <div class="section"><span>2</span>連絡電話</div>
					<div class="inner-wrap">
						<label>請輸入您的聯絡電話<input type="text" name="phone" /></label>
					</div>

					<div class="section"><span>3</span>Email</div>
					<div class="inner-wrap">
						<label>請輸入完整的email<input type="text" name="uid" /></label>
					</div>

					
					<div class="button-section">
					<input type="submit" name="Sign Up" />
					</div>
				</form>
			</div>


		
		<br><br>

							
		
</body>
</html>

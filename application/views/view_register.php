<!DOCTYPE html>
<?php
  if(!empty($_POST)){
    print_r($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="<?php echo $this->config->base_url('assets/css/bootstrap-responsive.css');?>" type="text/css" rel="stylesheet" />
    <!-- CSS -->



    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

</head>

<body>
         <form class="form-signin" 
        action="/ci/index.php/registerdata" method="POST">

        <div class="control-group">
            <div class="controls">
                <label class="control-label" for="inputEmail">姓名</label>
                <input type="text" id="inputEmail" placeholder="姓名" name="username">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="control-label" for="inputEmail">生日</label>
                <input type="text" id="inputtext" placeholder="生日"name="birth">
            </div>
        </div>


        <div class="control-group">
            <div class="controls">
            <label class="control-label" for="inputEmail">信箱</label>
            <input type="text" id="inputtext" placeholder="信箱" name="email">
            </div>
        </div>


        <div class="control-group">
            <div class="controls">
            <label class="control-label" for="inputEmail">帳號</label>
            <input type="text" id="inputtext" placeholder="帳號" name="id">
            </div>
        </div>


        <div class="control-group">
            <div class="controls">
            <label class="control-label" for="inputtext">密碼</label>
            <input type="password" id="inputtext" placeholder="密碼" name="psw">
            </div>
        </div>

        <div class="control-group">
            
            <div class="controls">
            <label class="control-label" for="inputEmail">電話</label> 
            <input type="text" id="inputtext" placeholder="電話" name="phone">
            </div>
        </div>


        <div class="control-group">
            <div class="controls">
            <label class="control-label" for="inputEmail">卡號</label>
            <input type="text" id="inputtext" placeholder="卡號" name="carnumber">
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn">送出</button>
                <button type="reset" class="btn">清除</button>
            </div>
        </div>
    </form>

</body>
</html>
<?php
	if(!empty($_POST)){
		print_r($_POST);
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Fire.app Demo</title>
    <link rel="stylesheet" href="///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
</head>

<body>


    <div class="row">
        <div class="col-sm-6">
            <form role="form" method="POST" action="/ci/index.php/go" >
                <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" placeholder="name" name="name">
                </div>
                
                <div class="form-group">
                    <label>主旨</label>
                    <input type="text" class="form-control" placeholder="main" name="main">
                </div>
                

               <!--  <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> BMW
                        </label>                                
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Benz
                        </label>
                    </div>
                </div> -->


				<div class="form-group">
                    <label>內容</label>
                    <textarea class="form-control" rows="2" name="message"> </textarea>
                </div>


                <div class="form-group">
                    <label>
                        <button class="btn btn-primary" >送出</button>
                    </label>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>            





<!-- 
<form class="form-horizontal"  method="post" action="">
  <div class="form-a">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>

  <div class="form-a">
    <label for="inputPassword3" class="col-sm-2 control-label" >Password</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="passwod">
    </div>
  </div>

  <div class="form-a">
    <div class="col-sm-offset-4 col-sm-4">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>

  <div class="form-a">
    <div class="col-sm-offset-2 col-sm-2">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form> -->

	<!-- <form name="input" action="" method="post">
	<div class="row">
		Username: <input type="text" name="user">
	</div>
	<div class="row">
	<textarea name="wrd" class="form-control" rows="3"></textarea>
	</div>
	<input type="submit" value="Submit">
	</form> -->
</body>
</html>
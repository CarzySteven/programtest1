<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fire.app Demo</title>
    <link rel="stylesheet" href="///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
</head>
<body>
    
<?php 

    foreach ($dataAry as $key => $value) {
        //Object 呼叫
        echo "id = ". $value->id. " ".
        "name =". $value->name. " ".
        "main =". $value->main. " ".
        "message =". $value->message. " ".
        "msgtime =". $value->sort. " ".
        "create =" . $value->create. " ".
        "modify =" . $value->modify. " ".
        "updated_at =". $value->updated_at. " ".
        "created_at =". $value->created_at. " ".
        "<HR>"."<BR>";
        //Array 呼叫
        //echo $value['id']. $value['name']."<BR>";
    }

?>
    <a href="insert">insert</a>
    <?php 
    
    ?>
    <div class="bs-example">
        <ul class="pagination">
        <?php 
            
        ?>
        <li><a href="/ci/index.php/select?page=<?php
        if($page < floor(($datatotal/$pages_row)))
        echo $page;
        else
         echo $page-1; ?>">
            上一頁</a></li>
            
        <?php for ($i=0; $i < $datatotal/$pages_row; $i++) { ?>
        <li><a href="/ci/index.php/select?page=<?php echo $i+1; ?> ">
        <?php echo $i+1; ?>
        </a></li>
        <?php } ?>
        <li><a href="/ci/index.php/select?page=
            <?php if($page > floor(($datatotal/$pages_row)))
                    echo $page;
                    else
                    echo $page+1; ?>">
            下一頁</a></li>    
    </ul>
    </div>




</body>
</html>
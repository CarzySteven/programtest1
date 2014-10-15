<!DOCTYPE html>
<html lang="en">
<style>
    textarea {
        font-size: 10px;
    }
    div.talk {
        position: absolute;
        left: 20%;
        right: 20% top: 25%;
    }
    td.talk {
        padding: 5cm 5cm
    }
</style>

<body>

</body>

<head>

</head>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Fire.app Demo</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
</head>

<body>

    <div class="talk">
        <table border="2">
            <tr>
                <td class="talk">

                <?php 
                print_r($results); 
                echo "<BR>"; 
                foreach ($results as $key=>$value) 
                    { 
                    // Object 呼叫 
                    echo $value->id. " "
                        .$value->name. " "
                        .$value->main. " "
                        .$value->message. " "
                        .$value->msgtime. " "
                        .$value->sort. " "
                        .$value->create. " "
                        .$value->modify. " "    
                        .$value->updated_at. " "
                        .$value->create_at. " "
                        ."<BR>";
                    // Array 呼叫 
                    // echo $value['id']. $value['name']."                   <BR>"; 
                    } 
                ?>

                </td>
            </tr>

        </table>


    </div>
    <!-- 對話框 -->
    <form action="" method="Post">

        <div class="control-group">
            <label class="control-label" for="textarea">內容</label>
            <div class="controls">
            <input type="text" name"word">    
            <input type="text" name="Word">    
                <textarea class="input-xlarge" id="textarea" rows="8"></textarea>

            </div>
        </div>
        <!-- 送出、清除按鈕 -->
        <div class="bs-docs-example">
            <p>
                <button type="button" class="btn btn-large btn-primary">
                    送出
                </button>

                <button type="button" class="btn btn-large btn-primary">
                    清除
                </button>
            </p>
        </div>
    
    <input type="submit" value="Submit">




    </form>

</body>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    document.write('<script src="http://' +
        (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

</html>

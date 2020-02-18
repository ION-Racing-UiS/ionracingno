<?php
    $result =  file_get_contents('php://input');
    if (strlen($result) > 2){
        echo $result;
        $fileHandle = fopen("team2017.json", "w");
        fwrite($fileHandle, $result);
        fclose($fileHandle);
        return;
    }
?>

<!DOCTYPE html>
<html>

<head>
    <?php $page = "Team"; ?>
    <?php 
        include("../../layout/head_section.php");
        include("nicroutil.php");
        $jsonFile = str_replace("\r\n", "", readAllText("team2017.json"));
        $jsonDef = str_replace("\r\n", "", readAllText("teamdef.json")); 
    ?>
    
    <link rel="stylesheet" href="/libs/modal/magnific-popup.css">
    <script src="/libs/modal/jquery.magnific-popup.js"></script>
    <script src="JsonEditor.js"></script>
    <style>
        #headarea{
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url(/libs/images/team_2017.jpg);
            background-size: cover;
            background-position: top center;
        }
        .col-xs-12.col-sm-4.col-md-3 {
            min-height: 340px;
        }
    </style>
        <style>
        /*#content{
            cursor: none;
        }*/
        div {
            margin-left:10px;
        }
        span {
            
        }
        .add {
            color: blue;
            margin-left: 20px;
        }
        .add:hover {
            cursor:pointer;
        }
        .box {
            border: 1px solid darkgray;
            margin: 3px;
            padding: 5px;
            border-radius: 10px;
            overflow: hidden;
        }
        .title {
            min-width: 80px;
            display: inline-block;
        }
        .box > .title {
            font-size: 1.2em;
            font-weight: bold;

        }
        .element > input {
            width: 300px;
            color: black;
        }
        .minimized {
            max-height:30px;
        }
        .testbox {
            display: inline-block;
            width: 10px;
            height: 10px;
            position:fixed;
            border: 2px solid red;
        }
    </style>
    <script>
        window.onload = function() {
            var editTag = document.getElementById("editor");
            var editor = new JsonEditor(editTag);
            var sendTag = document.getElementById("send");

            var sender = document.createElement("div");
            sender.className = "add";
            sender.innerHTML = "Save";
            sendTag.appendChild(sender);
            sender.addEventListener("click", function(){
                var req = new XMLHttpRequest();
                
                req.onreadystatechange = function(){
                    if (this.readyState == 4 && this.status == 200){
                        location.reload();
                    }
                };
                req.open("POST", "edit.php");
                req.send(JSON.stringify(editor.getObject()));
            });

            editor.setSchema(<?php echo $jsonDef?>);
            editor.setObject(<?php echo $jsonFile?>);
            

        }
    </script>
</head>

<body>
    <div id="headarea">
        <?php include("../../layout/navbar.php"); ?>
        <?php include("heading.php"); ?>
    </div>
    
    <div id="content">
        <div id="editor"></div>
        <div id="send"></div>
        <?php include("content.php"); ?>
    </div>

    <?php include("../../layout/footer.html"); ?>
    <?php include("../../layout/foot_section.html"); ?>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <?php $page = "Team"; ?>
    <?php include("../../layout/head_section.php"); ?>
    
    <link rel="stylesheet" href="/libs/modal/magnific-popup.css">
    <script src="/libs/modal/jquery.magnific-popup.js"></script>
    <style>
        #headarea{
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url(/team/2020/img/groups/TEAM_2020.png);
            background-size: cover;
            background-position: top center;
        }
        .col-xs-12.col-sm-4.col-md-3 {
            min-height: 340px;
        }
    </style>
</head>

<body>
    <div id="headarea">
        <?php include("../../layout/navbar.php"); ?>
        <?php include("heading.php"); ?>
    </div>
    
    <div id="content">
        <?php include("content.php"); ?>
    </div>

    <?php include("../../layout/footer.html"); ?>
    <?php include("../../layout/foot_section.html"); ?>
</body>

</html>

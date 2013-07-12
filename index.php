<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GCQ - Home</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
        <script type="text/javascript">
            function getSelf() {return "<?php echo basename($_SERVER['PHP_SELF']) ?>";}
        </script>
    </head>
    <body>
        <div id="container">
            <div id="nav_container">
                <div id="nav">Menu</div>
            </div>
            
            <div class="spacer"></div>
            
            <div id="content">
                <div id="columnLeft">
                    Left
                </div>
                
                <div id="columnRight">
                    Right
                    
                    <div id="roomType"></div>
                    <div id="fullComp"></div>
                    <div id="cruiseOnly"></div>
                    <div id="notes"></div>
                    <div id="description"></div>
                    <div id="category"></div>
                </div>
            </div>
            
            
        </div>
    </body>
</html>

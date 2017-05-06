<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bootstrap Chat Box Example</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME  CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>


    <div class="container">
        <div class="row pad-top pad-bottom">


            <div class="col-lg-12 col-md-12 col-sm-12 chat">
                <div class="chat-box-div">
                    <div class="chat-box-head">
                        Chat'ok
                            <div class="btn-group pull-right">
                            </div>
                    </div>
                    <div class="panel-body chat-box-main">

                    </div>
                    <div class="chat-box-footer">
                        <div class="input-group">
                            <input type="text" class="form-control msg" placeholder="Enter Text Here...">
                            <span class="input-group-btn">
                                <button class="btn btn-info send" disabled type="button">SEND</button>
                            </span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="loading">
              Loading...
            </div>

            <div class="noconnection">
              No connection :(
            </div>
        </div>
    </div>

    <!-- USING SCRIPTS BELOW TO REDUCE THE LOAD TIME -->
    <!-- CORE JQUERY SCRIPTS FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- CORE BOOTSTRAP SCRIPTS  FILE -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>

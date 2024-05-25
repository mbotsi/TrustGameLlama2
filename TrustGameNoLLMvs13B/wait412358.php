<html>

<head>

    <?php

    include("_projectID.php");
    include(PATH . "basis/participant/header.php");
    $_SESSION['projectID'] = PROJECTID;

    ?>

    <link href="<?php echo PATH; ?>basis/css/newlayout.css?v1" rel="stylesheet" type="text/css" />
    <link href="<?php echo PATH; ?>basis/css/newlayout_bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo PATH; ?>basis/css/grid.css" rel="stylesheet" type="text/css" />
    <style>
        /* Responsive adjustments for smaller devices */
        @media (max-width: 768px) {
            #mainwrap {
                padding: 10% 5% 1%;
                /* Increase padding for better display on smaller devices */
            }

            h3 {
                font-size: 20px;
                /* Reduce heading font size for smaller devices */
            }

            p {
                font-size: 16px;
                /* Reduce paragraph font size for smaller devices */
            }
        }
    </style>
    <title>The other participants kept you waiting.</title>

    <script>
        var v = {};
        var wronganswers = {};
        var totalwronganswers = {};
        var participationFee = parseFloat(getParameter('participationFee'));

        function toLobby() {

            setValue('core', 'playerNr=' + playerNr, 'waitMore', 1);
            location.replace('stage412358.php?session_index=<?php echo $_SESSION[sessionID]; ?>');
            return false;
        }

        function toEarnings() {
            location.replace('stage412377.php?session_index=<?php echo $_SESSION[sessionID]; ?>');
            return false;
        }
    </script>
</head>

<body>
    <div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;">
        <form autocomplete="off">
            <div style="padding-top: 20px">
                <div class="row"><!-- START Element 1 Type: 19-->


                    <script>
                        // Wait for 1 second (1000 milliseconds) and then redirect to Redirection stage if no match was possible because there were not enough players 
                        setTimeout(function() {
                            let currentUrl = window.location.href;
                            let newUrl = currentUrl.replace(/wait.*\.php/i, "stage412377.php");
                            window.location.href = newUrl;
                        }, 1000);
                    </script><!-- END Element 1 Type: 19-->

                </div>
                <script>
                    setInterval(function() {}, 100);
                </script>
        </form>
    </div>
</body>

</html>
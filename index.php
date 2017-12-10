<?php require('template/header.php'); ?>

    <title>CodeTest</title>

    <div role="navigation" class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">CODETEST</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>

                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        <div class="jumbotron">
            <h1>Hello, CodeTest!</h1>
            <p>Codetest task, you could switch to the prefered complete tree you want..</p>
            <p><a id = "completetree" class="btn btn-primary btn-lg" href="#" role="button">Show Complete Tree</a> <a id = "completeajaxtree" class="btn btn-success btn-lg" href="#" role="button">Show Complete Ajax Tree</a></p>
        </div>
        <?php

        /**
         *
         * Basic Setup - should not be changed
         *
         */

        error_reporting(E_ALL);
        ini_set("display_startup_errors", "1");
        ini_set("display_errors", "1");


        //Includes
        require('classes/abstractTreeView.class.php');
        require('classes/myTreeView.class.php');
        $treeView = new myTreeView();
        $treeView->showCompleteTree();
        $treeView->showAjaxTree();


        /**
         * Test
         *
         * echo $treeView->fetchAjaxTreeNode(6);

         */

        /** Add more code here for mode selection / showing etc. **/


        ?>
    </div>

    </body>
    </html>

<?php require('template/footer.php'); ?>
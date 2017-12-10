<?php

/**
 * Implement your code here
 * Feel free to remove the echos :)
 */
include_once 'config/setup.php';

class myTreeView extends abstractTreeView
{

    public function showCompleteTree()
    {
        $con = new setup();

        echo "<div class='row'>";
        echo "<div class='col-md-4'>";
        echo "</div>";
        echo "<div id ='completetreetext' class='col-md-6 ' style='padding-left: 50px'>";
        echo "<h3>" . "Complete " . "<span class='label label-primary'>" . "Tree" . "</span>" . "</h3>";
        echo "</div>";
        echo "<div class='col-md-4'>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
        echo "<div id='expandFirstBar' class='alert alert-danger' style='text-align: justify;' role='alert'>Thanks for opening me, but the root directory here is empty, please check 'CompleteAjaxTree' below. </div>";

        //Connect to database => please change to your correct database in setup.php file..

        $sql2 = "SELECT * FROM tree_entry INNER JOIN tree_entry_lang ON tree_entry.entry_id = tree_entry_lang.entry_id WHERE lang ='ger'";

        $result2 = mysqli_query($con->dbc, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            while ($row = mysqli_fetch_assoc($result2)) {

                $data[] = $row;
            }
        }
        $rootNameFirstDirectory = null;

        foreach ($data as $value) {
            if ($value['parent_entry_id'] == 0 && $value['entry_id'] == 1) {
                $rootNameFirstDirectories = $value['name'];
                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "<div id= 'completetreediv1' class='col-md-8'>" . "<ul>" . "<p id='expandRoot1' class='btn btn-primary'>" . "<img id='imgRoot1' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . " " . "<p class='btn btn-primary'>" . $rootNameFirstDirectories . "</p>" . "<li id='lroot1' style='list-style:none;padding-top:10px;padding-left:41px;'>" . "<p id='expandRoot1' class='btn btn-default'>" . "<img id='imgRoot1' src='../codetest_/images/blank.gif' style='vertical-align: unset;'/>" . "<img id='imgRoot1' style='padding-right:11px;' src='../codetest_/images/collapse.gif' style='vertical-align: unset;'/>" . "</p>" . "</ul>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "</div>";
                echo "<br>";
            }

        }

        $rootNameSecondDirectories = null;
        foreach ($data as $value) {
            if ($value['parent_entry_id'] == 0 && $value['entry_id'] == 2) {
                $rootNameSecondDirectories = $value['name'];
                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "<div id= 'completetreediv2' class='col-md-8'>" . "<ul>" . "<p id='expandRoot2' class='btn btn-primary'>" . "<img id='imgRoot2' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . " " . "<p class='btn btn-primary'>" . $rootNameSecondDirectories . "</p>" . "<li id='lroot2' style='list-style:none;padding-top:10px;padding-left:41px;'>" . "<p id='expandRoot2' class='btn btn-default'>" . "<img id='img' src='../codetest_/images/blank.gif' style='vertical-align: unset;'/>" . "<img id='imgRoot2' style='padding-right:11px;' src='../codetest_/images/collapse.gif' style='vertical-align: unset;'/>" . "</p>" . "</ul>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "</div>";
                echo "<br>";
            }

        }

        $rootNameFirstDirectories = null;
        foreach ($data as $value) {
            if ($value['parent_entry_id'] == 0 && $value['entry_id'] == 3) {
                $rootNameFirstDirectories = $value['name'];
                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "<div id= 'completetreediv3' class='col-md-8'>" . "<ul>" . "<p id='expandRoot3' class='btn btn-primary'>" . "<img id='imgRoot3' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . " " . "<p class='btn btn-primary'>" . $rootNameFirstDirectories . "</p>" . "<li id='lroot3' style='list-style:none;padding-top:10px;padding-left:41px;'>" . "<p id='expandRoot3' class='btn btn-default'>" . "<img id='img' src='../codetest_/images/blank.gif' style='vertical-align: unset;'/>" . "<img id='imgRoot3' style='padding-right:11px;' src='../codetest_/images/collapse.gif' style='vertical-align: unset;'/>" . "</p>" . "</ul>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "</div>";
                echo "<br>";
            }

        }
    }

    public function showAjaxTree()
    {
        $con = new setup();

        $fetchAjaxTreeNode = new myTreeView();

        echo "<div class='row'>";
        echo "<div class='col-md-4'>";
        echo "</div>";
        echo "<div id='completeajaxtreetext' class='col-md-6 ' style='margin-top:-85px;padding-left: 50px'>";
        echo "<h3>" . "Complete " . "<span class='label label-success'>" . "Ajax Tree" . "</span>" . "</h3>";
        echo "</div>";
        echo "<div class='col-md-4'>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
        echo "<div id='expandSecondBar'  class='alert alert-success' style='text-align: center;' role='alert'>Thanks for opening me, please check the 'Supplier' also.</div>";


        //Connect to database => please change to your correct database in setup.php file..

        $sql = "SELECT * FROM tree_entry INNER JOIN tree_entry_lang ON tree_entry.entry_id = tree_entry_lang.entry_id WHERE lang ='eng'";

        $result = mysqli_query($con->dbc, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $data[] = $row;
            }
        }

        $suppliersDirectories = null;

        foreach ($data as $value) {
            if ($value['entry_id'] == 9) {
                $suppliersDirectories = $value['name'];
            }

        }

        $customersDirectories = null;
        foreach ($data as $value) {
            if ($value['entry_id'] == 10) {
                $customersDirectories = $value['name'];
            }

        }


        $sql2 = "SELECT * FROM tree_entry INNER JOIN tree_entry_lang ON tree_entry.entry_id = tree_entry_lang.entry_id WHERE lang ='ger'";

        $result2 = mysqli_query($con->dbc, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_assoc($result2)) {

                $data2[] = $row2;
            }
        }

        $firstDirectories = null;
        foreach ($data2 as $value2) {
            if ($value2['parent_entry_id'] == 0 && $value2['entry_id'] == 1) {

                $firstDirectories = $value2['name'];

                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "<div id='completeajaxtreediv1' class='col-md-8'>" . "<ul >" . "<p id='expand' class='btn btn-success'>" . "<img id='img1' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . " " . "<p class='btn btn-success'>" . $firstDirectories . "</p>" . "<li id='l1' style='list-style:none;margin-top:30px;margin-left:50px;'>" . "<p id='expandSuppliers' class='btn btn-success'>" . "<img id='imgSuppliers' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . "<p id='expandSuppliersText' class='btn btn-success' style='margin-left:3px;margin-right:20px;'>" . $suppliersDirectories . "</p>" . "<p id='expand21' style='margin-top:90px;margin-left:-87px;' class='btn btn-success'>" . "<img id='img21' src='../codetest_/images/expand.gif'  style='vertical-align: unset;'/>" . "</p>" . "<p id='expandText21' class='btn btn-success' style='margin-top:90px;margin-left:3px;'>" . $fetchAjaxTreeNode->fetchAjaxTreeNode(4) . "</p>" . "<p id='expand22' style='margin-top:180px;margin-left:-158px;' class='btn btn-default'>" . "<img id='img22' src='../codetest_/images/blank.gif'  style='vertical-align: unset;'/>" . "</p>" . "<p id='expandText22' class='btn btn-default' style='margin-top:180px;margin-left:3px;'>" . $fetchAjaxTreeNode->fetchAjaxTreeNode(5) . "</p>" . "<p id='expand23' style='margin-top:260px; margin-left:-159px;' class='btn btn-default'>" . "<img id='img23' src='../codetest_/images/blank.gif'  style='vertical-align: unset;'/>" . "</p>" . "<p id='expandText23' class='btn btn-default' style='margin-top:260px;margin-left:3px;'>" . $fetchAjaxTreeNode->fetchAjaxTreeNode(6) . "</p>" . "<li id='l2' style='list-style:none;margin-top:10px;margin-left:50px;/'>" . "<p id='expand' class='btn btn-success'>" . "<img id='img' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . "<p id='expand' class='btn btn-success' style='margin-left:3px;'>" . $customersDirectories . "</p>" . "</li>" . "</ul>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "</div>";
                echo "<br>";

            }

        }
        $secondDirectories = null;
        foreach ($data2 as $value2) {
            if ($value2['parent_entry_id'] == 0 && $value2['entry_id'] == 2) {

                $secondDirectories = $value2['name'];

                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "<div id='completeajaxtreediv2' class='col-md-8'>" . "<ul>" . "<p id='expand2' class='btn btn-default'>" . "<img id='img2' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . " " . "<p class='btn btn-default'>" . $secondDirectories . "</p>" . "<li id='l22' style='list-style:none;padding-top:10px;padding-left:41px;'>" . "<p id='expand2' class='btn btn-default'>" . "<img id='img2' src='../codetest_/images/blank.gif' style='vertical-align: unset;'/>" . "<img id='img' style='padding-right:11px;' src='../codetest_/images/collapse.gif' style='vertical-align: unset;'/>" . "</p>" . "</li>" . "</ul>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "</div>";
                echo "<br>";


            }

        }
        $thirdDirectories = null;
        foreach ($data2 as $value2) {
            if ($value2['parent_entry_id'] == 0 && $value2['entry_id'] == 3) {

                $thirdDirectories = $value2['name'];

                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "<div id='completeajaxtreediv3' class='col-md-8'>" . "<ul>" . "<p id='expand3' class='btn btn-default'>" . "<img id='img3' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>" . "</p>" . " " . "<p class='btn btn-default'>" . $thirdDirectories . "</p>" . "<li id='l33' style='list-style:none;padding-top:10px;padding-left:41px;'>" . "<p id='expand3' class='btn btn-default'>" . "<img id='img3' src='../codetest_/images/blank.gif' style='vertical-align: unset;'/>" . "<img id='img' style='padding-right:11px;' src='../codetest_/images/collapse.gif' style='vertical-align: unset;'/>" . "</p>" . "</ul>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "</div>";
                echo "</div>";
                echo "<br>";

            }
        }
    }

    public function fetchAjaxTreeNode($entry_id)
    {
        // Connect to database => please change to your correct database in setup.php file..

        $con = new setup();

        $sql = "SELECT * FROM tree_entry INNER JOIN tree_entry_lang ON tree_entry.entry_id = tree_entry_lang.entry_id WHERE lang ='ger'";

        $result = mysqli_query($con->dbc, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }

        foreach ($data as $value) {
            if ($value['parent_entry_id'] == 9 && $value['entry_id'] == $entry_id) {
                return $value['name'];
            }

        }
    }
}
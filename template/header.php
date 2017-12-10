<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3//jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script>
        $(document).ready(function () {

            /**
             *
             * Hiding the list-style first before showing them off on a click event
             *
             */

            //$('#completetree').hide();
            //$('#completeajaxtree').hide();

            $('#lroot1').hide();
            $('#lroot2').hide();
            $('#lroot3').hide();
            $('#l1').hide();
            $('#l2').hide();
            $('#l22').hide();
            $('#l33').hide();
            $('#l12').hide();

            $('#completetreetext').hide();
            $('#completetreediv1').hide();
            $('#completetreediv2').hide();
            $('#completetreediv3').hide();

            $('#completeajaxtreetext').hide();
            $('#completeajaxtreediv1').hide();
            $('#completeajaxtreediv2').hide();
            $('#completeajaxtreediv3').hide();


            $('#expand21').hide();
            $('#img21').hide();
            $('#expandText21').hide();

            $('#expand22').hide();
            $('#img22').hide();
            $('#expandText22').hide();

            $('#expand23').hide();
            $('#img23').hide();
            $('#expandText23').hide();

            $('#expandFirstBar').hide();
            $('#expandSecondBar').hide();


            $("#completetree").click('button', function () {
                $('#completetreetext').show();
                $('#completetreediv1').show();
                $('#completetreediv2').show();
                $('#completetreediv3').show();
                $('#completeajaxtreetext').hide();
                $('#completeajaxtreediv1').hide();
                $('#completeajaxtreediv2').hide();
                $('#completeajaxtreediv3').hide();
            });
            $("#completeajaxtree").click('button', function () {
                $('#completetreetext').hide();
                $('#completetreediv1').hide();
                $('#completetreediv2').hide();
                $('#completetreediv3').hide();
                $('#completeajaxtreetext').show();
                $('#completeajaxtreediv1').show();
                $('#completeajaxtreediv2').show();
                $('#completeajaxtreediv3').show();

            });
            /**  Expend the list on mouse click **/

            $("#expandRoot1").click('button', function () {

                $("#imgRoot1").attr("src", "../codetest_/images/collapse.gif");
                $('#lroot1').show();
                $('#expandFirstBar').show();
                $("#expandRoot1").click('button', function () {
                    $("#imgRoot1").attr("src", "../codetest_/images/expand.gif");
                    $('#lroot1').hide();
                    $("#expandRoot1").click('button', function () {
                        $("#imgRoot1").attr("src", "../codetest_/images/collapse.gif");
                        $('#lroot1').show();
                        $("#expandRoot1").click('button', function () {
                            $("#imgRoot1").attr("src", "../codetest_/images/expand.gif");
                            $('#lroot1').hide();
                            $("#expandRoot1").click('button', function () {
                                $("#imgRoot1").attr("src", "../codetest_/images/collapse.gif");
                                $('#lroot1').show();
                                $("#expandRoot1").click('button', function () {
                                    $("#imgRoot1").attr("src", "../codetest_/images/expand.gif");
                                    $('#lroot1').hide();
                                });
                            });
                        });
                    });
                });
            });

            $("#expandRoot2").click('button', function () {

                $("#imgRoot2").attr("src", "../codetest_/images/collapse.gif");
                $('#lroot2').show();
                $('#expandFirstBar').show();
                $("#expandRoot2").click('button', function () {
                    $("#imgRoot2").attr("src", "../codetest_/images/expand.gif");
                    $('#lroot2').hide();
                    $("#expandRoot2").click('button', function () {
                        $("#imgRoot2").attr("src", "../codetest_/images/collapse.gif");
                        $('#lroot2').show();
                        $("#expandRoot2").click('button', function () {
                            $("#imgRoot2").attr("src", "../codetest_/images/expand.gif");
                            $('#lroot2').hide();
                            $("#expandRoot2").click('button', function () {
                                $("#imgRoot2").attr("src", "../codetest_/images/collapse.gif");
                                $('#lroot2').show();
                                $("#expandRoot2").click('button', function () {
                                    $("#imgRoot2").attr("src", "../codetest_/images/expand.gif");
                                    $('#lroot2').hide();
                                });
                            });
                        });
                    });
                });

            });

            $("#expandRoot3").click('button', function () {
                $("#imgRoot3").attr("src", "../codetest_/images/collapse.gif");
                $('#lroot3').show();
                $('#expandFirstBar').show();
                $("#expandRoot3").click('button', function () {
                    $("#imgRoot3").attr("src", "../codetest_/images/expand.gif");
                    $('#lroot3').hide();
                    $("#expandRoot3").click('button', function () {
                        $("#imgRoot3").attr("src", "../codetest_/images/collapse.gif");
                        $('#lroot3').show();
                        $("#expandRoot3").click('button', function () {
                            $("#imgRoot3").attr("src", "../codetest_/images/expand.gif");
                            $('#lroot3').hide();
                            $("#expandRoot3").click('button', function () {
                                $("#imgRoot3").attr("src", "../codetest_/images/collapse.gif");
                                $('#lroot3').show();
                                $("#expandRoot3").click('button', function () {
                                    $("#imgRoot3").attr("src", "../codetest_/images/expand.gif");
                                    $('#lroot3').hide();
                                });
                            });
                        });
                    });
                });

            });

            $("#expand").click('button', function () {
                //console.log("working");
                //$('#expand').hide("<img id='img' src='../codetest_/images/expand.gif' style='vertical-align: unset;'/>");
                $("#img1").attr("src", "../codetest_/images/collapse.gif");
                $('#expandSecondBar').show();
                $("#expand").click('button', function () {
                    $("#img1").attr("src", "../codetest_/images/expand.gif");
                    $('#l1').hide();
                    $('#l2').hide();
                    $("#expand").click('button', function () {
                        $("#img1").attr("src", "../codetest_/images/collapse.gif");
                        $('#l1').show();
                        $('#l2').show();
                            $("#expand").click('button', function () {
                                $("#img1").attr("src", "../codetest_/images/expand.gif");
                                $('#l1').hide();
                                $('#l2').hide();
                                    $("#expand").click('button', function () {
                                        $("#img1").attr("src", "../codetest_/images/collapse.gif");
                                        $('#l1').show();
                                        $('#l2').show();
                                            $("#expand").click('button', function () {
                                                $("#img1").attr("src", "../codetest_/images/expand.gif");
                                                $('#l1').hide();
                                                $('#l2').hide()
                                            });
                                    });
                            });
                    });
                });

                $('#l1').show();
                $('#l2').show();
            });

            /**  Expend the sub-list on mouse click  **/


            $("#expand2").click('button', function () {

                $('#l22').show();
                $("#img2").attr("src", "../codetest_/images/collapse.gif");
                $("#expand2").click('button', function () {
                    $("#img2").attr("src", "../codetest_/images/expand.gif");
                    $('#l22').hide();
                        $("#expand2").click('button', function () {
                            $("#img2").attr("src", "../codetest_/images/collapse.gif");
                            $('#l22').show();
                                $("#expand2").click('button', function () {
                                    $("#img2").attr("src", "../codetest_/images/expand.gif");
                                    $('#l22').hide();
                                });
                        });
                });

            });

            /**  Expend the sub-sub-list on mouse click  **/


            $("#expand3").click('button', function () {

                $('#l33').show();
                $("#img3").attr("src", "../codetest_/images/collapse.gif");
                $("#expand3").click('button', function () {
                    $("#img3").attr("src", "../codetest_/images/expand.gif");
                    $('#l33').hide();
                        $("#expand3").click('button', function () {
                            $("#img3").attr("src", "../codetest_/images/collapse.gif");
                            $('#l33').show();
                                $("#expand3").click('button', function () {
                                    $("#img3").attr("src", "../codetest_/images/expand.gif");
                                    $('#l33').hide();
                                });
                        });
                });

            });

            /**  Expend the sub-sub-sub-list on mouse click  **/

            $("#expandSuppliers").click('button', function () {

                $("#imgSuppliers").attr("src", "../codetest_/images/collapse.gif");
                $('#expand21').show();
                $('#img21').show();
                $('#expandText21').show();
                $('#expand22').show();
                $('#img22').show();
                $('#expandText22').show();
                $('#expand23').show();
                $('#img23').show();
                $('#expandText23').show();
            });
        });
    </script>





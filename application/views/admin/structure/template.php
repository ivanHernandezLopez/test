<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Prueba Enkarga</title>
        <link href="<?php echo URL::base(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL::base(); ?>assets/css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php echo $header; ?>
        
        <div class="container">
            <div class="row">
                <?php echo $body; ?>
            </div>
        </div>
        

        <?php echo $footer; ?>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo URL::base(); ?>assets/js//jquery.min.js"></script>
        <script src="<?php echo URL::base(); ?>assets/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    <script>
    var addProduct = function(){
        $.post('<?php echo URL::base(); ?>admin/sales/addform', {}, function(data) {
            $('#addform').append(data);
        });
    }
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css" >
    <title>Resume</title>
</head>
<body>
      <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
        <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class="col-md-4 col-lg-4">
        <?php if(Request::is('/')): ?>
        <?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <?php if(Request::is('/')): ?>
             <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        </div>
        
    </div> 
</div>
<footer class="footer-bg"><p>Copyright © 2019 Ajay</p></footer>
    <script src="js/app.js"></script>
</body>
</html>
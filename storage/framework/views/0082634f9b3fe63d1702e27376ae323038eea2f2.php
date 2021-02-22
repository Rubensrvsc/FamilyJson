<html>
<head>
<title>Teste turim</title>
</head>
<body>
<div>
    <a href="#">Gravar</a>
    <a href="#">Ler</a>
</div>
<form method="POST" action="<?php echo e(route('add_father')); ?>">
<?php echo csrf_field(); ?>
    <label for="exampleInputEmail1">Nome do Pai</label>
    <input type="text" id="" name="name_father" required>
</form>

<?php $__currentLoopData = $father; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
<h1><?php echo e($f->name_father); ?></h1>
<form action="<?php echo e(route('add_child',$f)); ?>" method="post">
 <?php echo csrf_field(); ?>
<input type="text" name="name_child" />
<input type="submit">
</form>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH /home/rubens/Downloads/FamilyJson/resources/views/index.blade.php ENDPATH**/ ?>
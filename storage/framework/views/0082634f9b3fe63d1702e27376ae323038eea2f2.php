<html>
<head>
<title>Teste turim</title>
</head>
<body>
<div>
    <a href="#">Gravar</a>
    <a href="<?php echo e(route('read')); ?>">Ler</a>
</div>
<form method="POST" action="<?php echo e(route('add_father')); ?>">
<?php echo csrf_field(); ?>
    <label for="exampleInputEmail1">Nome do Pai</label>
    <input type="text" id="" name="name_father" required>
    <input type="submit">
</form>

<?php $__currentLoopData = $father; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
<h1><?php echo e($f->name_father); ?></h1>
<form action="<?php echo e(route('add_child',$f)); ?>" method="post">
 <?php echo csrf_field(); ?>
 <label for="exampleInputEmail1">Adicionar filho</label>
<input type="text" name="name_child" />
<input type="submit">
</form>

<?php $__currentLoopData = $son; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($s->father_id == $f->id): ?>
<h3><?php echo e($s->name_son); ?></h3>
<form  action="<?php echo e(route('deleteSon',$s->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
        <input type="submit" value="delete " >
    </form>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<textarea>
<?php echo e($table ?? ''); ?>

</textarea>
</body>
</html><?php /**PATH /home/rubens/Downloads/FamilyJson/resources/views/index.blade.php ENDPATH**/ ?>
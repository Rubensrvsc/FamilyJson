<html>
<head>
<title>Teste turim</title>
<link rel="stylesheet" type="text/css" href="../sass/app.scss">
</head>
<body>
<style>
    .flex{
    display: flex;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: 0 auto;
}

.flex > div{
    flex: 1 1;
    margin: 10px;
}

</style>

<div>
    <a href="#">Gravar</a>
    <a href="<?php echo e(route('read')); ?>">Ler</a>
</div>
<section class="flex">
<div>
<form method="POST" action="<?php echo e(route('add_father')); ?>">
<?php echo csrf_field(); ?>
    <label for="exampleInputEmail1">Nome do Pai</label>
    <input type="text" id="" name="name_father" required>
    <input type="submit">
</form>

<?php $__currentLoopData = $father; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h1><?php echo e($f->name_father); ?></h1>
<form  action="<?php echo e(route('deleteFather',$f->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
        <input type="submit" value="Deletar Pai " >
    </form>
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
        <input type="submit" value="Deletar Filho " >
    </form>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="textarea">
<textarea>
<?php echo e($table ?? ''); ?>

</textarea>
</div>
</section>
</body>
</html><?php /**PATH /home/rubens/Downloads/FamilyJson/resources/views/index.blade.php ENDPATH**/ ?>
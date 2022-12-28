<?php $__env->startSection('content'); ?>
<div class="form_box">
<ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<form action="<?php echo e(route('pass')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h1>Вход</h1>
    <label>Имя</label><br>
    <input type="text" name="name"><br>
    <label>Пароль</label><br>
    <input type="password" name="password"><br><br>
    <button type="submit" class="btn_create">Войти</button>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/login.blade.php ENDPATH**/ ?>
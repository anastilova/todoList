<?php $__env->startSection('content'); ?>
<div class="form_box">
<?php if(count($errors)>0): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
        <form action="<?php echo e(route('create')); ?>" method="POST">
            <h1>Регистрация</h1>
            <?php echo csrf_field(); ?>
            <label type=>Имя</label>
            <input type="text" name="name"><br>
            <label>Пароль</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" class="btn_create">Создать пользоватея</button>
        </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/register.blade.php ENDPATH**/ ?>
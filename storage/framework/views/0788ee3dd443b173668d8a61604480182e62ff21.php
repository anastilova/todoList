<?php $__env->startSection('content'); ?>
    <div class="form_box">
    <?php if(count($errors)>0): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
<form action="<?php echo e(route('task-store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h1>Создание задачи</h1>
    <label>Название задачи</label><br>
    <input type="text" name="title"><br><br>
    <button type="submit" class="btn_create">Создать задачу</button>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/tasks/create.blade.php ENDPATH**/ ?>
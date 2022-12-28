<?php $__env->startSection('content'); ?>
<div class="form_box">
<?php if(count($errors)>0): ?>

    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <form action="<?php echo e(route('task-update', $task->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h1>Редактировать задачу</h1>
        <label for="">Название задачи</label><br>
        <input type="text" name="title" value="<?php echo e($task->title); ?>"><br><br>
        <button type="submit" class="btn_create">Обновить задачу</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/tasks/update.blade.php ENDPATH**/ ?>
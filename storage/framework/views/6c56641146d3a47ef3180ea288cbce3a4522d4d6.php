<?php $__env->startSection('content'); ?>
    <h1>Добро пожаловать в админ панель</h1>
    <div class=task_box>
        <div>
        <a href=" <?php echo e(route('task-create')); ?>" class="btn_create">Создать задачу</a>
    </div><br>
    <div>
        <a href="/">Вернуться на главную</a>
    </div>

        <?php if($tasks): ?>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <div class="item-id"># <?php echo e($task->id); ?></div>
                    <div class="item-title"><?php echo e($task->title); ?></div>
                    <div class="user_ctrl">
                        <div>
                            <a href="<?php echo e(route('task-edit', $task->id)); ?>" class="edit_btn"><i class="fa-regular fa-pen-to-square"></i></a>
                        </div>
                        <div>
                            <form action="<?php echo e(route('task-destroy', $task->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="del_btn"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
     <div class="container">
        <div class="menu">
            <?php if(!Auth::check()): ?>
            <div class="menu_item" class="btn_create"><a href="<?php echo e(route('login')); ?>">Вход</a></div>
            <div class="menu_item"><a href="<?php echo e(route('register')); ?>">Регистрация</a></div>
            <?php else: ?>
            <div class="menu_item"><a href="<?php echo e(route('logout')); ?>" class="btn_create">Выход</a></div>
            <div class="menu_item"><a href="/dashboard" class="btn_create">В админ панель</a></div>

            <?php endif; ?>
        </div>
        <div class="task_box">
            <?php if($tasks): ?>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="user_icon">
                            <i class="fa-regular fa-user"></i> <?php echo e($task->user->name); ?>

                        </div>
                        <div class="user_task">
                            <?php echo e($task->title); ?>

                        </div>
                        <?php if(Auth::check() && Auth()->user()->id == $task->user->id): ?>
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
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div>
                    Грустно, когда пусто :(
                </div>
            <?php endif; ?>
        </div>
     </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/welcome.blade.php ENDPATH**/ ?>
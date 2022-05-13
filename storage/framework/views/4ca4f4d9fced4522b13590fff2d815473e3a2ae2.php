

<?php $__env->startSection('title', 'List of Tasks'); ?>

<?php $__env->startSection('main'); ?>
	<div class="task-list">
    <h2><?php echo e($task->title); ?></h2>
  <p><?php echo e($task->description); ?></p>
  <p><?php echo e($task->created_at->translatedFormat('\le\ d F Y à H\hi')); ?></p>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\flori\assessment-laravel-install\laravel-test-version\resources\views/task.blade.php ENDPATH**/ ?>
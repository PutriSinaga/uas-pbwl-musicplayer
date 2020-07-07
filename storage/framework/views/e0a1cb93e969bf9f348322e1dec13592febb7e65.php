<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: paleturquoise">
                <div class="card-header" style="color: royalblue">Homepage</div>

                <div class="card-body">
           <marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"> 
           <h1 style=" color: royalblue">WELCOME TO MY BLOG! </h1>                      
              </marquee>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas final\resources\views/home.blade.php ENDPATH**/ ?>
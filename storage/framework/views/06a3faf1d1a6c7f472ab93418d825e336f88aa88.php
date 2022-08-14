

<?php $__env->startSection('title'); ?>login
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" action="<?php echo e(route('login-page')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <h4>Yemekhane Yönetim Sistemi</h4>
                        <div class="form-group">
                            <label>Eposta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control" type="email" name="userEmail"required=""  name="userEmail" placeholder="Test@gmail.com" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Şifre</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control" type="password" name="userPass" required="" placeholder="*********" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Giriş Yap</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

	
    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/authentication/login.blade.php ENDPATH**/ ?>
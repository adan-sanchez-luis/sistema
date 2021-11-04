
<?php $__env->startSection('titulo', 'login'); ?>
<?php $__env->startSection('contenido'); ?>
    <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="bg-color">
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-login my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block login-img"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
                                        </div>
                                        <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                            <?php echo csrf_field(); ?>
         
                                            <div class="form-group">
                                                <label class="text-dark1 h6"><?php echo e(__('Usuario*')); ?></label>
                                                <input id="username" type="text"
                                                    class="form-control form-control-user <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="username" value="<?php echo e(old('username')); ?>" autocomplete="username"
                                                    autofocus placeholder="Ingrese nombre de usuario o correo electrónico">

                                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <label class="text-dark1 h6"><?php echo e(__('Contraseña*')); ?></label>
                                            <div class="form-group row" id="show_hide_password">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input id="password" type="password"
                                                    class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="password"  autocomplete="current-password"
                                                    placeholder="Contraseña">
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                               
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input class="custom-control-input" type="checkbox" name="pass"
                                                    id="mostrar_contrasena">
                                                    <label class="custom-control-label text-dark" for="mostrar_contrasena">
                                                        <?php echo e(__('Mostrar contraseña')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input class="custom-control-input" type="checkbox" name="remember"
                                                        id="customCheck" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <label class="custom-control-label text-dark" for="customCheck">
                                                        <?php echo e(__('Recuérdame')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                <?php echo e(__('Ingresar')); ?>

                                            </button>
                                            
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <?php if(Route::has('password.request')): ?>
                                                <a class="small" href="<?php echo e(route('password.request')); ?>">¿Has
                                                    olvidado tu contraseña?</a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo e(route('register')); ?>">¡Crea una cuenta!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <br><br><br><br>
    </div>
     <!-- Footer -->
     <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- End of Footer -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema-ventas-neumaticos\resources\views/auth/login.blade.php ENDPATH**/ ?>
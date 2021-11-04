<?php $__env->startSection('titulo', 'Mi perfil'); ?>
<?php $__env->startSection('contenido'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid rounded color">
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title">Promociones<i class="fas fa-percentage mx-3"></i></h1>
                    <p class="mb-4 text-dark"></p>

                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold "> Enviar promociones</h6>
                        </div>

                      
                        

                        <div class="container">
                            <div class="row">
                               
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-6 col-lg-10 col-md-8">
                                                <div class="card o-hidden border-login my-5">
                                                    <div class="card-body p-0">
                                                        <div class="container px-5 my-5">
                                                            <div class="row">
                                                                <div class="right-content">
                                                                    <div class="container">
                                                                        <form id="contact" action="<?php echo e(route('promocion.send')); ?>"  method="post" enctype="multipart/form-data">
                                                                            <?php echo e(csrf_field()); ?>

                                                                            <?php echo csrf_field(); ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12" style="text-align: center">
                                                                                    <label class="text-black h4">Promocion</label>
                                                                                    <br><br>
                                                                                </div>
                                                                                <div class="col-md-12 mt-4">
                                                                                    <div class="text-center">
                                                                                        <label class="text-black h4">Imagen</label>
                                                                                        <input type="file" accept="image/*" name="image"
                                                                                        placeholder="Inserte una imagen" class="form-control text-upper">

                                                                                    </div>
                                                                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <div class="message-error">*<?php echo e($message); ?></div>
                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            
                                                                                </div>
                                                                               
                                                                            <div class="col-md-12 mt-4">
                                                                                    <div class="form-group">
                                                                                        <label class="text-black h4">Mensaje</label>
                                                                                        <textarea class="form-control" 
                                                                                        value="<?php echo e(old('message')); ?>"    name="message"></textarea>
                                                                                    </div>
                                                                                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <div class="message-error">*<?php echo e($message); ?></div>
                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                                
                                                                                </div>
                                            
                                                                                
                                                                                
                                                                                <div class="col-md-6" style="text-align: right">
                                                                                    <div><label class="text-black h4">Valor de descuento:</label></div>                                        
                                                                                </div>
                                                                                <?php ($porcentaje = ['10', '15', '20', '25', '30','35', '40', '45', '50']); ?>
                                                                                <div class="col-md-6" style="text-align:right">
                                                                                    <select name="descuento" value="<?php echo e(old('descuento')); ?>">
                                                                                        <?php $__currentLoopData = $porcentaje; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option selected><?php echo e($p); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6" style="text-align: right">
                                                                                    <div><label class="text-black h4">Rin:</label></div>                                        
                                                                                </div>
                                                                                <?php ($rines = ['13', '14', '15', '16', '17','18', '19', '20'
                                                                                ,"22"]); ?>
                                                                                <div class="col-md-6" style="text-align:right">
                                                                                    <select name="rin" value="<?php echo e(old('rin')); ?>">
                                                                                        <?php $__currentLoopData = $rines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option selected><?php echo e($rins); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                               
                                                                           <br><br>
                                                                                <div class="text-black h4" style="text-align: center;">
                                                                                <button class="btn btn-primary btn-user btn-block" type="submit">Enviar promocion <i class="fas fa-paper-plane"></i> </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div> 
                            </div>

                        <br><br>

                        </div>
                    </div>
                    <br>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sistema/resources/views/promociones/index.blade.php ENDPATH**/ ?>
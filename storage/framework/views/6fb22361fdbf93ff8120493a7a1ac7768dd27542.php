
<?php $__env->startSection('titulo', 'Editar Permisos'); ?>
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
                    <h1 class="h3 mb-2 bold-title"> EDITAR PERMISO <i class="fas fa-user-edit mx-3"></i> </h1>
                    <p class="mb-4 text-dark">Verifique los datos de sus usuarios aquí.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">ID PERMISO: <?php echo e($permission->id); ?></h6>
                        </div>

                        

                        <div class="container">
                            <form method="POST" action="<?php echo e(route('permission.update', [$permission])); ?>">
                                <?php echo method_field("PUT"); ?>
                                <?php echo csrf_field(); ?>

                                <div class="row">

                               
                                <div class="col-md-12 mt-auto ">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del producto</label>
                                            <input type="text" name="name"
                                                value="<?php echo e(old('name', $permission->nombre)); ?>"
                                                placeholder="Introduce el nombre del permiso"
                                                class="form-control text-upper">
                                            
                                            <?php $__errorArgs = ['name'];
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
                                    </div>


                                   

                                        </div>

                                        
                                        <div class="row justify-content-center mt-4">
                                            <div class="col-auto">
                                                <button title="guardar permiso" type="submit" class="btn btn-primary btn-ms">
                                                    Guardar <i class="fas fa-save"></i></button>
                                            </div>
                                            <div class="col-auto">
                                                <a title="cancelar permiso" href=<?php echo e(route('permission.index')); ?> class="btn btn-danger btn-ms">cancelar
                                                    <i class="fas fa-strikethrough"></i></a>
                                            </div>
                                        </div>
                                        <br>
                                    </form>

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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema-ventas-neumaticos\resources\views/permissions/edit.blade.php ENDPATH**/ ?>
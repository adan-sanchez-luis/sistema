
<?php $__env->startSection('titulo', 'Asignar Rol'); ?>
<?php $__env->startSection('contenido'); ?>


    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.edit')): ?>
                <!-- Begin Page Content -->
                <div class="container-fluid rounded color">
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title"> ASIGNAR ROL <i class="fas fa-user-edit mx-3"></i> </h1>
                    <p class="mb-4 text-dark">Verifique los datos de los roles aquí.</p>

                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">ID USUARIO: <?php echo e($user->id); ?></h6>
                        </div>

                        

                        <div class="container">
                      

                                <div class="row">

                               
                                <div class="col-md-4 mt-auto ">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del usuario:</label>
                                            <input type="text" name="name"
                                                value="<?php echo e(old('name', $user->name)); ?>"
                                                placeholder="Introduce el nombre del rol"
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
                               
                               
                              
                               <?php echo Form::model($user, ['route'=>['user.update',$user],
                                'method'=>'PUT' ]); ?>

                                 <div class="col-md-4 mt-2">
                                    <h2 class=" text-black"> Listado de roles: </h2>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <div class="">
                                        <label class="text-black2 h6">
                                            <?php echo Form::checkbox(
                                                'roles[]',
                                                   $role->id, null,
                                                   ['class'=>'mr-1']); ?> 
                                                   <?php echo e($role->name); ?>

                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <?php echo Form::submit("Asignar Rol", ["title"=>"asignar rol","class"=>'btn btn-outline-primary mt-2']); ?>

                                    </div>
                                   
                               </div>
                            
                                 <?php echo Form::close(); ?>

                                


                                <br><br><br>
                              
                                   

                                </div>




                            </div>
                            <br>



                        </div>
                        <?php endif; ?>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>
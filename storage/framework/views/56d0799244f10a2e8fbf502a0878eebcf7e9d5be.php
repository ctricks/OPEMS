

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Designation Form</h4>
    <div>
        <a href="<?php echo e(route('organization.designationList')); ?>" class="btn btn-success p-2 text-lg rounded-pill"><i
                class="fa-regular fa-eye me-1"></i>Designation List</a>
    </div>
</div>
<div class="container my-5 py-5">

    <!--Section: Form Design Block-->


    
    <div class="text-left w-50 mx-auto">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="text-uppercase">New Designation</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('organization.designation.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label mt-2" for="form11Example1">Designation ID</label>
                                <input type="text" class="form-control" name="designation_id" id="" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class=" col">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label mt-2" for="form11Example1">Designation Name</label>
                                    <input type="text" class="form-control" name="designation_name" id="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label mt-2" for="form11Example1">Deparment Name</label>
                                <select type="text" class="form-control" name="department_id">
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class=" col">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label mt-2" for="form11Example1">Salary Class</label>
                                    <select required class="form-control" name="salary_structure_id">
                                        <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($salary->id); ?>"><?php echo e($salary->salary_class); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-25 mx-auto">
                        <button type="submit" class="btn btn-info p-2 rounded">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Organization/Designation/designation.blade.php ENDPATH**/ ?>
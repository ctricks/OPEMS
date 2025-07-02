

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Edit Department List</h4>
</div>
<div class="container my-5 py-5">

    <!--Section: Form Design Block-->
    <section>
        <div class="d-flex gap-5 justify-content-center align-content-center ">

            
            <div class="text-left w-50 ">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="text-uppercase">Update Department</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('Organization.update', $department->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label mt-2" for="form11Example1">Department ID</label>
                                        <input value="<?php echo e($department->department_id); ?>" placeholder="Enter ID"
                                            class="form-control" name="department_id" id="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class=" col">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label mt-2" for="form11Example1">Department Name</label>
                                            <input value="<?php echo e($department->department_name); ?>" placeholder="Enter Name"
                                                class="form-control" name="department_name" id="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-25 mx-auto">
                                <button type="submit" class="btn btn-info p-2 rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Organization/Department/editDepartment.blade.php ENDPATH**/ ?>
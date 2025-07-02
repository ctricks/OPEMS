

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Designation List</h4>
    <div>
        <a href="<?php echo e(route('organization.designation')); ?>" class="btn btn-success p-2 text-lg rounded-pill"><i
                class="fa-solid fa-plus me-1"></i>Create
            Designation</a>
    </div>
</div>
<div class="container my-5 py-5">

    <div class="d-flex justify-content-end">
        <div class="input-group rounded w-25 mb-5">
            <form action="<?php echo e(route('searchDesignation')); ?>" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button type="submit" class="input-group-text border-0 bg-transparent" id="search-addon"
                        style="display: inline;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div>
        <table class="table align-middle mb-4 text-center bg-white">
            <thead class="bg-light">
                <tr>
                    <th>SL NO</th>
                    <th>Designation ID</th>
                    <th>Designation Name</th>
                    <th>Department Name</th>
                    <th>Salary Class</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($item->designation_id); ?></td>
                    <td><?php echo e($item->designation_name); ?></td>
                    <td><?php echo e(optional($item->department)->department_name); ?></td>
                    
                    <td><?php echo e(optional($item->salary)->salary_class); ?></td>
                    <td>
                        <a class="btn btn-success rounded-pill fw-bold text-white"
                            href="<?php echo e(route('designation.edit', $item->id)); ?>">Edit</a>
                        <a class="btn btn-danger rounded-pill fw-bold text-white"
                            href="<?php echo e(route('designation.delete', $item->id)); ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Organization/Designation/designationList.blade.php ENDPATH**/ ?>
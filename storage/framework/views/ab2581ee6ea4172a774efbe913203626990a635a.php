

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center">
    <h4 class="text-uppercase">Provident Fund List</h4>
    <div>
        <form method="GET" action="<?php echo e(route('providentList')); ?>">
            <div class="input-group">
                <input type="number" name="pf_percentage" class="form-control" placeholder="Provident Fund %"
                    value="<?php echo e($pfPercentage); ?>" min="0" max="100">
                <button type="submit" class="btn btn-success">Apply</button>
            </div>
        </form>
    </div>
</div>
<div class="container my-5 py-5">
    <table class="table align-middle mb-4 text-center bg-white">
        <thead class="bg-light">
            <tr>
                <th>SL NO</th>
                <th>Employee Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Total Salary</th>
                <th>Total Provident Fund</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($employee->employee_name); ?></td>
                <td><?php echo e($employee->designation_name); ?></td>
                <td><?php echo e($employee->department_name); ?></td>
                <td><?php echo e(number_format($employee->total_salary, 2)); ?> BDT</td>
                <td><?php echo e(number_format($employee->total_provident_fund, 2)); ?> BDT</td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="w-25 mx-auto">
        <?php echo e($employees->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/provident/list.blade.php ENDPATH**/ ?>
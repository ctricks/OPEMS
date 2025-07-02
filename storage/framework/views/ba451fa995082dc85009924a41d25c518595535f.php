

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center">
    <h4 class="text-uppercase">View Salary List</h4>
    <div>
        <a href="<?php echo e(route('salary.create.form')); ?>" class="btn btn-success p-2 text-lg rounded-pill"><i
                class="fa-solid fa-plus  me-1"></i>Create New
            Salary</a>
    </div>
</div>
<div class="container my-5 py-5">
    <table class="table align-middle mb-4 text-center bg-white">
        <thead class="bg-light">
            <tr>
                <th>SL NO</th>
                <th>Salary Class</th>
                <th>Basic Salary</th>
                <th>Medical Expenses</th>
                <th>Mobile Allowance</th>
                <th>House Rent Allowance</th> <!-- Added new header for House Rent Allowance -->
                <th>Total Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            // Include house rent allowance in total salary calculation
            $totalSalary = $salary->basic_salary + $salary->medical_expenses +
            $salary->mobile_allowance + $salary->houseRent_allowance;
            $salary->total_salary = $totalSalary;
            $salary->save();
            ?>
            <tr>
                <td>
                    <div>
                        <p class="fw-bold mb-1"><?php echo e($key + 1); ?></p>
                    </div>
                </td>
                <td><?php echo e($salary->salary_class); ?></td>
                <td><?php echo e($salary->basic_salary); ?> BDT</td>
                <td><?php echo e($salary->medical_expenses); ?> BDT</td>
                <td><?php echo e($salary->mobile_allowance); ?> BDT</td>
                <td><?php echo e($salary->houseRent_allowance); ?> BDT</td>
                <!-- Displaying House Rent Allowance -->
                <td><?php echo e($totalSalary); ?> BDT</td>
                <td>
                    <a class="btn btn-success rounded-pill" href="<?php echo e(route('salaryEdit', $salary->id)); ?>"><i
                            class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-danger rounded-pill" href="<?php echo e(route('salaryDelete', $salary->id)); ?>"><i
                            class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="w-25 mx-auto">
        <?php echo e($salaries->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Salary/viewSalary.blade.php ENDPATH**/ ?>
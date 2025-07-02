

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Payroll List</h4>
    <div>
        <a href="<?php echo e(route('payroll.create')); ?>" class="btn btn-success p-2 text-lg rounded-pill">Create New Payroll</a>
    </div>
</div>
<div class="  my-5 py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div class="input-group rounded w-50">
            <form action="<?php echo e(route('searchAllPayroll')); ?>" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button type="submit" class="input-group-text border-0 bg-transparent" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <a href="<?php echo e(route('allPayrollList')); ?>" class="btn btn-danger text-capitalize border-0"
            data-mdb-ripple-color="dark">Report</a>
    </div>

    <div class="table-responsive">

        <table class="table align-middle text-center w-100   table-hover bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Dept</th>
                    <th>desig</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Salary Type</th>
                    <th>Salary</th>
                    <th>Deduction</th>
                    <th>Reason</th>
                    <th>Net Pay</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($payroll->employee->name); ?></td>
                    <td><?php echo e($payroll->date); ?></td>
                    <td><?php echo e(optional($payroll->employee->department)->department_name); ?></td>
                    <td><?php echo e(optional($payroll->employee->designation)->designation_name); ?></td>
                    <td><?php echo e($payroll->month); ?></td>
                    <td><?php echo e($payroll->year); ?></td>
                    <td><?php echo e(optional($payroll->salaryStructure)->salary_class); ?></td>
                    <td><?php echo e(optional($payroll->salaryStructure)->total_salary); ?></td>
                    <td><?php echo e($payroll->deduction); ?></td>
                    <td><?php echo e($payroll->reason); ?></td>
                    <td><?php echo e($payroll->total_payable); ?></td>
                    <td>
                        <a class="btn btn-success rounded-pill"
                            href="<?php echo e(route('singlePayroll', ['employee_id' => $payroll->employee_id, 'month' => $payroll->month])); ?>">
                            Payslip
                        </a>


                        <a class="btn btn-warning rounded-pill" href="<?php echo e(route('payrollEdit', $payroll->id)); ?>"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger rounded-pill" href="<?php echo e(route('payrollDelete', $payroll->id)); ?>"><i
                                class="fa-solid fa-trash"></i></a>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="w-25 mx-auto">
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Payroll/payrollList.blade.php ENDPATH**/ ?>
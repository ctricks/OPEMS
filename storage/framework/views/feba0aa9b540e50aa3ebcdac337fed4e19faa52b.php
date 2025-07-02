
<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Create Payroll</h4>
    <div>
        <a href="<?php echo e(route('payroll.view')); ?>" class="btn btn-success p-2 text-lg rounded-pill"><i
                class="fa-sharp fa-regular fa-eye me-1"></i>View Payroll List</a>
    </div>
</div>
<div class="container my-5 py-5">
    <!--Section: Form Design Block-->
    <section>
        <div>
            <div class="w-75 mx-auto">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-font text-uppercase">Payroll Form</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('payroll.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="employee">Select Employee</label>
                                        <select name="employee_id" class="form-control" id="employeeSelect">
                                            <option value="">Select an Employee</option>
                                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($employee->id); ?>"
                                                data-duration="<?php echo e(round($employee->totalDurationHours, 2)); ?>"
                                                data-overtime="<?php echo e(round($employee->totalOvertimeHours, 2)); ?>">
                                                <?php echo e($employee->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="salary_structure">Select Salary
                                            Structure:</label>
                                        <select name="salary_structure_id" class="form-control"
                                            id="salaryStructureSelect">
                                            <?php $__currentLoopData = $salaryStructures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $structure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($structure->id); ?>"
                                                data-total-salary="<?php echo e($structure->total_salary); ?>">
                                                <?php echo e($structure->salary_class); ?> - <?php echo e($structure->total_salary); ?>BDT
                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="income_tax">Select Year</label>
                                        <select name="year" class="form-control">
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="income_tax">Select Month</label>
                                        <select name="month" class="form-control">
                                            <?php
                                            $previousMonth = now()->subMonth()->format('F');
                                            ?>
                                            <?php $__currentLoopData = ['January', 'February', 'March', 'April', 'May', 'June', 'July',
                                            'August', 'September', 'October', 'November', 'December']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($month); ?>" <?php echo e($previousMonth==$month ? 'selected'
                                                : 'disabled'); ?>>
                                                <?php echo e($month); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="salary_structure_id">Total
                                            Salary</label>
                                        <div class="form-outline">
                                            
                                            <input type="number" id="total_salary" name="total_salary"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="income_tax">Deduction</label>
                                        <input name="deduction" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="income_tax">Reason of
                                            Deduction</label>
                                        <input name="reason" type="text" class="form-control">
                                    </div>
                                </div>

                                <!-- Add these fields in your form -->
                                


                            </div>
                            <div class="mt-3 w-25 mx-auto text-center">
                                <button type="submit"
                                    class="btn btn-success p-2 text-lg rounded-pill col-md-10">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
            const salaryStructureSelect = document.querySelector('#salaryStructureSelect');

            salaryStructureSelect.addEventListener('change', function () {
                const selectedOption = this.options[this.selectedIndex];
                const totalSalary = selectedOption.getAttribute('data-total-salary') || '0';
                document.querySelector('#total_salary').value = totalSalary;
            });

            // Trigger change event on page load to set initial value
            salaryStructureSelect.dispatchEvent(new Event('change'));
        });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Payroll/createPayroll.blade.php ENDPATH**/ ?>
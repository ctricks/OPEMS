

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">View Employee Details</h4>
    <div>
        <a href="<?php echo e(route('manageEmployee.addEmployee')); ?>" class="btn btn-success p-2 text-lg rounded-pill"><i
                class="fa-solid fa-plus me-1"></i>Add New
            Employee</a>
    </div>
</div>
<div class="my-5 py-3">
    <div class="d-flex justify-content-end">
        <div class="input-group rounded w-25 mb-5">
            <form action="<?php echo e(route('employee.search')); ?>" method="get">
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

    <table class="table align-middle text-center bg-white">
        <thead class="bg-light">
            <tr>
                <th>SL NO</th>
                <th>Employee Name</th>
                <th>Image</th>
                <th>Employee ID</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Salary Grade</th>
                <th>Mode of Join</th>
                
                
                
                
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <div>
                        <p class="fw-bold mb-1"><?php echo e($key + 1); ?></p>
                    </div>
                </td>
                <td><?php echo e($employee->name); ?></td>
                <td><img class="avatar p-1" src="<?php echo e(url('/uploads//' . $employee->employee_image)); ?>" alt="">
                </td>
                <td><?php echo e($employee->employee_id); ?></td>
                <td><?php echo e(optional($employee->department)->department_name); ?></td>
                <td><?php echo e(optional($employee->designation)->designation_name); ?></td>
                <td><?php echo e(optional($employee->salaryStructure)->salary_class); ?></td>
                <td><?php echo e($employee->joining_mode); ?></td>
                
                
                
                
                
                <td>
                    <a class="btn btn-warning rounded-pill fw-bold text-white"
                        href="<?php echo e(route('Employee.profile', $employee->id)); ?>"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success rounded-pill fw-bold text-white"
                        href="<?php echo e(route('Employee.edit', $employee->id)); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-danger rounded-pill fw-bold text-white" href="#" data-bs-toggle="modal"
                        data-bs-target="#deleteEmployeeModal"
                        onclick="prepareDeleteForm('<?php echo e(route('Employee.delete', $employee->id)); ?>')"><i
                            class="fa-solid fa-trash"></i></a>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="w-25 mx-auto mt-4">
        <?php echo e($employees->links()); ?>

    </div>
</div>

<div class="modal" id="deleteEmployeeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this employee?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="get">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function prepareDeleteForm(deleteUrl) {
        document.getElementById('deleteForm').setAttribute('action', deleteUrl);
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/manageEmployee/viewEmployee.blade.php ENDPATH**/ ?>
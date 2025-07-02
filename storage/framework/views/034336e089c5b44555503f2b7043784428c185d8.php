

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Department List</h4>
</div>
<div class="container my-5 py-5">

    <!--Section: Form Design Block-->
    <section>

        <div class="d-flex justify-content-end">
            <div class="input-group rounded w-25 mb-5">
                <form action="<?php echo e(route('searchDepartment')); ?>" method="get">
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
        <div class="d-flex gap-5 justify-content-center align-content-center ">

            
            <div class="text-left w-25 ">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="text-uppercase">New Department</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('organization.department.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label mt-2" for="form11Example1">Department ID</label>
                                        <input placeholder="Enter ID" class="form-control" name="department_id" id=""
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class=" col">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label mt-2" for="form11Example1">Department Name</label>
                                            <input placeholder="Enter Name" class="form-control" name="department_name"
                                                id="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-25 mx-auto">
                                <button type="submit" class="btn btn-success p-2 px-3 rounded-pill">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
            <div class="w-75 card">
                <div>
                    <table class="table align-middle mb-4 text-center bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>SL NO</th>
                                <th>Deparment ID</th>
                                <th>Department Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo e($item->department_id); ?></td>
                                <td><?php echo e($item->department_name); ?></td>
                                <td>
                                    <a class="btn btn-success rounded-pill fw-bold text-white"
                                        href="<?php echo e(route('Organization.edit', $item->id)); ?>">Edit</a>
                                    <a class="btn btn-danger rounded-pill fw-bold text-white"
                                        href="<?php echo e(route('Organization.delete', $item->id)); ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/Organization/Department/department.blade.php ENDPATH**/ ?>
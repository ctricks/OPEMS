

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">View Attendance List</h4>
</div>
<div class="my-5 py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div class="input-group rounded w-50">
            <form action="<?php echo e(route('searchAttendanceReport')); ?>" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button type="submit" class="input-group-text border-0 bg-transparent" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <a href="<?php echo e(route('attendanceReport')); ?>" class="btn btn-danger text-capitalize border-0"
            data-mdb-ripple-color="dark">Report</a>
    </div>

    <table class="table align-middle mb-4 text-center  bg-white">
        <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Employee Name</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Duration</th>
                <th>Date</th>
                <th>month</th>
                <th>Check In</th>
                <th>Late</th>
                <th>Check Out</th>
                <th>Overtime</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <div>
                        <p class="fw-bold mb-1"><?php echo e($key + 1); ?></p>
                    </div>
                </td>
                <td><?php echo e($attendance->name); ?></td>
                <td><?php echo e($attendance->department_name); ?></td>
                <td><?php echo e($attendance->designation_name); ?></td>
                <td>
                    <?php echo e(sprintf('%02d:%02d:%02d', $attendance->duration_minutes / 60, $attendance->duration_minutes % 60,
                    0)); ?>

                </td>
                <td><?php echo e($attendance->select_date); ?></td>
                <td><?php echo e($attendance->month); ?></td>
                <td><?php echo e($attendance->check_in); ?></td>
                <td><?php echo e($attendance->late); ?></td>
                <td><?php echo e($attendance->check_out); ?></td>
                <td><?php echo e($attendance->overtime); ?></td>
                <td>
                    <a class="btn btn-danger rounded-pill " href="<?php echo e(route('attendanceDelete', $attendance->id)); ?>"><i
                            class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="w-25 mx-auto">
        <?php echo e($attendances->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/attendance/viewAttendance.blade.php ENDPATH**/ ?>
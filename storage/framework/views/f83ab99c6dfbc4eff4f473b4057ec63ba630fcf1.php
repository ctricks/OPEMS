

<?php $__env->startSection('content'); ?>
<div class="page-header" style="margin-left: 15px">
    <span id="dayOfWeek" class="page-heading" style="font-size: 30px"></span><br>
    <span id='ct7' class="page-heading" style="font-size: 25px"></span>
    <p class="fw-medium fs-5 animated-text"> <span>Hello,</span>
        <span class="fw-bold "><?php echo e(auth()->user()->name); ?></span>
        <span>Welcome</span>
        <span>to</span>
        <span>HR</span>
        <span>Platform👋</span>
        <hr>
    </p>
</div>
<section class="mb-3 mb-lg-5" style="margin: 10px">
    <div class="row mb-3">
        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
        

        <!-- Widget Type 1 -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3><?php echo e($employees); ?></h3>
                        <p>Total Employee</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/teamwork.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('manageEmployee.ViewEmployee')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Widget Type 2 -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3><?php echo e($totalTasks); ?></h3>
                        <p>Assigned Task</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/task.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('taskList')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Widget Type 3 -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3><?php echo e($departments); ?></h3>
                        <p>Department</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/department.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('organization.department')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Widget Type 4 -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3><?php echo e($pendingLeaves); ?></h3>
                        <p>Leave Request</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/leave.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('leave.leaveStatus')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Widget Type 5 -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3><?php echo e($users); ?></h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/users.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('users.list')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3></h3>
                        <p>Payrolls History</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/money.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('payroll.view')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
        

        <!-- My Profile Widget -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3></h3>
                        <p>My Profile</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/profile.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('profile')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- My Payroll Widget -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3></h3>
                        <p>My Payroll</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/exchange.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('myPayroll')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- My Leave Widget -->
        <div class="col-lg-4 col-6">
            <div class="small-box card h-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="inner">
                        <h3><?php echo e($pendingLeaves); ?></h3>
                        <p>My Leave</p>
                    </div>
                    <div class="icon">
                        <img class="img-fluid custom-small-img" src="<?php echo e(asset('assests/image/logout.png')); ?>" alt=""
                            style="max-width: 80px;">
                    </div>
                </div>
                <a href="<?php echo e(route('leave.myLeave')); ?>" class="small-box-footer text-dark">
                    View Details <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <?php endif; ?>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/dashboard.blade.php ENDPATH**/ ?>
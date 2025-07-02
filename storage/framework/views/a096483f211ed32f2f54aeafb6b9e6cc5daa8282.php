<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=" " class="brand-link">
        <img src=" " class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">EMPLOYEE MANAGEMENT</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Profile (Employee only) -->
                <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('profile')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <?php endif; ?>

                <!-- Organization (Admin only) -->
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-target="#organizationDropdown" role="button"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Organization</p>
                    </a>
                    <ul class="nav nav-treeview collapse" id="organizationDropdown">
                        <li class="nav-item">
                            <a href="<?php echo e(route('organization.department')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('organization.designationList')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Designation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>

                <!-- PayGrade (Admin only) -->
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('salary.create.form')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>PayGrade</p>
                    </a>
                </li>
                <?php endif; ?>

                <!-- Employees (Admin only) -->
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-target="#employeesDropdown" role="button"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="nav-icon fas fa-user-group"></i>
                        <p>Employees</p>
                    </a>
                    <ul class="nav nav-treeview collapse" id="employeesDropdown">
                        <li class="nav-item">
                            <a href="<?php echo e(route('manageEmployee.addEmployee')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('manageEmployee.ViewEmployee')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Employee</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>

                <!-- Provident Fund (Admin and Employee) -->
                <li class="nav-item">
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="<?php echo e(route('providentList')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Provident Fund</p>
                    </a>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
                    <a href="<?php echo e(route('employeeProvident')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Provident Fund</p>
                    </a>
                    <?php endif; ?>
                </li>

                <!-- Attendance -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-target="#attendanceDropdown" role="button"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>Attendance</p>
                    </a>
                    <ul class="nav nav-treeview collapse" id="attendanceDropdown">
                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('attendance.viewAttendance')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendance Record</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('attendance.giveAttendance')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Give Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('attendance.myAttendance')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Attendance</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <!-- Leave -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-target="#leaveDropdown" role="button" data-bs-toggle="collapse"
                        aria-expanded="false">
                        <i class="nav-icon fas fa-person-walking-arrow-right"></i>
                        <p>Leave</p>
                    </a>
                    <ul class="nav nav-treeview collapse" id="leaveDropdown">
                        <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('leave.leaveForm')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Apply Leave</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('leave.myLeave')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Leave</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('leave.myLeaveBalance')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Leave Balance</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('leave.leaveStatus')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Leave Request</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('leave.leaveType')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Leave Type</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <!-- Task Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-target="#taskDropdown" role="button" data-bs-toggle="collapse"
                        aria-expanded="false">
                        <i class="nav-icon fas fa-list-check"></i>
                        <p>Task</p>
                    </a>
                    <ul class="nav nav-treeview collapse" id="taskDropdown">
                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('createTask')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign Task</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('taskList')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Task List</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('myTask')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Task</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <!-- Payroll -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-target="#payrollDropdown" role="button"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Payroll</p>
                    </a>
                    <ul class="nav nav-treeview collapse" id="payrollDropdown">
                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('payroll.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Payroll</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('payroll.view')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payroll List</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('employee')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('myPayroll')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Payroll</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="<?php echo e(route('users.list')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Users</p>
                    </a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/Admin/partials/sidebar.blade.php ENDPATH**/ ?>
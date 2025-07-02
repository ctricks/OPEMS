

<?php $__env->startSection('content'); ?>
<div class="shadow p-4 d-flex justify-content-between align-items-center ">
    <h4 class="text-uppercase">Add Employee</h4>
    <div>
        <a href="<?php echo e(route('manageEmployee.ViewEmployee')); ?>" class="btn btn-success px-3 p-2 text-lg rounded-pill"><i
                class="fa-sharp fa-regular fa-eye me-1"></i>Employee
            List</a>
    </div>
</div>
<div class="container my-5 py-5">

    <!--Section: Form Design Block-->
    <section>

        <div>
            <div class="w-75 mx-auto">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-font text-uppercase">Submit Employee Details</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('manageEmployee.addEmployee.store')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-4">
                                <div class=" col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="form11Example1">Employee
                                            Name</label>
                                        <input required placeholder="Enter Name" type="text" id="form11Example1"
                                            name="name" class="form-control" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="form11Example1">Employee ID</label>
                                        <input required placeholder="Enter ID" type="text" id="form11Example1"
                                            name="employee_id" class="form-control" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['employee_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2" for="form11Example1">Deparment Name</label>
                                        <select type="text" class="form-control" name="department_id">
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['department_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class=" col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2 fw-bold" for="form11Example3">Date of
                                            Birth</label>
                                        <input required type="date" id="form11Example3" name="date_of_birth"
                                            class="form-control" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2" for="form11Example1">Designation</label>
                                        <select required class="form-control" name="designation_id">
                                            <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($designation->id); ?>"><?php echo e($designation->designation_name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['designation_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2 fw-bold" for="form11Example4">Hire Date</label>
                                        <input required placeholder="Enter date here" type="date" id="form11Example4"
                                            name="hire_date" class="form-control" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['hire_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class=" col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2 fw-bold" for="form11Example5">Email</label>
                                        <input required placeholder="Enter Email" type="email" id="form11Example5"
                                            name="email" class="form-control"
                                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                            title="Enter a valid email address" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2 fw-bold" for="form11Example6">Phone</label>
                                        <input required placeholder="Phone Number" type="text" id="form11Example6"
                                            name="phone" class="form-control" pattern="^(?:\+?88|01)?\d{11}$"
                                            title="Enter a valid Bangladeshi phone number with optional +88 or 01 preceding 11 digits" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class=" col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2 fw-bold" for="form11Example6">Image</label>
                                        <input type="file" id="form11Example6" name="employee_image"
                                            class="form-control" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['employee_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class=" col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2" for="form11Example1">Salary Grade</label>
                                        <select required class="form-control" name="salary_structure_id">
                                            <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($salary->id); ?>"><?php echo e($salary->salary_class); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['salary_structure_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label mt-2 fw-bold" for="form11Example7">Location</label>
                                        <input required placeholder="Enter Location" type="text" id="form11Example6"
                                            name="location" class="form-control" pattern="[A-Za-z0-9\s]+"
                                            title="Enter a valid location (letters, numbers, and spaces only)" />
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-outline">
                                        <label class="form-label mt-2 fw-bold" for="joinMode">Mode of Joining</label>
                                        <select required id="joinMode" name="joining_mode" class="form-select">
                                            <option value="interview">Interview</option>
                                            <option value="referral">Referral</option>
                                            <option value="walk-in">Walk-in</option>
                                        </select>
                                    </div>
                                    <div class="mt-2">
                                        <?php $__errorArgs = ['joining_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-25 mx-auto">
                                <button type="submit"
                                    class="btn btn-success p-2 text-lg rounded-pill col-md-10">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/admin/pages/manageEmployee/addEmployee.blade.php ENDPATH**/ ?>
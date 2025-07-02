
<?php $__env->startSection('content'); ?>
<div class="space-medium bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>HR Consultation Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- service-block -->
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="service-block">
                    <div class="service-img"><a href="#"><img src="<?php echo e(url('/uploads//' . $item->service_image)); ?>"
                                alt="" class="h-[127px]"></a>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title"><a href="#" class="title"><?php echo e($item->service_name); ?></a>
                        </h3>
                        <p><?php echo e($item->description); ?></p>
                        <a href="<?php echo e(route('services.details',$item->id)); ?>">More Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /.service-block -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PAYROLL\Payroll\EMS\resources\views/Frontend/pages/serviceSection/serviceCard.blade.php ENDPATH**/ ?>
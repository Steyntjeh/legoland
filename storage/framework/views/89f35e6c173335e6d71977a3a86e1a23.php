<?php $__env->startSection('content'); ?>
<main>
    <section>
        <h1>Attracties</h1>
        <div class="bannerComingSoon">
            <h1 class="h1ComingSoon">Coming Soon...</h1>
        </div>
        <div class="cardSection">
        <!-- Alle attractie cards -->
        <?php $__currentLoopData = $attracties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attractie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="cards">
            <img src="<?php echo e($attractie['image']); ?>" alt="">
            <h2><?php echo e($attractie['naamAttractie']); ?></h2>
            <p><?php echo e($attractie['informatie']); ?></p>
            <p>Minimale lengte: <?php echo e($attractie['minimaleLengte']); ?> meter</p>
            <button>Learn more ></button>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </section>    
</main>    
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/steynruesink/Documents/School/leerjaar 2/Laravel/LegolandDoetinchem/resources/views/attracties.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<main>
    <section>
        <h1>Attracties</h1>
        <div class="bannerComingSoon">
            <h1 class="h1ComingSoon">Coming Soon...</h1>
        </div>
        <?php $__currentLoopData = $attracties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attractie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="cards">
            <img src="" alt="">
            <h2><?php echo e($attractie['naamAttractie']); ?></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem consequuntur, optio dolores suscipit sapiente rerum. Fugiat, ratione sint suscipit inventore, deserunt illo amet pariatur laboriosam dignissimos minima eos et ipsam labore laborum! Reprehenderit eos earum iure, quam explicabo ut exercitationem dicta? Et blanditiis labore modi ipsum non, eligendi expedita! Odit.</p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>    
</main>    
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/steynruesink/Documents/School/leerjaar 2/Laravel/LegolandDoetinchem/resources/views/Attracties.blade.php ENDPATH**/ ?>
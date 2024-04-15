<?php $__env->startSection('content'); ?>
<main>
    <h1>Contact</h1>

    <form action="/contact/insert" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="voornaam">Naam*</label>
            <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="Voornaam...">
            <input type="text" name="achternaam" id="achternaam" class="form-control" placeholder="Achternaam...">
        </div> 
        <div class="form-group email" >
            <label for="Email">Email*</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefoonNummer">TelefoonNummer*</label>
            <input type="tel" name="telefoonNummer" id="telefoonnummer" class="form-control">
        </div>
        <div class="form-group">
            <label for="orderNummer">Ordernummer*</label>
            <input type="text" name="orderNummer" id="orderNummer" class="form-control">
        </div>
        <div class="form-group">
            <label for="bericht">Bericht*</label>
            <textarea name="bericht" id="bericht" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Verzenden</button>
    </form>

    <?php if($errors -> any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>  
    <?php endif; ?>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/steynruesink/Documents/School/leerjaar 2/Laravel/LegolandDoetinchem/resources/views/Contact.blade.php ENDPATH**/ ?>
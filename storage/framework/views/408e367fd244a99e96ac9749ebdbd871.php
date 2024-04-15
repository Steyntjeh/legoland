
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legoland Doetinchem</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <header>
       <a href="/"><img src="../Bestanden/LEGOLAND_PARKS_LOGO.svg" alt="Legoland logo"></a>

        <ul>
            <li><a href="aboutUs">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="attracties">Attracties</a></li>
            <li><a href="openingstijden">Openingstijden</a></li>
            <li><a href="tickets">Tickets</a></li>
        </ul>
    </header>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('sidebar'); ?>
    </div>
    <footer>
        <p>© Legoland Doetinchem B.V., alle rechten voorbehouden</p>
    </footer>
</body>
</html>

<?php /**PATH /Users/steynruesink/Documents/School/leerjaar 2/Laravel/LegolandDoetinchem/resources/views/layout.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Electro-Didou</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset("assets/favicon.ico")); ?>"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo e(asset("css/styles.css")); ?>" rel="stylesheet"/>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js','resources/sass/app.scss']); ?>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route("welcome")); ?>">Elecro-Didou</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route("welcome")); ?>">Market</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->

<!-- Services-->

<!-- About-->


<!-- Contact-->
<section class="page-section" id="contact">
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Commander</h2>

        </div>
        <div class="col-lg-4 col-sm-6 mb-4 row align-items-stretch">
            <!-- Portfolio item 1-->
            <div class="portfolio-item">
                <a class="portfolio-link" data-bs-toggle="modal" href="#<?php echo e($product->id); ?>">

                    <img class="img-fluid" src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="..."/>
                </a>

                <div class="form-group mt-2 ">
                    <!-- Name input-->
                    <input class="form-control" disabled="disabled" id="name" type="text" value="<?php echo e($product->name); ?>"/>

                </div>
                <div class="form-group mt-2 ">
                    <!-- Name input-->
                    <input class="form-control" disabled="disabled" id="name" type="text"
                           value="<?php echo e($product->price); ?> dh "/>
                    <div class="invalid-feedback">A name is required.</div>
                </div>
            </div>

        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" method="POST" action="<?php echo e(route("commands.store")); ?>">
            <?php echo csrf_field(); ?>
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="product_id" name="product_id" type="hidden" value="<?php echo e($product->id); ?>"
                               data-sb-validations="required"/>

                        <input class="form-control" id="name" type="text" value="<?php echo e(old("name")); ?>" placeholder="Your Name *"
                               data-sb-validations="required" name="name" />
                        <div class="invalid-feedback">A name is required.</div>
                    </div>

                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" value="<?php echo e(old("phone")); ?>" type="tel" placeholder="Your Phone *"
                               data-sb-validations="required" name="phone" required/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control"  id="message" name="address" placeholder="Your Address *"
                                  data-sb-validations="required" required><?php echo e(old("address")); ?></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="">
        <button class="btn btn-success  m-lg-4 btn-xl text-uppercase " id="submitButton" type="submit">Market</button>
    </div>

</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo e(asset("js/scripts.js")); ?>"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

</body>
</html>
<?php /**PATH C:\Users\DELL\PhpstormProjects\untitled11\Eco-didous\resources\views/command.blade.php ENDPATH**/ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>
<body>
    <div class="wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.svg" alt="">
                </li>
                <li class="breadcrumb-item active"  aria-current="page">
                    <span>Contact</span>
                </li>
                <li class="breadcrumb-item">
                    <span>Quantity</span>
                </li>
                <li class="breadcrumb-item">
                    <span>Price</span>
                </li>
                <li class="breadcrumb-item">
                    <span>Done</span>
                </li>
            </ol>
        </nav>
        <section>
                <div class="carousel slide" id="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <form action="#" method="post" class="form" id="form">
                                <h1>
                                    Contact Info
                                </h1>
                                <div class="row mb-3">
                                    <div class="col-2 text-end">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="name" name="name" class="form-control" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2  text-end">
                                        <label for="email">Email <sup>required</sup></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2  text-end">
                                        <label for="phone">Phone</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="tel" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="carousel-item">
                            <h1>
                                Quantity
                            </h1>
                            <form action="#" method="post" class="form" id="quantityForm">
                                <div class="row mb-3">
                                    <div class="col-2  text-end">
                                        <label for="email">Quantity <sup>required</sup></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" id="number" name="number" min="1" max="1000" class="form-control" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="carousel-item">
                            <h1>
                                Price
                            </h1>
    
                            <h1 id="prices"> 10$ </h1>
                            <input type="hidden" id="pricesHidden">
    
                        </div>
                        <div class="carousel-item">
                            <h1>
                                Done
                            </h1>
    
                            <p>
                                ⚠️ We cannot send you email right now. Use alternative way to contact us 
                            </p>
    
                        </div>
                    </div>
                    
                </div>
                
                
            </form>
        </section>
    </div>
    <div class="buttons d-flex justify-content-left mt-4">
        <button form="quantityForm" type="submit" class="btn btn-primary " data-bs-target="#carousel" data-bs-slide="next" id="nextCarousel">Continue</button>
        <button type="submit" class="btn btn-secondary next " data-bs-target="#carousel" data-bs-slide="prev" id="prevCarousel">Prev</button>
    </div>
    
    


    

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./assets/customeCarusel.js"></script> -->
    <?php wp_footer() ?>
</body>
</html>
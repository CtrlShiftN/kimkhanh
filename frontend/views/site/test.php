<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Kim Khánh Group';
?>
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/index.css">
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/testi.css">
<script src="<?= $cdnUrl ?>/js/masonry.pkgd.min.js"></script>
<script src="<?= $cdnUrl ?>/js/jquery.flexslider-min.js"></script>
<script src="<?= $cdnUrl ?>/js/main.js"></script>
<script src="<?= $cdnUrl ?>/js/modernizr.js"></script>
<div class="cd-testimonials-wrapper cd-container">
    <div class="slider cd-testimonials">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials">
            <label class="item" for="t-1">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-2">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-3">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-4">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-5">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
        </div>
        <div class="dots">
            <label for="t-1"></label>
            <label for="t-2"></label>
            <label for="t-3"></label>
            <label for="t-4"></label>
            <label for="t-5"></label>
        </div>
    </div>

    <a href="#0" class="cd-see-all">See all</a>
</div> <!-- cd-testimonials-wrapper -->

<div class="cd-testimonials-all">
    <div class="cd-testimonials-all-wrapper">
        <ul>
            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>

                <div class="cd-author">
                    <img src="img/avatar-1.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>

                <div class="cd-author">
                    <img src="img/avatar-2.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>

                <div class="cd-author">
                    <img src="img/avatar-3.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>

                <div class="cd-author">
                    <img src="img/avatar-4.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>

                <div class="cd-author">
                    <img src="img/avatar-5.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>

                <div class="cd-author">
                    <img src="img/avatar-6.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>

                <div class="cd-author">
                    <img src="img/avatar-1.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>

                <div class="cd-author">
                    <img src="img/avatar-2.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>

                <div class="cd-author">
                    <img src="img/avatar-3.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>

                <div class="cd-author">
                    <img src="img/avatar-4.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>

                <div class="cd-author">
                    <img src="img/avatar-5.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>

            <li class="cd-testimonials-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>

                <div class="cd-author">
                    <img src="img/avatar-6.jpg" alt="Author image">
                    <ul class="cd-author-info">
                        <li>MyName</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div> <!-- cd-author -->
            </li>
        </ul>
    </div>	<!-- cd-testimonials-all-wrapper -->

    <a href="#0" class="close-btn">Close</a>
</div> <!-- cd-testimonials-all -->
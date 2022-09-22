<?php require_once '../resources/characterResource.php'; ?>

<?php $page = "contact"; ?>
<?php $title = "Contact"; ?>

<?php require_once './layout/meta.php'?>

    <div class="container__main">

    <?php require_once './layout/nav.php'; ?>


        <header class="header__contacts">
            <div class="contacts__container">
                <p class="title__main"><img src="../img/Genshin_Impact_logo.svg" alt="Genshin_Impact_logo"></p>
                <h2>Le Fan Site de Genshin Impact</h2>
            </div>
        </header>
        
        <section class="contact">
            <div class="contact__container">
                <aside class="contact__aside">
                    <div class="aside__image">
                        <img src="" alt="">
                    </div>
                    <h2>Contactez nous</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, repellat perspiciatis esse maiores, reprehenderit mollitia facilis ea consequatur vero, blanditiis neque? Accusantium iure praesentium distinctio quisquam incidunt. Et, voluptatem quo.</p>
                    <ul class="contact__details">
                        <li>
                            <img src="https://img.icons8.com/ios-glyphs/30/000000/number-pad.png"/>
                            <h5>+25554545454</h5>
                        </li>
                        <li>
                            <img src="https://img.icons8.com/material-rounded/24/000000/open-envelope-stamp.png"/>
                            <h5>suppor@egattor.com</h5>
                        </li>
                        <li>
                            <img src="https://img.icons8.com/material-rounded/24/000000/open-envelope-stamp.png"/>
                            <h5>Accra, Ghana</h5>
                        </li>
                    </ul>
                    <ul class="contact__socials">
                        <li><a href="https://fr-fr.facebook.com/Genshinimpact.fr/" target="_blank"><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-new.png"/></a></li>
                        <li><a href="https://discord.com/invite/genshinimpact" target="_blank"><img src="https://img.icons8.com/ios/30/000000/discord-logo--v1.png"/></a></li>
                        <li><a href="https://twitter.com/GenshinImpact?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png"/></a></li>
                    </ul>
                </aside>

                <form action="" class="contact__form">
                    <div class="form__name">
                        <input type="text" name="First Name" placeholder="First Name" required>
                        <input type="text" name="Last Name" placeholder="Last Name" required>
                    </div>
                    <input type="email" name="Email Address" placeholder="Your Email Address" required>
                    <textarea name="Massage" rows="7" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </section>

        <?php require_once './layout/footer.php' ?>

    </div>

    <script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
            pagination: {
            el: ".swiper-pagination",
        },
        });
    </script>

</body>

</html>
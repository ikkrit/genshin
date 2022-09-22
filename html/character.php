<?php require_once '../resources/characterResource.php'; ?>

<?php $page = "character"; ?>
<?php $title = "Personnages de genshin impact"; ?>

<?php require_once './layout/meta.php'?>


    <div class="container__main">


    <?php require_once './layout/nav.php'?>


        <!--=====================================================================================================-->


        <header class="header__chara">
            <div class="chara__container">
                <p class="title__main"><img src="../img/Genshin_Impact_logo.svg" alt=""></p>
                <h2>Le Fan Site de Genshin Impact</h2>
            </div>
        </header>


        <!--=====================================================================================================-->


        <section class="chara__description">
            <h2 class="main_title_master">Personnages</h2>
            <div class="description__container">

                <?php foreach($character_icon as $char_icon) : ?>      
                    <div class="description__box" id="<?=$char_icon['name'];?>">
                        <div class="description__img">
                            <img src="<?=$char_icon['back'];?>" alt="<?=$char_icon['name'];?>">
                        </div>
                        <div class="description__text">
                            <h2><?=$char_icon['name'];?></h2>
                            <div class="description__text-chara">

                                <div class="description__text-element">
                                    <p>Element : <?=$char_icon['element'];?></p>
                                    <img src="<?=element_icon($char_icon['element'])?>" alt="<?=$char_icon['element'];?>">
                                </div>
                                <div class="description__text-weapon">
                                    <p>Arme : <?=$char_icon['weapon'];?></p>
                                    <img src="<?=weapon_icon($char_icon['weapon'])?>" alt="<?=$char_icon['weapon'];?>">
                                </div>
                                <div class="description__text-region">
                                    <p>Region : <?=$char_icon['city'];?></p>
                                    <img src="<?=region_icon($char_icon['city'])?>" alt="<?=$char_icon['city'];?>">
                                </div>

                            </div>
                    
                            <div class="description__build">
                                <img src="../img/character_build/<?=$char_icon['name'];?>.jpg" alt="">
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </section>
        
        <!--=====================================================================================================-->

        <?php require_once './layout/footer.php' ?>

        <!--=====================================================================================================-->


    </div>


    <!--=====================================================================================================-->


    <script src="/js/index.js"></script>
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
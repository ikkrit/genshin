<?php require_once '../resources/characterResource.php'; ?>

<?php $page = "main"; ?>
<?php $title = "Le Fan Site de Genshin Impact"; ?>

<?php require_once './layout/meta.php'?>

    <div class="container__main">

    <?php require_once './layout/nav.php'; ?>

        <header class="header">
            <div class="header__container">
                <p class="title__main"><img src="../img/Genshin_Impact_logo.svg" alt=""></p>
                <h1>Le Fan Site de Genshin Impact</h1>
                <div class="header__icon">
                    <img src="../img/icon/google.png" alt="google icon">
                    <img src="../img/icon/apple.png" alt="apple icon">
                    <img src="../img/icon/windows.png" alt="windows icon">
                    <img src="../img/icon/playstation.png" alt="playstation icon">
                </div>
            </div>
        </header>

        <!--=====================================================================================-->
    
        <section class="categories">
            <h2 class="main_title_master">Genshin Impact</h2>
            <div class="categories__container">
                
                <div class="categories__present">
                    <div class="categories__present-box">
                        <div class="categories__present-left">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ASR41LdpTKw?controls=0&amp;start=8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="categories__present-right">
                            <div class="present__right_1 right__box">
                                <a href="https://genshin.hoyoverse.com/fr/news" target="_blank"><h3>Nouveautés</h3></a>
                            </div>
                            <div class="present__right_2 right__box">
                                <a href="https://www.jeuxvideo.com/news/1622214/genshin-impact-les-bannieres-de-la-version-3-0-sont-elles-rentables-dendro-edition.htm" target="_blank"><h3>Bannières</h3></a>
                            </div>
                            <div class="present__right_3 right__box">
                                <a href="https://www.genshin-impact.fr/guides-events/" target="_blank"><h3>Evénement</h3></a>
                            </div>
                            <div class="present__right_4 right__box">
                                <a href="https://genshin.hoyoverse.com/fr/download" target="_blank"><h3>Télécharger</h3></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category__container">

                    <div class="category__card">
                        <img src="../img/cards/card_1.png" alt="">
                        <div class="category__intro">
                            <div class="category__intro-title">
                                <img src="../img/icon/genshin_black.png" alt="">
                                <h2>Le Jeux</h2>
                            </div>
                            <p>Genshin Impact est un jeu vidéo de type action-RPG développé par miHoYo2, sorti en 2020 sur PlayStation 4, Windows, Android et iOS puis en 2021 sur PlayStation 5. </p>
                            <a class="btn" href="https://genshin.hoyoverse.com/fr/download?utm_source=fab" target="_blank">En voir plus</a>
                        </div>
                    </div>

                    <div class="category__card">
                        <img src="../img/cards/card_2.png" alt="">
                        <div class="category__intro">
                            <div class="category__intro-title">
                                <img src="../img/icon/story.png" alt="">
                                <h2>Histoire</h2>
                            </div>
                            <p>Dans un monde fantastique nommé Teyvat, une sœur et un frère se retrouvent séparés par une déesse inconnue. Le joueur commence son aventure en tant que Voyageur.</p>
                            <a class="btn" href="https://genshin.hoyoverse.com/fr/" target="_blank">En voir plus</a>
                        </div>
                    </div>

                    <div class="category__card">
                        <img src="../img/cards/card_3.png" alt="">
                        <div class="category__intro">
                            <div class="category__intro-title">
                                <img src="../img/icon/weapon.png" alt="">
                                <h2>Les armes</h2>
                            </div>
                            <p>Il existe 5 types d'armes différents dans Genshin Impact et chaque personnage ne peut en manier qu'un seul.  </p>
                            <a class="btn" href="https://genshin-impact.fandom.com/fr/wiki/Armes" target="_blank">En voir plus</a>
                        </div>
                    </div>

                    <div class="category__card">
                        <img src="../img/cards/card_4.png" alt="">
                        <div class="category__intro">
                            <div class="category__intro-title">
                                <img src="../img/icon/artefact.png" alt="">
                                <h2>Artéfacts</h2>
                            </div>
                            <p>Les artéfacts peuvent augmenter les statistiques d’un personnage et lui conférer certains effets.</p>
                            <a class="btn" href="https://genshin-impact.fandom.com/fr/wiki/Art%C3%A9facts" target="_blank">En voir plus</a>
                        </div>
                    </div>

                    <div class="category__card">
                        <img src="../img/cards/card_5.jpg" alt="">
                        <div class="category__intro">
                            <div class="category__intro-title">
                                <img src="../img/icon/discorde.png" alt="">
                                <h2>Discord</h2>
                            </div>
                            <p>Genshin Impact dispose d'une grosse communauté de joueurs et afin de vous rassembler et trouver des guides, nous avons créé un Discord communautaire.</p>
                            <a class="btn" href="https://www.breakflip.com/fr/genshin-impact/guide/discord-genshin-impact-fr-comment-rejoindre-une-communaute-en-france-30817" target="_blank">En voir plus</a>
                        </div>
                    </div>

                    <div class="category__card">
                        <img src="../img/cards/card_6.png" alt="">
                        <div class="category__intro">
                            <div class="category__intro-title">
                                <img src="../img/icon/myhoyo.png" alt="">
                                <h2>MiHoYo</h2>
                            </div>
                            <p>miHoYo Co., Ltd. est un studio de développement de jeux vidéo et d'animation basé à Shanghai. Fondé en 2012 par trois étudiants de l'université Jiao-tong de Shanghai.</p>
                            <a class="btn" href="https://fr.wikipedia.org/wiki/MiHoYo" target="_blank">En voir plus</a>
                        </div>
                    </div>

                </div>
                
            </div>
        </section>


        <!--=====================================================================================================-->


        <section class="worlds" id="worlds">
        <h2 class="main_title_master">Le Monde</h2>
        <div class="world__container">

            <article class="world">
                <div class="world__box world__back-1">
                    <div class="world__box-text">
                        <img src="../img/icon/Mondstadt_icon.webp" alt="Mondstadt icon">
                        <h4>Mondstadt</h4>
                        <p>
                            « Une cité libre qui est située dans le nord-est du continent de Teyvat.
                            La brise de la liberté portant l'odeur des pissenlits se lève depuis les montagnes et traverse les vastes plaines, en passant au-dessus du Lac de Cidre pour apporter la bénédiction de Barbatos, l'Archon Anémo, à Mondstadt qui se trouve en son cœur. »
                        </p>
                        <div class="world__img"><img src="../img/world/mondstat.jpg" alt="Mondstadt"></div>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                    <div class="world__box-logo">
                        <img src="../img/icon/Anemoculus.webp" alt="Anemo icon">
                    </div>
                </div>
                <div class="world__icon"><img src="../img/icon/plus.png"/></div>
            </article>

            <article class="world">
                <div class="world__box world__back-2">
                    <div class="world__box-text">
                        <img src="../img/icon/Liyue_icon.webp" alt="Liyue icon">
                        <h4>Liyue</h4>
                        <p>
                            « Une riche cité portuaire situé à l'est de Teyvat.
                            Liyue possède une topographie variée, constituée de montagnes, de forêts de pierres, de vastes plaines et de plages qui demeurent toutes aussi belles au fil des saisons. Combien de trésors anciens gracieusement cachés par l'Archon Géo attendent-ils d'être découverts dans ce magnifique paysage ? »
                        </p>
                        <div class="world__img"><img src="../img/world/liyue.jpg" alt="Liyue"></div>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                    <div class="world__box-logo">
                        <img src="../img/icon/Geoculus.webp" alt="Geoculus icon">
                    </div>
                </div>
                <div class="world__icon"><img src="../img/icon/plus.png"/></div>
            </article>

            <article class="world">
                <div class="world__box world__back-3">
                    <div class="world__box-text">
                        <img src="../img/icon/Inazuma_icon.webp" alt="Inazuma icon">
                        <h4>Inazuma</h4>
                        <p>
                            « Un archipel situé aux confins orientaux de Teyvat, ceint par les mers et vivant en ostracisme.
                            Traversez la tempête sans fin, foulez le sol des îles couvertes d'érables et de cerisiers, parcourez des forêts et franchissez des précipices pour être témoin de la quête « d'éternité » de la toute-puissante Narukami Ogosho. »
                        </p>
                        <div class="world__img"><img src="../img/world/unazuma.jpg" alt="Inazuma"></div>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                    <div class="world__box-logo">
                        <img src="../img/icon/Electroculus.webp" alt="Electro icon">
                    </div>
                </div>
                <div class="world__icon"><img src="../img/icon/plus.png"/></div>
            </article>

            <article class="world">
                <div class="world__box world__back-4">
                    <div class="world__box-text">
                        <img src="../img/icon/Sumeru_icon.webp" alt="Sumeru icon">
                        <h4>Sumeru</h4>
                        <p>
                            « La nation des érudits située au centre-ouest de Teyvat.
                            Une nation où l'on trouve une forêt tropicale luxuriante et un désert aride. De nombreux fruits de la sagesse s'y épanouissent et y périssent. Que les voyageurs s'enfoncent la forêt pour se rendre à la cité académique ou qu'ils traversent le désert pour y découvrir des vestiges historiques, ils pourront tous en tirer de précieuses connaissances. »
                        </p>
                        <div class="world__img"><img src="./img/world/sumeru.jpg" alt="Sumeru"></div>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                    <div class="world__box-logo">
                        <img src="../img/icon/Dendroculus.webp" alt="Dendro icon">
                    </div>
                </div>
                <div class="world__icon"><img src="../img/icon/plus.png"/></div>
            </article>

        </div>
    </section>


    <!--=====================================================================================================-->


    <section class="characters" id="characters">
        <h2 class="main_title_master">Informations sur les personnages</h2>
        <div class="characters__container">
            <div class="characters__scroll">
                <table class="character__tableau">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th></th>
                            <th>Oeil divin</th>
                            <th>Arme</th>
                            <th>Région</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($character_icon as $char_icon) : ?>                
                    <tbody>
                        <tr>
                            <td><p><?=$char_icon['name'];?></p></td>
                            <td>
                                <div class="character__img">
                                    <img src="<?=$char_icon['image'];?>" alt="<?=$char_icon['name'];?>">
                                </div>
                            </td>
                            <td>
                                <div class="character__element">
                                    <img src="<?=element_icon($char_icon['element'])?>" alt="<?=$char_icon['element'];?>">
                                </div>
                            </td>
                            <td><?=$char_icon['weapon'];?></td>
                            <td><?=$char_icon['city'];?></td>
                            <td><a href="/html/character.php?#<?=$char_icon['name'];?>"><img src="../img/icon/plus.png" alt="icon plus"></a></td>
                        </tr>
                    </tbody>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </section>


    <!--=====================================================================================================-->


    <section class="hoyoverses" id="hoyoverses">
        <h2 class="main_title_master">Hoyoverse</h2>
        <div class="hoyoverse__container">

            <article class="hoyoverse">
                <div class="hoyoverse__icon"><img src="../img/icon/plus.png"/></div>
                <div class="hoyo__box hoyoverse__back-1">
                    <div class="hoyo__box-text">
                        <h4>Honkai Impact 3rd</h4>
                        <p>
                            Système de commande de l'Hypérion prêt. Traitement de la demande de connexion... Vérifiée.
                            Attention, à toutes les unités ! Mécanisme de sécurité déverrouillé ! Transfert de fortes concentrations d'énergie dans le moteur de téléchargement. Compte à rebours de la connexion : 10, 9, 8...
                        </p>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                </div>
            </article>

            <article class="hoyoverse">
                <div class="hoyoverse__icon"><img src="../img/icon/plus.png"/></div>
                <div class="hoyo__box hoyoverse__back-2">
                    <div class="hoyo__box-text">
                        <h4>Honkai : Star Rail</h4>
                        <p>
                            Le "Star Rail" mentionné dans le titre du jeu fait référence à un train interstellaire présent dans le jeu, tandis que Honkai est la principale force antagoniste de la série Honkai, qui cherche à détruire les civilisations à mesure qu'elles avancent technologiquement.
                        </p>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                </div>
            </article>

            <article class="hoyoverse">
                <div class="hoyoverse__icon"><img src="../img/icon/plus.png"/></div>
                <div class="hoyo__box hoyoverse__back-3">
                    <div class="hoyo__box-text">
                        <h4>Tears of Themis</h4>
                        <p>
                            L'histoire de Tears of Themis se déroule en 2030, dans un décor de science-fiction de la ville fictive de Stellis. Le joueur joue le rôle d'une avocate de la défense anonyme de 24 ans au bureau juridique de Themis.
                        </p>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                </div>
            </article>

            <article class="hoyoverse">
                <div class="hoyoverse__icon"><img src="../img/icon/plus.png"/></div>
                <div class="hoyo__box hoyoverse__back-4">
                    <div class="hoyo__box-text">
                        <h4>Zenless Zone Zero</h4>
                        <p>
                            Le jeu se déroule dans une métropole post-apocalyptique futuriste connue sous le nom de New Eridu. Des entités connues sous le nom d'Ethereal ont voyagé dans le monde humain à partir de portails appelés Hollows.
                        </p>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                </div>
            </article>

            <article class="hoyoverse">
                <div class="hoyoverse__icon"><img src="../img/icon/plus.png"/></div>
                <div class="hoyo__box hoyoverse__back-5">
                    <div class="hoyo__box-text">
                        <h4>Genshin Impact</h4>
                        <img src="./img/hoyoverse/" alt="">
                        <p>
                            Dans un monde fantastique nommé Teyvat, une sœur et un frère se retrouvent séparés par une déesse inconnue. Le joueur commence son aventure en tant que Voyageur ou Voyageuse dont l'origine est inconnue, à la recherche de l'autre.
                        </p>
                        <a href="#" class="btn">Site officiel</a>
                    </div>
                </div>
            </article>

        </div>
    </section>


    <!--=====================================================================================================-->


    <section class="game">
        <h2 class="main_title_master">Captures du jeux</h2>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="game__img">
                        <img src="../img/screen/screenshot_1.jpg" alt="">
                        <h2>Le jeu propose une carte du monde ouverte avec divers terrains, que le joueur peut explorer en marchant, en escaladant, en nageant et en planant. De nombreux objets et lieux importants sont répartis sur toute la carte</h2>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="game__img">
                        <img src="../img/screen/screenshot_2.jpg" alt="">
                        <h2>Le jeu propose une carte du monde ouverte avec divers terrains, que le joueur peut explorer en marchant, en escaladant, en nageant et en planant. De nombreux objets et lieux importants sont répartis sur toute la carte</h2>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="game__img">
                        <img src="../img/screen/screenshot_3.jpg" alt="">
                        <h2>Le jeu propose une carte du monde ouverte avec divers terrains, que le joueur peut explorer en marchant, en escaladant, en nageant et en planant. De nombreux objets et lieux importants sont répartis sur toute la carte</h2>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="game__img">
                        <img src="../img/screen/screenshot_4.jpg" alt="">
                        <h2>Le jeu propose une carte du monde ouverte avec divers terrains, que le joueur peut explorer en marchant, en escaladant, en nageant et en planant. De nombreux objets et lieux importants sont répartis sur toute la carte</h2>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="game__img">
                        <img src="../img/screen/screenshot_5.jpg" alt="">
                        <h2>Le jeu propose une carte du monde ouverte avec divers terrains, que le joueur peut explorer en marchant, en escaladant, en nageant et en planant. De nombreux objets et lieux importants sont répartis sur toute la carte</h2>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="game__img">
                        <img src="../img/screen/screenshot_6.jpg" alt="">
                        <h2>Le jeu propose une carte du monde ouverte avec divers terrains, que le joueur peut explorer en marchant, en escaladant, en nageant et en planant. De nombreux objets et lieux importants sont répartis sur toute la carte</h2>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>


    <!--=====================================================================================================-->


    <?php require_once './layout/footer.php'; ?>


    <!--=====================================================================================================-->

    </div>

</body>
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

</html>
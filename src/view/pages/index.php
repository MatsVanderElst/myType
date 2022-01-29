<section class="content">
    <div class="landingPage__container">
        <h1 class="landingPage__title" >
            <img class="landingPage__title-image" alt="title image" src="assets/img/titleImageMobile.png">
        </h1>
        <img class="landingPage__slantedLogo" alt="slanted logo" src="#">
        <img class="landingPage__R" src="assets/img/rImage.png" alt="capital R">
        <nav class="navigation__container">
            <a href="#"></a><p class="navigation__history">History</p></a>
            <a href="#"></a><p class="navigation__characteristics">characteristics</p></a>
            <a href="#"></a><p class="navigation__clarendonQuest">Clarendon Quest</p></a>
        </nav>
        <img class="landingPage__arrow" src="#" alt="arrow">
    </div>
    <div class="characteristics__container">
        <h2 class="characteristics__title">Characteristics</h2>
        <p class="characteristics__paragraph">The Clarendon was mainly used for body text during the 19th century because of its legibility and style. The font is characterised by its  low contrast and it’s strong bracketed serifs. Some lower-case letters like the “a”,“c” and “y” end in ball terminals. It has a tall x-height that give the font a sturdy look in combination with it’s short ascenders and descenders</p>
        <img class="characteristics__gif" src="assets/img/AaBb.gif" ></img> <!-- https://stackoverflow.com/questions/35733029/cross-browser-animated-gif-on-hover-reverse-when-mouse-leaves -->
    </div>
    <div class="history__container"> <!-- ===> svg lettes achtergrond aanpassen aan schermgrote -->
    <p class="history__paragraphOne">During the course of the 19th century the context in which type was used started changing. Due to the industrial revolution letters no longer only appeared in books. People took jobs in the city and type became the a main form of communication. Instead letters where also found on product packaging, billboards, posters, … </p>
    <p class="history__paragraphTwo">In light of this new context type designers wanted to develop bigger and bolder typefaces but in traditional metal type the letters could only get so big before the became too heavy to work with.</p>
    <p class="history__paragraphThree">In 1823 Darius Wels Developed the wood type Wich allowed font foundries to design much bigger, bolder and complexer typefaces. Over the course of the 19th century designers and foundries competed to develop increasingly foreign and exotic typefaces: fat faces, sans-serif, 3d/textured type,… One style that has remained popular is the Egyptian style type also known as Slab-serif fonts</p>
    <p class="history__paragraphFour">Originally designed by Robert Besley in the 1845, the Clarendon was and still is one of the most popular fonts to date. It is a thick-faced, condensed, slab serif font with heavy bracketed serifs. Made for Thorowgood & Co., better known als Fann Street foundry It was the first font to ever be patended  But this didn’t stop numerous foundries from copying the font.</p>
    <p class="history__paragraphFive">Besley’s design was intended to act as a bold ionic type for body text, providing more emphasis then the italic type that was used before. Since its invention the Clarendon has been used in many places and adopted by many companies like Rolex, Volvo and Sony.</p>
    </div>
    <div class="clarendonQuest__contaier">
        <h2 class="clarendonQuest__title">Clarendon Quest
            <img class="clarendonQuest__title-image" src="#" alt="Clarendon Quest">
        </h2>
        <img class="clarendonQuest__slantedLogo" alt="tiny slanted logo" src="#">
        <p class="clarendonQuest__paragraph">Welcome to the Clarendon Quest, our plan to make the world a  more bracketed place… We all know by now that the Clarendon is the best font, it’s elegance is simply unmatched by any other slab font. This is why we have decided to rid the world of boring slab serifs and sans serif fonts. No longer will you have to look at inferior fonts on the street!</p>
        <p class="clarendonQuest__findOut"> find out how!</p>
        <img class="clarendonQuest__arrow" src="#.svg" alt="arrow">
        <img class="clarendonQuest__M" src="#" alt="M with red serifs">
        <div class="clarendonQuestStepOne__container">
            <h3 class="clarendonQuestStepOne__title">
                <img class="clarendonQuestStepOne__title-image" src="#" alt="step one">
            </h3>
            <p class="clarendonQuestStepOne__paragraph">Welcome to the Clarendon Quest, our plan to make the world a  more bracketed place… We all know by now that the Clarendon is the best font, It’s elegance is simply unmatched by any other slab font. This is why we have decided to rid the world of boring slab serifs and sans serif fonts. No longer will you have to look at inferior fonts on the street!</p>
            <p class="clarendonQuestStepOne__paragraph">Order a free Clarendon Quest sticker pack by signing up for our mailinglist and we’ll send you an envelope with some “clarendishious” stickers to turn those boring san serifs into a font worth looking at!</p>    
            <form class="clarendonQuestStepOne__form" action="">
                <!-- <input class="clarendonQuestStepOne__form-adress" type="adress">
                <input class="clarendonQuestStepOne__form-name" type="text">
                <button ></button> -->
            </form>
                <img class="clarendonQuestStepOne__stickerpack" src="#" alt="stickerPack">
            </div>
        <div class="clarendonQuestStepTwo__container">
            <img class="clarendonQuestStepTwo__title-image" src="#" alt="step two">
            <p class="clarendonQuestStepTwo__paragraph">Go out into the streets of your local town, look for posters, logo's, signs,... to find fonts that need some altering and put the sticker over them to transform the font into a beautiful Clarendon</p>
            <img class="clarendonQuestStepTwo__stickerImage" src="#" alt="clarendon quest sticker">
            <img class="clarendonQuestStepTwo__stickerGif" src="#" alt="clarendon quest sticker gif">
        </div>
        <div class="clarendonQuestStepThree__container">
            <img class="clarendonQuestStepThree__title-image" src="#" alt="step three">
            <p class="clarendonQuestStepThree__paragraph">Go out into the streets of your local town, look for posters, logo's, signs,... to find fonts that need some altering and put the sticker over them to transform the font into a beautiful Clarendon</p>
            <img class="clarendonQuestStepThree__stickerImage" src="#" alt="clarendon quest sticker">
        </div>
    </div>
    <div class="gallery__container">
        <article class="gallery__images">
            <?php foreach ($products as $product) : ?>
                <div class="gallery__image">
                    <p class="gallery__image-name"><?php echo $image['username'] ?></p>
                    <img class="gallery__image-image" src="#" alt="sticker image">
                </div>
            <?php endforeach; ?>
        </article>
    </div>
    <div class="footer__container">
        <p class="footer__paragraph"> Thanks for visiting!</p>
        <!-- verwijzing naar font van volgende week -->
    </div>
</section>

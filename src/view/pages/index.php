<section class="content">
    <!-- <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <img class="landingPage__slantedLogo" alt="slanted logo" src="assets/img/slantedLogo.png">
            <ul class="menu-items">
                <li><a href="#characteristics">characteristics</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#clarendonQuest">Clarendon quest</a></li>
            </ul>
        </div>
    </nav> -->
    <nav>
        <div class="navbar">
            <div class="containerr nav-container ">
                <input class="checkbox " type="checkbox" name="" id="" />
                <div class="hamburger-lines ">
                    <span class="line line1 "></span>
                    <span class="line line2 "></span>
                    <span class="line line3 "></span>
                </div>  
                <div class="logo">
                    <img class="landingPage__slantedLogo" alt="slanted logo" src="assets/img/slantedLogo.svg">    
                </div>
                <div class="menu-items nav-menu">
                    <li><a href="#">Characteristics</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Clarendon Quest</a></li>
                </div>
            </div>
        </div>
    </nav>
    <div class="landingPage__container">
        <h1 class="landingPage__title" >
            <img class="landingPage__title-image" alt="title image" src="assets/img/titleImageMobile.png">
        </h1>
        <img class="landingPage__R" src="assets/img/rImage.png" alt="capital R">
        <img class="landingPage__arrow" src="assets/img/arrow.svg" alt="arrow">
    </div>
    <div class="characteristics__container">
        <h2 class="characteristics__title">Characteristics</h2>
        <p class="characteristics__paragraph"><?php echo $textArray['characteristics__paragraph']; ?></p>
        <img class="characteristics__gif" src="assets/img/AaBb.gif" ></img> <!-- https://stackoverflow.com/questions/35733029/cross-browser-animated-gif-on-hover-reverse-when-mouse-leaves -->
        </div>
        <!-- ===> svg lettes achtergrond aanpassen aan schermgrote -->
        <h2 class="history__title">History</h2>
    <div class="history__container"> 
        <p class="history__paragraphOne"><?php echo $textArray['history__paragraphOne']; ?></p>
        <p class="history__paragraphTwo"><?php echo $textArray['history__paragraphTwo']; ?></p>
        <p class="history__paragraphThree"><?php echo $textArray['history__paragraphThree']; ?></p>
        <p class="history__paragraphFour"><?php echo $textArray['history__paragraphFour']; ?></p>
        <p class="history__paragraphFive"><?php echo $textArray['history__paragraphFive']; ?></p>
    </div>
    <div class="clarendonQuest__container">
        <h2 class="clarendonQuest__title">
            <img class="clarendonQuest__title-image" src="assets/img/clarendonQuestTitleImage.png" alt="Clarendon Quest">
        </h2>
        <img class="clarendonQuest__M" alt="half M serifs" src="assets/img/capitalM.png">
        <p class="clarendonQuest__paragraph"><?php echo $textArray['clarendonQuest__paragraph']; ?></p>
        <p class="clarendonQuest__findOut"> find out how!</p>
        <img class="clarendonQuest__arrow" src="assets/img/arrow.svg" alt="arrow">
    </div>
        <div class="clarendonQuestStepOne__container">
            <h3 class="clarendonQuestStepOne__title">
                <img class="clarendonQuestStepOne__title-image" src="assets/img/step1.png" alt="step one">
            </h3>
            <p class="clarendonQuestStepOne__paragraph"><?php echo $textArray['clarendonQuestStepOne__paragraph']; ?></p>
            <p class="clarendonQuestStepOne__confirmationMessage"></p>
            <form class="clarendonQuestStepOne__form" action="index.php?page=order" method="get">
                <article class="formcontent">
                    <div class="formStyle">
                        <label class="formlabel" for="name"> Name:</label>
                        <input class="input nameInput" required name="name" type="text" placeholder="Your name">
                    </div>
                    <div class="formStyle">
                        <label class="formlabel" for="address"> Address:</label>
                        <input class="input addressInput" required name="address" type="text" placeholder="Bakerslane 12">
                    </div>
                    <div class="formStyle">
                        <label class="formlabel" for="postal_code"> Postal code:</label>
                        <input class="input postalCodeInput" required name="postal_code" type="number" placeholder="8500">
                    </div>
                    <div class="formStyle">
                        <label class="formlabel" for="city"> City:</label>
                        <input class="input cityInput" required name="city" type="text" placeholder="Kortrijk">
                    </div>
                    <div class="formStyle">
                        <label class="formlabel" for="country"> Country:</label>
                        <select class="input countryInput" required name="country" type="text"> 
                            <?php

                            foreach ($countries as $country) : ?>
                                <option <?php echo $country['name'] == 'Belgium' ? "selected" : "" ?> value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </article>
                <input type="submit" value="submit" class="submitButton">
            </form>
            <img class="clarendonQuestStepOne__stickerpack" src="assets/img/clarendonStickerPack.png" alt="stickerPack">
        </div>
        <div class="clarendonQuestStepTwo__container">
            <h1 class="clarendonQuestStepTwo__title">
                <img class="clarendonQuestStepTwo__title-image" src="assets/img/step2.png" alt="step two">
            </h1>
            <p class="clarendonQuestStepTwo__paragraph"><?php echo $textArray['clarendonQuestStepTwo__paragraph']; ?></p>    
            <img class="clarendonQuestStepTwo__stickerImage" src="assets/img/clarendonSticker.png" alt="clarendon quest sticker">
            <img class="clarendonQuestStepTwo__stickerGif" src="assets/img/stickerAnimation.gif" alt="clarendon quest sticker gif">
        </div>
        <div class="clarendonQuestStepThree__container">
            <img class="clarendonQuestStepThree__title-image" src="assets/img/step3.png" alt="step three">
            <p class="clarendonQuestStepThree__paragraph"><?php echo $textArray['clarendonQuestStepThree__paragraph']; ?></p>
            <img class="clarendonQuestStepThree__stickerImage" src="#" alt="clarendon quest sticker">
            <form class="clarendonQuestStepThree__form" action="index.php?page=upload" method="post" enctype="multipart/form-data"> 
                <input type="file" name="file" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="gallery__container">
        <article class="gallery__images">
            <?php foreach ($images as $image) : ?>
                <div class="gallery__image">
                    <img class="gallery__image-image" src="<?php echo $image['image_path'] ?>" alt="sticker image">
                </div>
            <?php endforeach; ?>
        </article>
    </div>
    <div class="footer__container">
        <p class="footer__paragraph"> Thanks for visiting!</p>
        <!-- verwijzing naar font van volgende week -->
    </div>
</section>

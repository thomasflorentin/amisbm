    <footer class="footer">
        <div class="footer_leftCol">
            <div class="footer_supporters">
                <img style="padding: 10px" src="<?php echo get_template_directory_uri() . "/assets/images/logo_ABM.png"; ?>" alt="Logo du département de Seine-et-Marne">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/logo_BM.png"; ?>" alt="Logo de la mairie de Bourron-Marlotte">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/logo_77.png"; ?>" alt="Logo du département de Seine-et-Marne">
            </div>

            <div class="footer_newsletterWrapper">
                <span>Suivez nos actualités en vous abonnant à notre newsletter !</span>

                <form action="" class="footer_newsletterForm">
                    <input type="email" name="" id="" placeholder="Entrez votre adresse mail">

                    <div class="wrapper--flex">
                        <div class="separator--vertical"></div>
                        <input type="submit" value="" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_send.png"; ?>); margin-left: 0.75em;">
                    </div>
                </form>
            </div>
        </div>

        <div class="footer_rightCol">
            <span> <strong>Les Amis de Bourron-Marlotte</strong> </span>
            <span>135 rue du Général de Gaulle 77780, Bourron-Marlotte</span>
            <span>Tél : 01 64 45 91 44</span>
            <span>Email : amisdebm@gmail.com</span>
        </div>
    </footer>
        
    <?php wp_footer(); ?>
</body>
</html>
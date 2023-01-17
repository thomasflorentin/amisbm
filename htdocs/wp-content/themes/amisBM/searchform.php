<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label for="s" class="hidden">Entrez votre recherche</label>
    <input class="searchForm_inputField" type="text" value="" name="s" id="s" placeholder="Rechercher" />

    <div class="separator--vertical"></div>

    <label for="searchsubmit" class="hidden">Rechercher</label>
    <input class="searchForm_sendBtn" type="submit" name="searchsubmit" id="searchsubmit" value="" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_search.png"; ?>);"/>
</form>
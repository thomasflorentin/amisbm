<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label for="searchBar">Entrez votre recherche</label>
    <input class="searchForm_inputField" type="text" value="" name="searchBar" id="s" placeholder="rechercher" />

    <div class="separator--vertical"></div>

    <label for="searchsubmit">Rechercher</label>
    <input class="searchForm_sendBtn" type="submit" id="searchsubmit" value="" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/ico_search.png"; ?>);"/>
</form>
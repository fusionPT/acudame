<form action="<?php bloginfo('url'); ?>" method="get" id="searchform">
    <fieldset>
        
        <input type="text" name="s" id="search" placeholder="Buscar" value="<?php the_search_query(); ?>" />
       
    </fieldset>
</form>

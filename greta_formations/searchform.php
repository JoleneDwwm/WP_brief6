<form class="d-flex" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="form-control me-2" name="s" type="search" placeholder="Rechercher" aria-label="Search" value= "<?= get_search_query();?>">
    <button class="btn btn-outline-warning" type="submit">Rechercher</button>
</form>

{foreach from=$games item=game}
    <div class="card mx-1 game-card" style="width: 20rem; height: 32rem;">
        <img src="./css/images/{$game['image']}" class="card-img-top" alt="..." width="70" height="200">
        <div class="card-body overflow-hidden">
            <h5 class="card-title">{$game['name']}</h5>
            {if $game['id_category'] == 2}
                <h4>Precio:{$game['price']}</h4>
            {else}
                <h4>Precio: Gratis</h4>
            {/if}
            <p class="card-text">{$game['description']}</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3"> 
                    {if $isAdmin}<a href="deleteGame/{$game['id_game']}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>{/if}
                </div>
                <div class="col-6">
                    <a href="game/{$game['id_game']}" class="btn btn-primary">Ver mas</a>
                </div>
                <div class="col-3"> 
                    {if $isAdmin}<a href="editGame/{$game['id_game']}" class="btn btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></a>{/if}
                </div> 
            </div>
        </div>
    </div>
{/foreach}

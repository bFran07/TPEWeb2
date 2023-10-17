{include file="header.tpl"}


<div class="container d-flex justify-content-center gameContainer">
    <div class="row">
        {include file="game.tpl" }
    </div>
</div>


{if $isAdmin}
    <div class="agregarjuego-btn mt-4">
        {include file='agregarJuego.tpl'}
    </div>
{/if}

{include file="footer.tpl"}
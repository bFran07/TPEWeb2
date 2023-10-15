{include file="header.tpl"}
<div class="container d-flex justify-content-center text-center">
  <div class="card" style="width: 50rem;">
  <img src="./css/images/{$game['image']}" class="card-img-top" alt="..." width="100" height="500">
    <h5 class="card-header">{$game['name']}</h5>
    <div class="card-body">
    {if $category['id_category']==2}
      <h5 class="card-title">PRECIO:{$game['price']}</h5>
    {/if}  
      <p class="card-text">{$game['description']}</p>
      {if $category['id_category']==2}
          <a href="#" class="btn btn-primary">COMPRAR</a>
      {else}
          <a href="#" class="btn btn-primary">DESCARGAR</a>
      {/if}
      <p>Categoria: {$category['category']}</p>
    </div>
  </div>
</div>

{include file="footer.tpl"}
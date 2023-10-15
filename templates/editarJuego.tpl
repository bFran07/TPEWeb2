{include file="header.tpl"}
<div class="container">
    <form class="row g-3 editarJuegoContainer" action="confirmUpdate" method="POST"> 
        <div class="row">
            <div class="img-container">
            <img src="./css/images/{$game['image']}" class="imgEditar" alt="...">
            </div>
        </div>
        <div class="row">
            <label class="form-label text-white">Nueva imagen:</label>
            <input type="file" class="form-control" name="image"  required>
        </div>
        <div class="row">
            <h4 class="textEdit mt-4">Nombre:{$game['name']}</h4>
            <label class="form-label text-white">Nombre Nuevo:</label>
            <input type="text" class="form-control" name="name"  required>
        </div>
        <div class="row">
            <h4 class="textEdit mt-4">Precio:{$game['price']}</h4>
            <label class="form-label text-white">Precio Nuevo:</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="row">
            <h4 class="textEdit mt-4">Descripcion: {$game['description']}</h2>
            <label  class="form-label text-white">Nueva descripcion:</label>
            <input type="text" class="form-control" name="description"  required>
        </div>
        <div class="row">
            <h4 class="textEdit mt-4">Categoria: {$category['category']}</h4>
            <label  class="form-label text-white">Nueva Categoria:</label>
            <select class="form-select" name="category" required>
            {foreach from=$categories item=category}
                <option value="{$category['category']}">{$category['category']}</option>
            {/foreach}
        </select>
        </div>
        <input class="form-control" hidden type="text" name="id_game" value="{$id_game}">
        <button type="submit" class="btn btn-primary">Actualizar</button>           
    </form>
</div>
{include file="footer.tpl"}
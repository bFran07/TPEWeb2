<button class="btn btn-success required" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Agregar juego
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Agregar Juego</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Completa todos los campos para agregar un nuevo juego a la lista
    </div>
    <div class="dropdown mt-3">
        <form action="addGame" method="POST">
            <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input placeholder="Mario Bross" type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Imagen</label>
                <input placeholder="Mario Bross" type="file" class="form-control" name="image" required>
            </div>
            <div class="mb-3">
            <label class="form-label">Precio</label>
            <input placeholder="3,14" type="number" class="form-control" name="price" required>
            <label class="form-label">Descripcion</label>
            <input placeholder="Un juego increible" type="text" class="form-control" name="description" required>
            </div>
            <select class="form-select form-select-lg mb-3" name="category" aria-label=".form-select-lg example" required>
                <option selected>Categoria</option>        
                {foreach from=$categories item=category}
                    <option value="{$category['category']}">{$category['category']}</option>
                {/foreach}
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
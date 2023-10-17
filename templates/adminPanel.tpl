{include file="header.tpl"}

<div class="card text-center m-auto" style="width:60rem;">
  <div class="card-header">
    Usuarios
  </div>
  <div class="card-body">
    {foreach from=$users item=user}
        

        <ul class="container list-group">
            
            <li class="list-group-item">
                {if $user['admin'] eq 1}<span class="text-success">ADMIN</span>{/if}  Email:{$user['email']}<a href="deleteUser/{$user['id_user']}"><i class="fa-solid fa-trash text-danger fs-5" title="Eliminar usuario"></i></a>{if $user['admin'] eq 0}<a href="promoteUser/{$user['id_user']}"><i class="fa-solid fa-user-shield text-success fs-3" title="Dar derechos de administración"></i></a>{/if}{if $user['admin'] eq 1}<a href="demoteUser/{$user['id_user']}"><i class="fa-solid fa-user-minus text-danger fs-3" title="Revocar derechos de administración"></i></a>{/if}
            </li>
    
        </ul>

    {/foreach}
  </div>
</div>

{include file="footer.tpl"}
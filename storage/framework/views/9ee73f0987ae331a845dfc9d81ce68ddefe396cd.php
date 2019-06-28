<?php $__env->startSection('body'); ?>

    <div class="card border-warning">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <form action="/categorias" method="post">
        <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="nomeCategoria">Nome da categoria</label>
              <input type="text"
                class="form-control" name="nomeCategoria" id="nomeCategoria" aria-describedby="helpId" placeholder="Categoria">
            </div>
            <a href="/categorias" class="btn btn-dark"> <<</a>
            <button type="submit" class="btn btn-warning btm-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btm-sm">Cancelar</button>
        </form>
      </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "categorias"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rodrigoods/laravel/cadastro/resources/views/novacategoria.blade.php ENDPATH**/ ?>
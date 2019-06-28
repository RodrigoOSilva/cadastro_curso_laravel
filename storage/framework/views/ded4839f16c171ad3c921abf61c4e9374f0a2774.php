<?php $__env->startSection('body'); ?>


<div class="card border-success">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <form action="/produtos/<?php echo e($prod->id); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nomeProduto">Nome do produto</label>
                <input type="text"
                    class="form-control" name="nomeProduto" value="<?php echo e($prod->nome); ?>" id="nomeProduto" aria-describedby="helpId" placeholder="Produtos">
                <label for="nomeProduto">Quantidade em estoque</label>
                <input type="number"
                    class="form-control" name="estoqueProduto" value="<?php echo e($prod->estoque); ?>" id="estoqueProduto" aria-describedby="helpId" placeholder="Quantidade">
                <label for="nomeProduto">Preço</label>
                <input type="float"
                    class="form-control" name="precoProduto" value="<?php echo e($prod->preco); ?>" id="precoProduto" aria-describedby="helpId" placeholder="Preço">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Opções</label>
                </div>
                    <select class="custom-select" id="inputGroupSelect01" name="categoriaProduto" value="<?php echo e($prod->categoria_id); ?>">
                        <option selected>Categoria do produto</option>
                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->nome); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            </div>
                <button type="submit" class="btn btn-success btm-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btm-sm">Cancelar</button>
        </form>
      </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rodrigoods/laravel/cadastro/resources/views/editarproduto.blade.php ENDPATH**/ ?>
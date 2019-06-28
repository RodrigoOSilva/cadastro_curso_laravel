<?php $__env->startSection('body'); ?>


<div class="card border-dark">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Cadastro de produtos</h4>
    
<?php if($prods): ?>
    <table class="table table-ordered table-hover">
        <thead>
            <tr>
                <th>Código do Produto</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Código da Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($prod->id); ?></td>
                <td><?php echo e($prod->nome); ?></td>
                <td><?php echo e($prod->estoque); ?></td>
                <td><?php echo e($prod->preco); ?></td>
                <td><?php echo e($prod->categoria_id); ?></td>
                <td>
                <a href="/produtos/editar/<?php echo e($prod->id); ?>" class="btn btn-sm btn-success">Editar</a>
                <a href="/produtos/apagar/<?php echo e($prod->id); ?>" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
<?php endif; ?>
  </div>

    <div class="card-footer">
    <a href="/produtos/novo" class="btn btn-sm btn-warning">Novo Produto</a>
    </div>

</div>



    


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', ["current" => "produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rodrigoods/laravel/cadastro/resources/views/produtos.blade.php ENDPATH**/ ?>
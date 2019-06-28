<?php $__env->startSection('body'); ?>

<div class="card border-dark">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Cadastro de categorias</h4>
    

<?php if(count($cats) > 0): ?>
    <table class="table table-ordered table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cat->id); ?></td>
                <td><?php echo e($cat->nome); ?></td>
                <td>
                <a href="/categorias/editar/<?php echo e($cat->id); ?>" class="btn btn-sm btn-success">Editar</a>
                <a href="/categorias/apagar/<?php echo e($cat->id); ?>" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
<?php endif; ?>
  </div>

    <div class="card-footer">
    <a href="/categorias/novo" class="btn btn-sm btn-warning">Nova Categoria</a>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "categorias"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rodrigoods/laravel/cadastro/resources/views/categorias.blade.php ENDPATH**/ ?>
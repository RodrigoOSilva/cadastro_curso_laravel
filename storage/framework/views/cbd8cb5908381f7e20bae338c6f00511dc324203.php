<?php $__env->startSection('body'); ?>
    
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
            <div class="card-deck">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Cadastro de produtos</h4>
                        <p class="card-text">
                        Aqui você cadastra todos os seus produtos. 
                        Não esqueça de cadastrar prevaiamente as categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Cadastro de categorias</h4>
                        <p class="card-text">
                        Aqui você cadastra as categorias dos seus produtos. 
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                    </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "home"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rodrigoods/laravel/cadastro/resources/views/index.blade.php ENDPATH**/ ?>
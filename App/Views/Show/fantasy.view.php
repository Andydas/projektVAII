<div class="container">
    <div class="jumbotron text-left transparent">
        <h1 class="display-4"> Fantasy Seriály</h1>
        <p class="lead">Top fantasy seriály podľa hodnotenia užívateľov.</p>
        <hr class="my-4">
    </div>

    <?PHP
    /** @var \App\Models\Show[] $data */
    foreach ($data as $show) { ?>

        <div class="card mb-3 sedePozadie " >
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="<?= $show->getImg() ?>" class="card-img">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title"><?= $show->getNazov() ?></h5>
                        <p class="card-text"><?= $show->getPopis() ?></p>
                        <a href="?c=Movie&a=edit&id=" class="btn btn-dark">Uprav</a>
                        <a href="#" class="btn btn-dark">Zmaz</a>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>


    <a href="?c=Show&a=add" class="btn btn-light">Pridaj</a>


</div>

</div>
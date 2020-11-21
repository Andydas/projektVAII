<?PHP
/** @var \App\Models\Movie[] $data */
$count = count($data);
$cols = 2;
$rows = ceil($count/$cols);
$inc = 0;

for ($i=0; $i<$rows; $i++)
{?>
    <div class="row">
        <?php for ($j=0; $j<$cols && ($i * 2 + $j) < $count; $j++)
        {?>
            <div class="card sedePozadie mb-3 mr-2 ml-2 sm-col-6 md-col-6" style="max-width: 540px;">
                <div class="row no-gutters h-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="<?= $data[$inc]->getImg() ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="h-100 d-flex flex-column">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <h5 class="card-title"><?= $data[$inc]->getNazov() ?></h5>
                                    <p class="card-text"><?= $data[$inc]->getPopis() ?></p>
                                </div>
                            </div>

                            <div class="card-footer bg-transparent row">
                                <div class="upravovanie col-6">
                                    <a href="?c=Movie&a=edit&id=<?= $data[$inc]->getId() ?>" class="btn btn-dark">Upraviť</a>
                                </div>
                                <div class="mazanie col-6">
                                    <a href="?c=Movie&a=delete&id=<?= $data[$inc]->getId() ?>" class="btn btn-dark">Zmazať</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $inc++;
        }?>
    </div>
<?php }?>

<a href="?c=Movie&a=add" class="btn btn-dark">Pridaj nový</a>

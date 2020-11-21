<?PHP /** @var TYPE_NAME $data */ ?>
<div class="container">

    <div class="jumbotron text-left transparent">
        <h1 class="display-4"> Pridávanie nového seriálu </h1
        <p class="lead">Formulár na pridávanie seriálu.</p>
        <hr class="my-4">
    </div>


    <?php if (!isset($data["instance"])){?>
    <form method="post">
        <div class="form-group">
            <label for="nazovFilmu">Názov seriálu</label>
            <input type="text" class="form-control" id="nazovFilmu" placeholder="Nazov">
        </div>
        <div class="form-group">
            <label for="zanerFilmu">Žáner seriálu</label>
            <select class="form-control" id="zanerFilmu">
                <option>komedia</option>
                <option>fantasy</option>
                <option>drama</option>
            </select>
        </div>

        <div class="form-group">
            <label for="popisFilmu">Popis seriálu</label>
            <textarea class="form-control" rows="4" id="popisFilmu" placeholder="Popis"></textarea>
        </div>

        <div class="form-group">
            <label for="obrazokSerialu">Obrazok seriálu</label>
            <input type="text" class="form-control" id="obrazokSerialu" placeholder="URL s obrazkom">
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Potvrdit</button>
    </form>
    <?php } else {?>
        <form method="post">
            <div class="form-group">
                <label for="nazovFilmu">Názov seriálu</label>
                <input type="text" class="form-control" id="nazovFilmu" placeholder="Nazov" value="<?= $data["instance"]->getNazov() ?>" required>
            </div>
            <div class="form-group">
                <label for="zanerFilmu">Žáner seriálu</label>
                <select class="form-control" id="zanerFilmu">
                    <option>komedia</option>
                    <option>fantasy</option>
                    <option>drama</option>
                </select>
            </div>

            <div class="form-group">
                <label for="popisFilmu">Popis seriálu</label>
                <textarea class="form-control" rows="4" id="popisFilmu" placeholder="Popis"></textarea>
            </div>

            <div class="form-group">
                <label for="obrazokSerialu">Obrazok seriálu</label>
                <input type="text" class="form-control" id="obrazokSerialu" placeholder="URL s obrazkom">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Potvrdit</button>
        </form>
    <?php } ?>
</div>
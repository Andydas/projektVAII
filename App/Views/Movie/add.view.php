<?PHP /** @var TYPE_NAME $data */ ?>
<div class="container">

    <div class="jumbotron text-left transparent">
        <h1 class="display-4"> Pridávanie nového filmu </h1
        <p class="lead">Formulár na pridávanie filmu.</p>
        <hr class="my-4">
    </div>

    <?php if (isset($data["instance"])){?>
        <form method="post">
            <div class="form-group">
                <label for="nazovFilmu">Názov filmu</label>
                <?php if (isset($data["errors"]["nazov"])) {
                    foreach ($data["errors"]["nazov"] as $error) {?>
                        <div class="text-danger">
                            <?= $error ?>
                        </div>
                    <?php }}?>
                <input type="text" class="form-control" name="nazov" value="<?= $data["instance"]->getNazov() ?>" required>
            </div>

            <div class="form-group">
                <label for="zanerFilmu">Žáner filmu</label>
                <select class="form-control" name="zaner" required>
                    <option value="" selected><?= $data["instance"]->getZaner() ?></option>
                    <option>akcny</option>
                    <option>scifi</option>
                    <option>horror</option>
                </select>
            </div>

            <div class="form-group">
                <label for="popisFilmu">Popis filmu</label>
                <textarea class="form-control" rows="4" name="popis"> <?= $data["instance"]->getPopis() ?> </textarea>
            </div>

            <div class="form-group">
                <label for="obrazokFilmu " >Obrázok filmu</label>
                <?php if (isset($data["errors"]["img"])) {
                    foreach ($data["errors"]["img"] as $error) {?>
                        <div class="text-danger">
                            <?= $error ?>
                        </div>
                    <?php }}?>
                <input type="text" class="form-control" name="img" value="<?= $data["instance"]->getImg() ?>">
            </div>
        <br>
            <button type="submit" class="btn btn-dark">Potvrdiť</button>
        </form>

    <?php } else {?>

        <form method="post">
            <div class="form-group">
                <label for="nazovFilmu">Názov filmu</label>

                <input type="text" class="form-control" name="nazov" placeholder="Názov" required>
            </div>

            <div class="form-group">
                <label for="zanerFilmu">Žáner filmu</label>
                <select class="form-control" name="zaner" required>
                    <option value="" selected disabled>Vyber žáner</option>
                    <option>akcny</option>
                    <option>scifi</option>
                    <option>horror</option>
                </select>
            </div>

            <div class="form-group">
                <label for="popisFilmu">Popis filmu</label>
                <textarea class="form-control" rows="4" name="popis" placeholder="Popis"></textarea>
            </div>

            <div class="form-group">
                <label for="obrazokFilmu">Obrázok filmu</label>

                <input type="text" class="form-control" name="img" placeholder="URL s obrázkom">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Potvrdiť</button>
        </form>

    <?php } ?>
</div>
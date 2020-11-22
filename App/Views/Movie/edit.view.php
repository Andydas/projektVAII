<?PHP /** @var TYPE_NAME $data */ ?>
<div class="container">

    <div class="jumbotron text-left transparent">
        <h1 class="display-4"> Editácia filmu </h1
        <p class="lead">Formulár na editáciu filmu.</p>
        <hr class="my-4">
    </div>

    <form method="post">
        <input  type="hidden" value="<?= $data["instance"]->getId() ?>" name="id">


        <div class="form-group">
            <label for="nazovFilmu">Názov filmu</label>
            <?php if (isset($data["errors"]["nazov"])) {
                foreach ($data["errors"]["nazov"] as $error) {?>
            <div class="text-danger">
                <?= $error ?>
            </div>
            <?php }}?>
            <input type="text" class="form-control" name="nazov" value="<?= $data["instance"]->getNazov() ?>">
        </div>

        <div class="form-group">
            <label for="zanerFilmu">Žáner filmu</label>
            <select class="form-control" name="zaner" required>
                <option selected><?= $data["instance"]->getZaner() ?></option>
                <option>akcny</option>
                <option>scifi</option>
                <option>horror</option>
            </select>
        </div>

        <div class="form-group">
            <label for="popisFilmu">Popis filmu</label>
            <textarea class="form-control" rows="4" name="popis"><?= $data["instance"]->getPopis() ?></textarea>
        </div>

        <div class="form-group">
            <label for="obrazokFilmu">Obrázok filmu</label>
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

</div>
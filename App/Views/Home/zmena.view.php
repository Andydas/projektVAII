<?php /** @var TYPE_NAME $data */ ?>
<?php
switch ($data["typ"])
{
    case "add":?>
        <div class="container">
            <div class="jumbotron text-left transparent">
                <h1 class="display-4"> Pridanie zaznamu prebehlo uspesne </h1>
                <hr class="my-4">
                <p> Polozka <strong><?= $data["nazov"] ?></strong> uspesne pridana</p>
            </div>
        </div>
    <?php
        break;

    case "edit":?>
        <div class="container">
            <div class="jumbotron text-left transparent">
                <h1 class="display-4"> Editacia zaznamu prebehla uspesne </h1>
                <hr class="my-4">
                <p>Zmena polozky <strong><?= $data["nazov"] ?></strong> prebehla uspesne</p>
            </div>
        </div>
    <?php
        break;

    case "delete":?>
        <div class="container">
            <div class="jumbotron text-left transparent">
                <h1 class="display-4"> Vymazanie zaznamu prebehlo uspesne </h1>
                <hr class="my-4">
                <p> Polozka <strong><?= $data["nazov"] ?></strong> uspesne vymazana</p>
            </div>
        </div>
    <?php
        break;
}?>



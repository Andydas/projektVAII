<?php /** @var TYPE_NAME $data */ ?>
<?php
switch ($data["typ"])
{
    case "add":?>
        <div class="container">
            <div class="jumbotron text-left transparent">
                <h1 class="display-4"> Pridanie záznamu prebehlo úspešne </h1>
                <hr class="my-4">
                <p> Položka <strong><?= $data["nazov"] ?></strong> úspešne pridaná</p>
            </div>
        </div>
    <?php
        break;

    case "edit":?>
        <div class="container">
            <div class="jumbotron text-left transparent">
                <h1 class="display-4"> Editácia záznamu prebehla úspešne </h1>
                <hr class="my-4">
                <p>Zmena položky <strong><?= $data["nazov"] ?></strong> prebehla úspešne</p>
            </div>
        </div>
    <?php
        break;

    case "delete":?>
        <div class="container">
            <div class="jumbotron text-left transparent">
                <h1 class="display-4"> Vymazanie záznamu prebehlo úspešne </h1>
                <hr class="my-4">
                <p> Položka <strong><?= $data["nazov"] ?></strong> úspešne vymazaná</p>
            </div>
        </div>
    <?php
        break;
}?>



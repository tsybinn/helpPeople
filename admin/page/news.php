<style>
    .container {

        width: 100%;
        border: 1px solid;

    }

    .detailText {
        font-size: 18px;
    }
    .control .col a{
        font-size: 20px !important;
        color:red;
        display: block;
        width:300px;
        margin: 0 auto;
        
    }
</style>
<ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <a class="nav-link" href="?addedNews">Добавить новость</a>
    </li>
</ul>
<?
$ITEMS = $db->selectHelpP('news');
foreach ($ITEMS as  $key => $value) : ?>
    <div class="container">

    <div class="row control">
            <div class="col">
                <a href="?delete=<?= $value['id'] ?>">удалить новость</a>
            </div>
            <div class="col">
                <a href="?update=<?= $value['id'] ?>">изменить новость</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="date"><?= $value['date'] ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4><?= $value['prevText'] ?></h4>
            </div>
        </div>
        <div class="row">
            <? for ($i = 1; $i <= 4; $i++) : ?>
                <? if (!empty($value["foto$i"])) : ?>
                    <div class="col">
                        <img src="<?= $value["foto$i"] ?>" width="300px" height="400px" ;>
                    </div>
                <? else : ?>
                    <div class="col">
                        <img src="../img/empty.gif" width="300px" height="400px;" ;>
                    </div>
            <? endif;
                endfor; ?>
        </div>
        <div class="row">
            <div class="col">
                <p class="detailText"><?= $value['detailText'] ?></p>
            </div>
        </div>
    </div>
<? endforeach ?>
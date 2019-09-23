

<? $ITEMS = $db->selectHelpP('news');
foreach ($ITEMS as  $key => $value) : ?>
    <div class="container news">
        <div class="row">
            <div class="col dateNews">
                <div class="date"><?= $value['date'] ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col ">
                <h4 class="prevTextNews"><?= $value['prevText'] ?></h4>
            </div>
        </div>
        <div class="row videoNews">
            <? for ($i = 0; $i <= 1; $i++) : ?>
                <? if (!empty($value["video$i"])) : ?>
                    <div class="col-sm ">
                       
                        <iframe width="300" height="300" src="https://www.youtube.com/embed/<?=$value["video$i"] ?>" frameborder="0"
                             allow="accelerometer; autoplay; encrypted-media; gyroscope; 
        picture-in-picture" allowfullscreen></iframe>
                       
                    </div>
            <? endif;
                endfor; ?>
        </div>
        
        <div class="row">
            <? for ($i = 1; $i <= 4; $i++) : ?>
                <? if (!empty($value["foto$i"])) : ?>
                    <div class="col-sm ">
                        <img class='newsBorder' src="admin/<?= $value["foto$i"] ?>" width="300px" height="400px" ;>
                    </div>
            <? endif;
                endfor; ?>
        </div>
        <div class="row detailTextNews">
            <div class="col-sm">
                <p class="detailText"><?= $value['detailText'] ?></p>
            </div>
        </div>
    </div>
<? endforeach ?>


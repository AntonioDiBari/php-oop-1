<tr>
    <td>
        <?= $production->title ?>
    </td>
    <td>
        <?= $production->lang ?>
    </td>
    <td>
        <ul class="list-group">
            <?php foreach ($production->genres as $genre): ?>
                <li class="list-group-item">
                    <?= $genre->name ?>
                </li>
            <?php endforeach ?>
        </ul>
    </td>
    <td>
        <?= $production->vote ?> /
        <?= $production->setPercentage() ?>
    </td>
    <td>
        <ul class="list-group">
            <?php if ($production instanceof Movie): ?>
                <li class="list-group-item">
                    <b>Incassi:</b>
                    <?= $production->profits ?> €
                </li>
                <li class="list-group-item">
                    <b>Durata Film:</b>
                    <?= $production->duration ?> min
                </li>
            <?php endif;
            if ($production instanceof TVSerie): ?>
                <li class="list-group-item">
                    <b>Stagioni:</b>
                    <?= $production->seasons ?>
                </li>
                <li class="list-group-item">
                    <b>Totale Episodi:</b>
                    <?= $production->episodes ?>
                </li>
            <?php endif ?>
        </ul>
    </td>
</tr>
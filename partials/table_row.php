<tr>
    <td>
        <?= $production->title ?>
    </td>
    <td>
        <?= $production->lang ?>
    </td>
    <td>
        <?= $production->genre->name ?>
    </td>
    <td>
        <?= $production->vote ?> /
        <?= $production->setPercentage() ?>
    </td>
</tr>
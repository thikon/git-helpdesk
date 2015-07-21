<!-- File: src/Template/Articles/index.ctp -->

<h1>Blog articles</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Created</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->userid ?></td>
        <td>
            <?= $this->Html->link($user->firstname, ['action' => 'view', $user->userid]) ?>
        </td>
        <td><?= $user->create_date ?></td>
    </tr>
    <?php endforeach; ?>

</table>

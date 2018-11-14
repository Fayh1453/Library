<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($book->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($book->genre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publication') ?></th>
            <td><?= h($book->publication) ?></td>
        </tr>
    </table>
    </div>
</div>
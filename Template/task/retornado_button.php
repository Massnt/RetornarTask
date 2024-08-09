<?php if ($task['color_id'] == 'blue' && $task['column_id'] == ($retornarTaskConfig['column_id'] ?? '22') &&
    $task['project_id'] == ($retornarTaskConfig['project_id'] ?? '1')) : ?>
    <a id="retornar"
       type="button"
       data-chamado="<?= $task['title'] ?>"
       class="btn-retornado"
       href="<?= $this->url->href('TaskReturnController', 'markAsReturned', array('plugin' => 'RetornarTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
        <span>Retornado ao cliente</span>
    </a>
<?php endif; ?>

<?php

namespace Kanboard\Plugin\RetornarTask\Controller;

use Kanboard\Controller\BaseController;

class TaskReturnController extends BaseController
{
    public function markAsReturned()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'green'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

}

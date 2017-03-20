
<!-- Modal -->
    <div class="modal fade" id="taskModal-<?= $task->id?>" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="taskModalLabel"> <?= $task->title?></h4>
                </div>
                <div class="modal-body">
                    <div class="content"><?= $task->content ?></div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Done</button>
                </div>
            </div>
        </div>
    </div>
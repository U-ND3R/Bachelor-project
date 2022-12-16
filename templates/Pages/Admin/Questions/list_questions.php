<?php
if (!empty($title)) {
    $this->assign("title", $title);
}

$this->Html->css([
    "/plugins/datatables-bs4/css/dataTables.bootstrap4.css"
], ["block" => "TopStyleLinks"]);

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>List Questions</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Questions</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">List Questions</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tbl-questions" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Survey Name</th>
                                    <th>Question Name</th>
                                    <th>Position</th>
                                    <th>Question Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (count($questions) > 0){

                                    foreach ($questions as $question){
                                ?>
                                        <tr>
                                            <td><?= $question->id ?></td>
                                            <td><?= "<b>Question name:</b> " . $question->name . "<br/><b>Position: </b>" . $question->position . "<br/><b>Question type: </b>" . $question->question_type ?></td>
                                            <td><?= isset($question->question_survey->name) ? $question->question_survey->name : "N/A"; ?></td>
                                            <td>
                                                <form action="<?= $this->Url->build('/admin/delete-question/' . $question->id, ['fullBase' => true]) ?>" method="post" id="frm-delete-question-<?= $question->id ?>">
                                                    <input type="hidden" name="id" value="$question->id" />
                                                </form>
                                                <a href="<?= $this->Url->build('/admin/edit-question/' . $question->id, ['fullBase' => true]) ?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0)" onclick="if(confirm('Are you sure want to delete ?')){ $('#frm-delete-question-<?= $question->id ?>').submit() }" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?=
    $this->Html->script([
        "/plugins/datatables/jquery.dataTables.js",
        "/plugins/datatables-bs4/js/dataTables.bootstrap4.js"
    ], ["block" => "bottomScriptLinks"]);
?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#tbl-questions").DataTable();';
$this->Html->scriptEnd();
?>
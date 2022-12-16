<?php
if (!empty($title)) {
    $this->assign("title", $title);
}
?>
<?=
    $this->Html->css([
        "pickmeup.css"
    ], ["block" => "TopStyleLinks"])
?>
<style>
    #frm-edit-question label.error {
        color: red;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Question</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Question</li>
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
                        <h3 class="card-title">Edit Question</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?=
                            $this->Form->create($question, [
                                "id" => "frm-edit-question"
                            ])
                        ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Survey*</label>
                                    <select required class="form-control" name="survey_id" id="survey_id">
                                        <option value="">Choose Survey</option>
                                        <?php
                                        if (count($surveys) > 0) {
                                            foreach ($surveys as $index => $survey) {
                                        ?>
                                                <option <?= $question->survey_id == $survey->id ? "selected" : "" ?> value="<?= $survey->id ?>"><?= strtoupper($survey->name) ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Question name*</label>
                                    <input type="text" value="<?= $question->name ?>" required name="name" id="name" placeholder="E.g. How many cigaretes you smoke?" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Position*</label>
                                    <input type="number" value="<?= $question->position ?>" required name="position" id="position" minlength="1" placeholder="E.g. 1" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder="E.g. Question about the number of nicotine-delivering devices consumed per day"><?= $question->description ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Question type*</label>
                                    <input type="text" value="<?= $question->question_type ?>" required name="question_type" id="question_type" placeholder="E.g. Multiple Choice Question" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button name="btn_submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
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
        "jquery.validate.min.js",
        "pickmeup.js"
    ], ["block" => "bottomScriptLinks"]);
?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#frm-edit-question").validate();';
$this->Html->scriptEnd();
?>
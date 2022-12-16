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
    #frm-add-responce label.error {
        color: red;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Add Responce</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Responce</li>
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
                        <h3 class="card-title">Add Responce</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?=
                            $this->Form->create($responce, [
                                "id" => "frm-add-responce",
                                "type" => "file"
                            ])
                        ?>
                                                <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Client*</label>
                                    <select required class="form-control" name="client_id" id="client_id">
                                        <option value="">Choose Client</option>
                                        <?php
                                        if (count($clients) > 0){
                                            foreach ($clients as $index => $client){
                                        ?>
                                                <option value="<?= $client->id ?>"><?= strtoupper($client->name) ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Client*</label>
                                    <select required class="form-control" name="client_id" id="client_id">
                                        <option value="">Choose Client</option>
                                        <?php
                                        if (count($clients) > 0){
                                            foreach ($clients as $index => $client){
                                        ?>
                                                <option value="<?= $client->id ?>"><?= strtoupper($client->name) ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Survey*</label>
                                    <select required class="form-control" name="survey_id" id="survey_id">
                                        <option value="">Choose Survey</option>
                                        <?php
                                        if (count($surveys) > 0){
                                            foreach ($surveys as $index => $surveys){
                                        ?>
                                                <option value="<?= $surveys->id ?>"><?= strtoupper($survey->name) ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Question*</label>
                                    <select required class="form-control" name="question_id" id="question_id">
                                        <option value="">Choose Question</option>
                                        <?php
                                        if (count($questions) > 0){
                                            foreach ($questions as $index => $questions){
                                        ?>
                                                <option value="<?= $questions->id ?>"><?= strtoupper($question->name) ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Status*</label>
                                    <select required class="form-control" name="status" id="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
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
echo '$("#frm-add-responce").validate();';
echo 'pickmeup("input#dob", { hide_on_select: true, position: "right" });';
$this->Html->scriptEnd();
?>
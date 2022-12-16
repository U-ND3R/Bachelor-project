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
    #frm-add-report label.error {
        color: red;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Add Report</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Report</li>
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
                        <h3 class="card-title">Add Report</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?=
                            $this->Form->create($report, [
                                "id" => "frm-add-report"
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
                                                <option value="<?= $survey->id ?>"><?= strtoupper($survey->name) ?></option>
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
                                    <label>report name*</label>
                                    <input type="text" required name="name" id="name" placeholder="" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Position*</label>
                                    <input type="number" required name="position" id="position" minlength="1" placeholder="E.g. 1" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>report type*</label>
                                    <input type="text" required name="report_type" id="report_type" placeholder="" class="form-control" />
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
echo '$("#frm-add-report").validate();';
$this->Html->scriptEnd();
?>
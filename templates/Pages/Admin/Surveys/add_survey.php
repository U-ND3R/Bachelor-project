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
    #frm-add-survey label.error {
        color: red;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Add Survey</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Survey</li>
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
                        <h3 class="card-title">Add Survey</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?= $this->Form->create($survey, [
                            "id" => "frm-add-survey"
                        ]) ?>
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
echo '$("#frm-add-survey").validate();';
echo 'pickmeup("input#dob", { hide_on_select: true, position: "right" });';
$this->Html->scriptEnd();
?>
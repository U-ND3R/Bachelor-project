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
                <h3>List Surveys</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Surveys</li>
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
                        <h3 class="card-title">List Surveys</h3>
                    </div>
                    <!-- /.card-header -->
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= $this->Form->end() ?>
            </div>

        </div>
    </div>
</div>

<?=
    $this->Html->script([
        "/plugins/datatables/jquery.dataTables.js",
        "/plugins/datatables-bs4/js/dataTables.bootstrap4.js"
    ], ["block" => "bottomScriptLinks"]);
?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#tbl-surveyss").DataTable();';

// click event
echo '$(document).on("click", ".btn-allot-modal", function(){
    var surveys_id = $(this).attr("data-id");
    $("#surveys_id").val(surveys_id);
});';

$this->Html->scriptEnd();
?>
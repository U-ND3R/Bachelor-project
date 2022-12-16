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
                <h3>List Company</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Companies</li>
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
                        <h3 class="card-title">List Companies</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tbl-companies" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Company Code</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($companies) > 0) {

                                    foreach ($companies as $index => $company) {
                                ?>
                                        <tr>
                                            <td><?= $company->id ?></td>
                                            <td><?= "<b>Name: </b>" . $company->name . "<br/><b>Company code: </b>" . $company->company_code . "<br/><b>Email: </b>" . $company->email ?></td>
                                            <td>
                                                <form id="frm-delete-company-<?= $company->id ?>" action="<?= $this->Url->build('/admin/delete-company/' . $company->id) ?>" method="post">
                                                    <input type="hidden" value="<?= $company->id ?>" name="id" />
                                                </form>
                                                <a href="<?= $this->Url->build('/admin/edit-company/' . $company->id, ['fullBase' => true]) ?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0)" onclick="if(confirm('Are you sure want to delete?')){ $('#frm-delete-company-<?= $company->id ?>').submit() }" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
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
echo '$("#tbl-companies").DataTable();';
$this->Html->scriptEnd();
?>
 <?php
    if (!empty($title)) {
        $this->assign("title", $title);
    }
    ?>

 <style>
     #frm-add-company label.error {
         color: red;
     }
 </style>
 <!-- Content Header (Page header) -->
 <section class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h3>Add Company</h3>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Add Company</li>
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
                         <h3 class="card-title">Add Company</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <?=
                                $this->Form->create($company, [
                                    "id" => "frm-add-company"
                                ])
                            ?>
                         <div class="row">
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label>Name*</label>
                                     <input type="text" required name="name" id="name" placeholder="E.g. Test" class="form-control" />
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label>Company code*</label>
                                     <input type="number" required name="short_name" id="short_name" minlength="9" maxlength="9" placeholder="E.g. 123456789" class="form-control" />
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label>Description</label>
                                     <textarea class="form-control" name="description" id="description" placeholder="E.g. Test company for testing input forms"></textarea>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label>Email*</label>
                                     <input type="email" required name="email" id="email" placeholder="E.g. testinfo@test.lt" class="form-control" />
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
            "jquery.validate.min.js"
        ], ["block" => "bottomScriptLinks"]);
    ?>

 <?php
    $this->Html->scriptStart(["block" => true]);
    echo '$("#frm-add-company").validate();';
    $this->Html->scriptEnd();
    ?>
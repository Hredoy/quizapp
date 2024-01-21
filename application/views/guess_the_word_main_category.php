<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create and Manage Main Category | <?php echo ($app_name) ? $app_name['message'] : "" ?></title>   

        <?php base_url() . include 'include.php'; ?>  
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <?php base_url() . include 'header.php'; ?>  

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Create and Manage Main Category</h1>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Create Main Category</h4>
                                        </div>

                                        <div class="card-body">
                                            <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                <input type="hidden" name="type" value="<?= $this->uri->segment(1) ?>" required/>
                                                <?php if (is_language_mode_enabled()) { ?>
                                                    <div class="form-group row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <label class="control-label">Language</label>
                                                            <select name="language_id" class="form-control" required>
                                                                <option value="">Select Language</option>
                                                                <?php foreach ($language as $lang) { ?>
                                                                    <option value="<?= $lang->id ?>"><?= $lang->language ?></option>
                                                                <?php } ?> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label">Category Name</label>
                                                        <input name="name" type="text" class="form-control" placeholder="Enter Category Name" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label">Image</label>
                                                        <input id="file" name="file" type="file" accept="image/*" class="form-control">
                                                        <small class="text-danger">Image type supported (png, jpg and jpeg)</small>
                                                        <p style="display: none" id="img_error_msg" class="badge badge-danger"></p>
                                                    </div> 
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="submit" name="btnadd" value="Submit" class="<?= BUTTON_CLASS ?>"/>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Categories <small>View / Update / Delete</small></h4>
                                        </div>

                                        <div class="card-body">
                                            <?php if (is_language_mode_enabled()) { ?>
                                                <div class="row">
                                                    <div class='col-md-4'>
                                                        <select id='filter_language' class='form-control' required>
                                                            <option value="">Select language</option>
                                                            <?php foreach ($language as $lang) { ?>
                                                                <option value="<?= $lang->id ?>"><?= $lang->language ?></option>
                                                            <?php } ?> 
                                                        </select>
                                                    </div>
                                                    <div class='col-md-4'>
                                                        <button class='<?= BUTTON_CLASS ?> btn-block form-control' id='filter_btn'>Filter Data</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div id="toolbar">
                                                <?php if (has_permissions('delete', 'categories')) { ?>						
                                                    <button class="btn btn-danger" id="delete_multiple_categories" title="Delete Selected Categories"><em class='fa fa-trash'></em></button>
                                                <?php } ?>
                                            </div>
                                            <table aria-describedby="mydesc" class='table-striped' id='category_list' 
                                                   data-toggle="table" data-url="<?= base_url() . 'Table/category' ?>"
                                                   data-click-to-select="true" data-side-pagination="server" 
                                                   data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200, All]" 
                                                   data-search="true" data-toolbar="#toolbar" 
                                                   data-show-columns="true" data-show-refresh="true" 
                                                   data-fixed-columns="true" data-fixed-number="2" data-fixed-right-number="1"
                                                   data-trim-on-search="false" data-mobile-responsive="true"
                                                   data-sort-name="row_order" data-sort-order="asc"    
                                                   data-pagination-successively-size="3" data-maintain-selected="true"
                                                   data-show-export="true" data-export-types='["csv","excel","pdf"]'
                                                   data-export-options='{ "fileName": "category-list-<?= date('d-m-y') ?>" }'
                                                   data-query-params="queryParams">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-field="state" data-checkbox="true"></th>
                                                        <th scope="col" data-field="id" data-sortable="true">ID</th>
                                                        <?php if (is_language_mode_enabled()) { ?>
                                                            <th scope="col" data-field="language_id" data-sortable="true" data-visible="false">Language ID</th>
                                                            <th scope="col" data-field="language" data-sortable="true">Language</th>
                                                        <?php } ?>
                                                        <th scope="col" data-field="row_order" data-sortable="true" data-visible="false">Order</th>
                                                        <th scope="col" data-field="category_name" data-sortable="true">Category Name</th>
                                                        <th scope="col" data-field="image" data-sortable="false">Image</th>
                                                        <?php $type =$this->uri->segment(1);
                                                         if($type == 'fun-n-learn-category') { ?>
                                                            <th scope="col" data-field="no_of_que" data-sortable="false">Total Fun 'N' Learn</th>
                                                        <?php } else if($type == 'guess-the-word-category') { ?>
                                                            <th scope="col" data-field="no_of_que" data-sortable="false">Total Guess the Word</th>
                                                        <?php } else { ?>
                                                            <th scope="col" data-field="no_of_que" data-sortable="false">Total Question</th>
                                                        <?php } ?>
                                                        <th scope="col" data-field="operate" data-sortable="false" data-events="actionEvents" data-force-hide="true">Operate</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="editDataModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Main Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <input type='hidden' name="edit_id" id="edit_id" value="" />
                                <input type="hidden" name='image_url' id="image_url" value="" />
                                <input type="hidden" name="type" value="<?= $this->uri->segment(1) ?>" required/>
                                <?php if (is_language_mode_enabled()) { ?>
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                            <label class="control-label">Language</label>
                                            <select id="language_id" name="language_id" class="form-control" required>
                                                <?php foreach ($language as $lang) { ?>
                                                    <option value="<?= $lang->id ?>"><?= $lang->language ?></option>
                                                <?php } ?> 
                                            </select>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group row">                                                    
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Category Name</label>
                                        <input id="category_name" name="name" type="text" class="form-control" required placeholder="Enter Category Name">
                                    </div>                                   
                                </div>

                                <div class="form-group row">                                                 
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Image <small>( Leave it blank for no change )</small></label>
                                        <input id="update_file" name="update_file" type="file" accept="image/*" class="form-control">
                                        <small class="text-danger">Image type supported (png, jpg and jpeg)</small>
                                        <p style="display: none" id="up_img_error_msg" class="badge badge-danger"></p>
                                    </div>
                                </div>

                                <div class="float-right">                                    
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input name="btnupdate" type="submit" value="Save changes" class="<?= BUTTON_CLASS ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php base_url() . include 'footer.php'; ?>

        <script type="text/javascript">
            $('#filter_btn').on('click', function (e) {
                $('#category_list').bootstrapTable('refresh');
            });
            $('#delete_multiple_categories').on('click', function (e) {
                var base_url = "<?php echo base_url(); ?>";
                sec = 'tbl_category';
                is_image = 1;
                table = $('#category_list');
                delete_button = $('#delete_multiple_categories');
                selected = table.bootstrapTable('getSelections');
                ids = "";
                $.each(selected, function (i, e) {
                    ids += e.id + ",";
                });
                ids = ids.slice(0, -1);
                if (ids == "") {
                    alert("Please select some categories to delete!");
                } else {
                    if (confirm("Are you sure you want to delete all selected categories?")) {
                        $.ajax({
                            type: "POST",
                            url: base_url + 'delete_multiple',
                            data: 'ids=' + ids + '&sec=' + sec + '&is_image=' + is_image,
                            beforeSend: function () {
                                delete_button.html('<i class="fa fa-spinner fa-pulse"></i>');
                            },
                            success: function (result) {
                                if (result == 1) {
                                    alert("Categories deleted successfully");
                                } else {
                                    alert("Could not delete Categories. Try again!");
                                }
                                delete_button.html('<i class="fa fa-trash"></i>');
                                table.bootstrapTable('refresh');
                            }
                        });
                    }
                }
            });
        </script>

        <script type="text/javascript">
            window.actionEvents = {
                'click .edit-data': function (e, value, row, index) {
                    $('#edit_id').val(row.id);
                    $('#image_url').val(row.image_url);
                    $('#language_id').val(row.language_id);
                    $('#category_name').val(row.category_name);
                }
            };
        </script>

        <script type="text/javascript">
            $(document).on('click', '.delete-data', function () {
                if (confirm('Are you sure? Want to delete category? All related data will also be deleted')) {
                    var base_url = "<?php echo base_url(); ?>";
                    id = $(this).data("id");
                    image = $(this).data("image");
                    $.ajax({
                        url: base_url + 'delete_category',
                        type: "POST",
                        data: 'id=' + id + '&image_url=' + image,
                        success: function (result) {
                            if (result) {
                                $('#category_list').bootstrapTable('refresh');
                            } else {
                                var PERMISSION_ERROR_MSG = "<?= PERMISSION_ERROR_MSG; ?>";
                                ErrorMsg(PERMISSION_ERROR_MSG);
                            }
                        }
                    });
                }
            });
        </script>

        <script type="text/javascript">
            function queryParams(p) {
                return {
                    "type": '<?= $this->uri->segment(1) ?>',
                    "language": $('#filter_language').val(),
                    sort: p.sort,
                    order: p.order,
                    offset: p.offset,
                    limit: p.limit,
                    search: p.search
                };
            }
        </script>

        <script type="text/javascript">
            var _URL = window.URL || window.webkitURL;

            $("#file").change(function (e) {
                var file, img;

                if ((file = this.files[0])) {
                    img = new Image();
                    img.onerror = function () {
                        $('#file').val('');
                        $('#img_error_msg').html('<?= INVALID_IMAGE_TYPE; ?>');
                        $('#img_error_msg').show().delay(3000).fadeOut();
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });

            $("#update_file").change(function (e) {
                var file, img;

                if ((file = this.files[0])) {
                    img = new Image();
                    img.onerror = function () {
                        $('#update_file').val('');
                        $('#up_img_error_msg').html('<?= INVALID_IMAGE_TYPE; ?>');
                        $('#up_img_error_msg').show().delay(3000).fadeOut();
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });
        </script>

    </body>
</html>
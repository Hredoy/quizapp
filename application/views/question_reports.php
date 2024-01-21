<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Question Reports by users | <?php echo ($app_name) ? $app_name['message'] : "" ?></title>   

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
                            <h1>Question Reports by users</h1>
                        </div>
                        <div class="section-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">

                                            <div id="toolbar">
                                                <?php if (has_permissions('delete', 'question_report')) { ?>
                                                    <button class="btn btn-danger" id="delete_multiple_question_reports" title="Delete Selected Question Reports"><em class='fa fa-trash'></em></button>								  
                                                <?php } ?>
                                            </div> 
                                            <table aria-describedby="mydesc" class='table-striped' id='report_list' 
                                                   data-toggle="table" data-url="<?= base_url() . 'Table/question_reports' ?>"
                                                   data-click-to-select="true" data-side-pagination="server" 
                                                   data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200, All]" 
                                                   data-search="true" data-toolbar="#toolbar" 
                                                   data-show-columns="true" data-show-refresh="true" 
                                                   data-fixed-columns="true" data-fixed-number="2" data-fixed-right-number="1"
                                                   data-trim-on-search="false" data-mobile-responsive="true"
                                                   data-sort-name="id" data-sort-order="desc"    
                                                   data-pagination-successively-size="3" data-maintain-selected="true"
                                                   data-show-export="true" data-export-types='["csv","excel","pdf"]'
                                                   data-export-options='{ "fileName": "report-list-<?= date('d-m-y') ?>" }'
                                                   data-query-params="queryParams">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-field="state" data-checkbox="true"></th>
                                                        <th scope="col" data-field="id" data-sortable="true">ID</th>
                                                        <th scope="col" data-field="user_id" data-sortable="true" data-visible='false'>User ID</th>
                                                        <th scope="col" data-field="name" data-sortable="true">Name</th>
                                                        <th scope="col" data-field="question_id" data-sortable="true" data-visible='false'>Question ID</th>
                                                        <th scope="col" data-field="question" data-sortable="true">Question</th>
                                                        <th scope="col" data-field="message" data-sortable="true">Message</th>
                                                        <th scope="col" data-field="date" data-sortable="true">Date</th>
                                                        <th scope="col" data-field="operate" data-sortable="false" data-events="actionEvents">Operate</th>
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
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Question</h5>
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
                                <div class="form-group row">                                               
                                    <?php if (is_language_mode_enabled()) { ?>
                                        <div class="col-md-4 col-sm-12">
                                            <label class="control-label">Language</label>
                                            <select name="language_id" id="update_language_id" class="form-control" required>
                                                <option value="">Select Language</option>
                                                <?php foreach ($language as $lang) { ?>
                                                    <option value="<?= $lang->id ?>"><?= $lang->language ?></option>
                                                <?php } ?> 
                                            </select>
                                        </div>    
                                        <div class="col-md-4 col-sm-12">
                                            <label class="control-label">Main Category</label>
                                            <select id="edit_category" name="category" class="form-control" required>
                                                <option value="">Select Main Category</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label class="control-label">Sub Category</label>
                                            <select id="edit_subcategory" name="subcategory" class="form-control">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Main Category</label>
                                            <select id="edit_category" name="category" class="form-control" required>
                                                <option value="">Select Main Category</option>
                                                <?php foreach ($category as $cat) { ?>
                                                    <option value="<?= $cat->id ?>"><?= $cat->category_name ?></option>
                                                <?php } ?> 
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Sub Category</label>
                                            <select id="edit_subcategory" name="subcategory" class="form-control">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                        </div>
                                    <?php } ?>

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Question</label>
                                        <textarea id="edit_question" name="question" class="form-control" required></textarea>
                                    </div>                                                   
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">  
                                        <label class="control-label">Question Type</label>
                                        <div>
                                            <div class="form-check-inline bg-light p-2">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="edit_question_type" value="1" checked required>Options
                                                </label>

                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="edit_question_type" value="2">True / False
                                                </label>
                                            </div>
                                        </div>                                                             
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image <small>( Leave it blank for no change )</small></label>
                                        <input id="update_file" name="update_file" type="file" accept="image/*" class="form-control">
                                        <small class="text-danger">Image type supported (png, jpg and jpeg)</small>
                                        <p style="display: none" id="up_img_error_msg" class="badge badge-danger"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label">Option A</label>                                                
                                        <input class="form-control" type="text" id="edit_a" name="a" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label">Option B</label>
                                        <input class="form-control" type="text" id="edit_b" name="b" required>
                                    </div>
                                </div>
                                <div id="edit_tf">
                                    <div class="form-group row">                                                   
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Option C</label>
                                            <input class="form-control" type="text" id="edit_c" name="c" required>
                                        </div>                                                    
                                        <div class="col-md-6 col-sm-6">
                                            <label class="control-label">Option D</label>
                                            <input class="form-control" type="text" id="edit_d" name="d" required>
                                        </div>
                                    </div>
                                    <?php if (is_option_e_mode_enabled()) { ?>
                                        <div class="form-group row">                                                        
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Option E</label>
                                                <input class="form-control" type="text" id="edit_e" name="e" required>
                                            </div> 
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Answer</label>                                                  
                                        <select name='answer' id='edit_answer' class='form-control' required>
                                            <option value=''>Select Right Answer</option>
                                            <option value='a'>A</option>
                                            <option value='b'>B</option>
                                            <option class='edit_ntf' value='c'>C</option>
                                            <option class='edit_ntf' value='d'>D</option>
                                            <?php if (is_option_e_mode_enabled()) { ?>
                                                <option class='edit_ntf' value='e'>E</option>
                                            <?php } ?>
                                        </select>
                                    </div>                                                    
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Level</label>
                                        <input type='number' id="edit_level" name='level' class='form-control' required>
                                    </div>
                                </div>
                                <div class="form-group row">                                                    
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Note</label>
                                        <textarea name='note' id="edit_note" class='form-control'></textarea>
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
            window.actionEvents = {
                'click .edit-data': function (e, value, row, index) {
                    $('#edit_id').val(row.question_id);
                    $('#image_url').val(row.image_url);
                    $('#edit_question').val(row.question);
<?php if (is_language_mode_enabled()) { ?>
                        if (row.language_id == 0) {
                            $('#update_language_id').val(row.language_id);
                            $('#edit_category').html(category_options);
                            $('#edit_category').val(row.category).trigger("change", [row.category, row.subcategory]);
                        } else {
                            $('#update_language_id').val(row.language_id).trigger("change", [row.language_id, row.category, row.subcategory]);
                        }
<?php } else { ?>
                        $('#edit_category').val(row.category).trigger("change", [row.category, row.subcategory]);
<?php } ?>
                    var question_type = row.question_type;
                    if (question_type == "2") {
                        $("input[name=edit_question_type][value=2]").prop('checked', true);
                        $('#edit_tf').hide('fast');
                        $('#edit_a').val(row.optiona);
                        $('#edit_b').val(row.optionb);
                        $('.edit_ntf').hide('fast');
                        $('#edit_c').removeAttr('required');
                        $('#edit_d').removeAttr('required');
                        $('#edit_e').removeAttr('required');
                    } else {
                        $("input[name=edit_question_type][value=1]").prop('checked', true);
                        $('#edit_a').val(row.optiona);
                        $('#edit_b').val(row.optionb);
                        $('#edit_c').val(row.optionc);
                        $('#edit_d').val(row.optiond);
<?php if (is_option_e_mode_enabled()) { ?>
                            $('#edit_e').val(row.optione);
<?php } ?>
                        $('#edit_tf').show('fast');
                        $('.edit_ntf').show('fast');
                        $('#edit_c').attr("required", "required");
                        $('#edit_d').attr("required", "required");
                        $('#edit_e').attr("required", "required");
                    }

                    $('#edit_a').val(row.optiona);
                    $('#edit_b').val(row.optionb);
                    $('#edit_c').val(row.optionc);
                    $('#edit_d').val(row.optiond);
<?php if (is_option_e_mode_enabled()) { ?>
                        $('#edit_e').val(row.optione);
<?php } ?>
                    $('#edit_answer').val(row.answer.toLowerCase());
                    $('#edit_level').val(row.level);
                    $('#edit_note').val(row.note);
                    $('#edit_subcategory').val(row.subcategory);
                }
            };
        </script>

        <script type="text/javascript">
            $('input[name="edit_question_type"]').on("click", function (e) {
                var edit_question_type = $(this).val();

                if (edit_question_type == "2") {
                    $('#edit_tf').hide('fast');
                    $('#edit_a').val("<?= is_settings('true_value') ?>");
                    $('#edit_b').val("<?= is_settings('false_value') ?>");
                    $('#edit_c').removeAttr('required');
                    $('#edit_d').removeAttr('required');
                    $('#edit_e').removeAttr('required');
                    $('.edit_ntf').hide('fast');
                    $('#edit_answer').val('');
                } else {
                    $('#edit_tf').show('fast');
                    $('.edit_ntf').show('fast');
                    $('#edit_c').attr("required", "required");
                    $('#edit_d').attr("required", "required");
                    $('#edit_e').attr("required", "required");
                }
            });
        </script>

        <script type="text/javascript">
            var base_url = "<?php echo base_url(); ?>";
            var type = 'main-category';
            $('#update_language_id').on('change', function (e, row_language_id, row_category, row_subcategory) {
                var language_id = $('#update_language_id').val();
                $.ajax({
                    type: 'POST',
                    url: base_url + 'get_categories_of_language',
                    data: 'language_id=' + language_id + '&type=' + type,
                    beforeSend: function () {
                        $('#edit_category').html('<option value="">Please wait..</option>');
                    },
                    success: function (result) {
                        $('#edit_category').html(result).trigger("change");
                        if (language_id == row_language_id && row_category != 0)
                            $('#edit_category').val(row_category).trigger("change", [row_category, row_subcategory]);
                    }
                });
            });

            category_options = '';
<?php
$category_options = "<option value=''>Select Category</option>";
foreach ($category as $cat) {
    $category_options .= "<option value=" . $cat->id . ">" . $cat->category_name . "</option>";
}
?>
            category_options = "<?= $category_options; ?>";

            $('#edit_category').on('change', function (e, row_category, row_subcategroy) {
                var category_id = $('#edit_category').val();
                $.ajax({
                    type: 'POST',
                    url: base_url + 'get_subcategories_of_category',
                    data: 'category_id=' + category_id,
                    beforeSend: function () {
                        $('#edit_subcategory').html('<option value="">Please wait..</option>');
                    },
                    success: function (result) {
                        $('#edit_subcategory').html(result);
                        if (category_id == row_category && row_subcategroy != 0)
                            $('#edit_subcategory').val(row_subcategroy);
                    }
                });
            });

        </script>    

        <script type="text/javascript">
            $('#filter_btn').on('click', function (e) {
                $('#report_list').bootstrapTable('refresh');
            });
            $('#delete_multiple_question_reports').on('click', function (e) {
                var base_url = "<?php echo base_url(); ?>";
                sec = 'tbl_question_reports';
                is_image = 0;
                table = $('#report_list');
                delete_button = $('#delete_multiple_question_reports');
                selected = table.bootstrapTable('getSelections');
                ids = "";
                $.each(selected, function (i, e) {
                    ids += e.id + ",";
                });
                ids = ids.slice(0, -1);
                if (ids == "") {
                    alert("Please select some reports to delete!");
                } else {
                    if (confirm("Are you sure you want to delete all selected reports?")) {
                        $.ajax({
                            type: "POST",
                            url: base_url + 'delete_multiple',
                            data: 'ids=' + ids + '&sec=' + sec + '&is_image=' + is_image,
                            beforeSend: function () {
                                delete_button.html('<i class="fa fa-spinner fa-pulse"></i>');
                            },
                            success: function (result) {
                                if (result == 1) {
                                    alert("Question reports deleted successfully");
                                } else {
                                    alert("Could not delete Question reports. Try again!");
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
            $(document).on('click', '.delete-data', function () {
                if (confirm('Are you sure? Want to delete report?')) {
                    var base_url = "<?php echo base_url(); ?>";
                    id = $(this).data("id");
                    $.ajax({
                        url: base_url + 'delete_question_report',
                        type: "POST",
                        data: 'id=' + id,
                        success: function (result) {
                            if (result) {
                                $('#report_list').bootstrapTable('refresh');
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
                    sort: p.sort,
                    order: p.order,
                    offset: p.offset,
                    limit: p.limit,
                    search: p.search
                };
            }
        </script>

    </body>
</html>
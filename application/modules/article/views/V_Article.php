<script src="<?php base_url(); ?>vendors/ckeditor/ckeditor.js"></script>

<div class="container">
  <button class="btn btn-success" onclick="add_data()"><i class="glyphicon glyphicon-plus"></i> Add article</button>
  <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
  <br /><br />
  <table id="table" class="table table-striped" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Judul Artikel</th>
        <!-- <th>Link Artikel</th> -->
        <!-- <th>Kontent Artikel</th> -->
        <!-- <th>Thumbnail</th> -->
        <th>Tanggal</th>
        <th style="width:125px;">Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>


<script>
var save_method; //for save method string
var table;


$(document).ready(function() {
  $('.selectpicker').selectpicker(); //Select Option

  CKEDITOR.replace( 'myEditor'); //HTML EDITOR


  //datatables
  table = $('#table').DataTable({

      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
          "url": "<?php echo site_url('article/ajax_list')?>",
          "type": "POST"
      },

      //Set column definition initialisation properties.
      "columnDefs": [
      {
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
      },
      ],

  });

  //datepicker
  var datePicker = $('.datepicker').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      todayHighlight: true,
      orientation: "auto",
      todayBtn: true,
      todayHighlight: true,
  });

  // Function scroll to datepicker Position
  $("#modal_form").scroll(function(){
    $(".datepicker").datepicker('place');
  });

  // Function when button Cancel clicked
  $('#modal_form').on('hidden.bs.modal', function(e) {
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement(); //for insert with ajax
        CKEDITOR.instances[instance].setData(''); //for reset form after submited(insert data)
    }
    $(this).find('#form')[0].reset();
    $(".selectpicker").val('default').selectpicker("refresh");

    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
  });

  //set input/textarea/select event when change value, remove class error and remove text help block
  $("input").change(function(){
      $(this).parent().parent().removeClass('has-error');
      $(this).next().empty();
  });
  $("textarea").change(function(){
      $(this).parent().parent().removeClass('has-error');
      $(this).next().empty();
  });
  $("select").change(function(){
      $(this).parent().parent().removeClass('has-error');
      $(this).next().empty();
  });
});



function add_data()
{
  save_method = 'add';
  $('#form')[0].reset(); // reset form on modals
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty(); // clear error string
  $('#modal_form').modal('show'); // show bootstrap modal
  $('.modal-title').text('Add article'); // Set Title to Bootstrap modal title
}

function reload_table()
{
  table.ajax.reload(null,false); //reload datatable ajax
}

function save()
{
  $('#btnSave').text('saving...'); //change button text
  $('#btnSave').attr('disabled',true); //set button disable
  var url;

  if(save_method == 'add') {
      url = "<?php echo site_url('article/ajax_add')?>";
  } else {
      url = "<?php echo site_url('article/ajax_update')?>";
  }

  for (instance in CKEDITOR.instances) {
      CKEDITOR.instances[instance].updateElement(); //for insert with ajax
      CKEDITOR.instances[instance].setData(''); //for reset form after submited(insert data)
  }

  // ajax adding data to database
  $.ajax({
      url : url,
      type: "POST",
      data: $('#form').serialize(),
      dataType: "JSON",
      success: function(data)
      {

          if(data.status) //if success close modal and reload ajax table
          {
            setTimeout("$('#modal_form').fadeOut('200').modal('hide');",80);
            reload_table();
          }
          else
          {
              for (var i = 0; i < data.inputerror.length; i++)
              {
                  $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                  $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
              }
          }
          $('#btnSave').text('save'); //change button text
          $('#btnSave').attr('disabled',false); //set button enable

          // $('.selectpicker').selectpicker('refresh');


      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error saat memperbaharui data');
          $('#btnSave').text('save'); //change button text
          $('#btnSave').attr('disabled',false); //set button enable

      }
  });
}

function edit_data(id)
{
  save_method = 'update';
  $('#form')[0].reset(); // reset form on modals
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty(); // clear error string

  for (instance in CKEDITOR.instances) {
      CKEDITOR.instances[instance].updateElement(); //for insert with ajax
      CKEDITOR.instances[instance].setData(''); //for reset form after submited(insert data)
  }

  //Ajax Load data from ajax
  $.ajax({
      url : "<?php echo site_url('article/ajax_edit/')?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {

          $('[name="id"]').val(data.id);
          // $('[name="author_ID"]').val(data.author_ID);
          // $('[name="category_ID"]').val(data.category_ID);
          $('[name="category_ID"]').selectpicker('val',data.category_ID);
          $('[name="post_title"]').val(data.post_title);
          // $('[name="post_slug"]').val(data.post_slug);
          // $('[name="post_content"]').val(data.post_content);
          $('[name="post_content"]').val(data.post_content);
          CKEDITOR.instances['myEditor'].setData(); //for get value data

          // $("#summernote").summernote("code",(data.post_content));

          // $('[name="post_thumbnail"]').val(data.post_thumbnail);
          $('[name="created_at"]').datepicker('update',data.created_at);
          $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text('Edit Artikel'); // Set title to Bootstrap modal title

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Kesalahan mendapatkan data dari ajax');
      }
  });
}

function delete_data(id)
{
  bootbox.confirm("Yakin ingin menghapus data ini?", function(result){
    if (result == true) {
      // ajax delete data to database
      $.ajax({
          url : "<?php echo site_url('article/ajax_delete')?>/"+id,
          type: "POST",
          dataType: "JSON",
          success: function(data)
          {
              //if success reload ajax table
              $('#modal_form').modal('hide');
              reload_table();
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error saat menghapus data');
          }
      });
    }
  });
}

</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Aclonica|Quicksand');
    
    .full-modal{
        width: 90% !important;
        left: 0;
        right: 0;
        height: auto !important;
        top: 10px !important;
        bottom: 0 !important;
        margin: auto;
        padding: 0 !important;
    }

    /* .modal-body {
        max-height: calc(100% - 120px);
        overflow-y: scroll;
    } */

    body.modal-open {
        overflow: hidden;
    }

    .error{
     	color: #A94442;
      font-weight: normal;
    }

    .form-control-feedback{
      top: 20px;
      right: 5px;
      color: green;
    }

    .btn-primary{
      background-color: #293E53 !important;
    }

    .selectpicker{
      width: 500px;
    }

</style>

  <!-- Bootstrap modal -->
<div class="modal animated fadeIn" id="modal_form" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog full-modal">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2A3F54; color: white;">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="modal-title">Form Artikel</h3>
                  </div>
                  <div class="col-sm-6 text-right">
                      <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
                      <button type="button" class="btn btn-default" id="cancel" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <input name="author_ID" type="hidden" value="<?php echo $user->id;?>">

                    <div class="form-body row">
                        <div class="form-group col-sm-4 col-xs-12">
                            <label class="control-label">Nama Artikel</label>
                            <input name="post_title" placeholder="Nama Artikel" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>

                        <!-- <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">Penulis</label>
                            <input class="form-control" value="<?php echo $user->name;?>" disabled>
                        </div> -->

                        <div class="form-group col-sm-4 col-xs-12 row">
                            <label for="category_ID" class="control-label">Kategori</label><br>
                            <select class="selectpicker col-sm-12" data-live-search="true" name="category_ID" title="Pilih Kategori Penyakit">
                              <?php foreach ($cat_list as $row): ?>
                                <option data-tokens="<?php echo ucwords($row->category_name); ?>" value="<?php echo $row->id; ?>" ><?php echo ucwords($row->category_name); ?></option>
                              <?php endforeach ?>
                            </select>
                            <span class="help-block"></span>
                        </div>

                      <!-- </div>
                      <div class="form-body row"> -->
                        <!-- <div class="form-group col-sm-6 col-xs-12">
                            <label class="control-label">Link Artikel</label>
                            <input name="post_slug" placeholder="Link Artikel" class="form-control" type="text">
                        </div> -->

                        <!-- <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">Thumbnail</label>
                            <input name="post_thumbnail" placeholder="Thumbnail" class="form-control" type="text">
                        </div> -->

                        <div class="form-group col-sm-4 col-xs-12 has-feedback">
                          <label for="created_at" class="control-label">Tanggal</label>
                          <div class="input-group">
                            <!-- <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
                            <input name="created_at" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                            <span class="help-block"></span>
                          </div>
                        </div>
                      </div>

                      <div class="form-body row">
                        <div class="form-group col-lg-12 col-xs-12">
                            <label class="control-label">Konten Artikel</label>
                            <textarea type="text" name="post_content" id="myEditor" placeholder="Konten anda disini" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

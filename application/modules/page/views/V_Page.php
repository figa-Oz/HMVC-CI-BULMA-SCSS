<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<div class="container">
        <button class="btn btn-success" onclick="add_data()"><i class="glyphicon glyphicon-plus"></i> Add page</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="table" class="table table-striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nama Halaman</th>
                    <!-- <th>Link Halaman</th> -->
                    <!-- <th>Kontent Halaman</th> -->
                    <th>Status</th>
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
  $('#summernote').summernote({
    minHeight: 300,
    toolbar: [
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']],
      ['insert', ['picture', 'link']],
      ['table', ['table']],
      ["view", ["fullscreen", "codeview"]],
    ],
    onblur: function() {
        textarea.value = $(this).code();
        {{ id }}_textarea.value = $(this).code();
    }
  });
  // $('textarea[name="content"]').html($('#summernote').code());
  var form = $('#summernote').summernote('code');

  //datatables
  table = $('#table').DataTable({

      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
          "url": "<?php echo site_url('page/ajax_list')?>",
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

  // Function when button Cancel clicked
  $('#modal_form').on('hidden.bs.modal', function(e) {
    //for (instance in CKEDITOR.instances) {
        // CKEDITOR.instances[instance].updateElement(); //for insert with ajax
        // CKEDITOR.instances[instance].setData(''); //for reset form after submited(insert data)
    //}

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

  // Function scroll to datepicker
  $("#modal_form").scroll(function(){
    $(".datepicker").datepicker('place');
  });

  //set input/textarea/select event when change value, remove class error and remove text help block
  $("input").change(function(){
      $(this).parent().parent().removeClass('has-error has-feedback');
      $(this).next().empty();
  });

  $("textarea").change(function(){
      $(this).parent().parent().removeClass('has-error has-feedback');
      $(this).next().empty();
  });
  $("select").change(function(){
      $(this).parent().parent().removeClass('has-error has-feedback');
      $(this).next().empty();
  });

  // Function validator jQuery bootstrap
  $("#form").validate({
    rules: {
      title: {
        required: true,
        minlength: 4
      },
      status: {
        required: true,
        minlength: 4
      },
      content: {
        required: true,
        minlength: 4
      }
    },
    messages: {
      title: {
        required: "bidang harus diisi",
        minlength: "bidang diisi setidaknya harus 4 karakter"
      },
      status: {
        required: "bidang harus diisi",
        minlength: "bidang diisi setidaknya harus 4 karakter"
      },
      content: {
        required: "bidang harus diisi",
        minlength: "bidang diisi setidaknya harus 4 karakter"
      }
    },

    highlight: function (element, errorClass, validClass){
      if (element.type === "radio"){
        this.findByName(element.name).addClass(errorClass).removeClass(validClass);
      }else {
        $(element).closest('.form-group').addClass('has-error has-feedback');
        // $(element).closest('.form-group').find('i.fa').remove();
        // $(element).closest('.form-group').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
      }
    },

    unhighlight: function (element, errorClass, validClass){
      if (element.type === "radio"){
        this.findByName(element.name).removeClass(errorClass).addClass(validClass);
      }else {
        $(element).closest('.form-group').removeClass('has-error has-feedback');
        // $(element).closest('.form-group').find('i.fa-exclamation').remove();
        // $(element).closest('.form-group').append('<i class="fa fa-check fa-lg form-control-feedback"></i>');
      }
    }

  });

});



function add_data()
{
  save_method = 'add';
  $('#form')[0].reset(); // reset form on modals
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty(); // clear error string
  $('#modal_form').modal('show'); // show bootstrap modal
  $('.modal-title').text('Add page'); // Set Title to Bootstrap modal title
}

function edit_data(id)
{
  save_method = 'update';
  $('#form')[0].reset(); // reset form on modals
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty(); // clear error string

  //Ajax Load data from ajax
  $.ajax({
      url : "<?php echo site_url('page/ajax_edit/')?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {

          $('[name="id"]').val(data.id);
          $('[name="title"]').val(data.title);
          // $('[name="slug"]').val(data.slug);
          // $('[name="content"]').val(data.content);

          $("#summernote").summernote("code",(data.content));

          $('[name="statuses"]').val(data.statuses);
          $('[name="created_at"]').datepicker('update',data.created_at);
          $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text('Edit Halaman'); // Set title to Bootstrap modal title

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Kesalahan mendapatkan data dari ajax');
      }
  });
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
      url = "<?php echo site_url('page/ajax_add')?>";
  } else {
      url = "<?php echo site_url('page/ajax_update')?>";
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


      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error saat memperbaharui data');
          $('#btnSave').text('save'); //change button text
          $('#btnSave').attr('disabled',false); //set button enable

      }
  });
}

function delete_data(id)
{
  bootbox.confirm("Yakin ingin menghapus data ini?", function(result){
    if (result == true) {
      // ajax delete data to database
      $.ajax({
          url : "<?php echo site_url('page/ajax_delete')?>/"+id,
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

    .btn-default.btn-on.active{background-color: #5BB75B;color: white;}
    .btn-default.btn-off.active{background-color: #DA4F49;color: white;}


</style>

  <!-- Bootstrap modal -->
<div class="modal animated fadeIn" id="modal_form" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog full-modal">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2A3F54; color: white;">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="modal-title">Form Halaman</h3>
                  </div>
                  <div class="col-sm-6 text-right">
                      <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>

                    <div class="form-body row">
                        <div class="form-group col-sm-4 col-xs-12">
                            <label class="control-label">Nama Halaman</label>
                            <input id="title" name="title" placeholder="Nama Halaman" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>

                        <!-- <div class="form-group col-sm-6 col-xs-12">
                            <label class="control-label">Link Halaman</label>
                            <input name="slug" placeholder="Link Halaman" class="form-control" type="text">
                        </div> -->

                        <div class="form-group col-sm-4 col-xs-12 has-feedback">
                          <label for="created_at" class="control-label">Tanggal</label>
                          <div class="input-group">
                            <!-- <div class="input-group-addon" style="height: 20px"><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
                            <input id="created_at" name="created_at" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text" required>
                            <span class="help-block"></span>
                          </div>
                        </div>

                        <div class="form-group col-sm-4 col-xs-12">
                          <label class="control-label">Status</label>
                          <div class="input-group">
                            <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-md btn-default btn-on active">
                              <input type="radio" name="statuses" value="aktif" checked="checked">ON</label>
                              <label class="btn btn-md btn-default btn-off">
                              <input type="radio" name="statuses" value="tidak">OFF</label>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="form-body row">
                        <div class="form-group col-lg-12 col-xs-12">
                            <label class="control-label">Konten Halaman</label>
                            <textarea type="text" name="content" id="summernote" placeholder="Konten anda disini" class="form-control" required></textarea>
                            <span class="help-block"></span>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div> -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

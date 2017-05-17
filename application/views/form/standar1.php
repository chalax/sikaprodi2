<h1>STANDAR 1: VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</h1>

<?php
if($standar1==0){

}else{
    ?>

        <strong>File Visi Misi yang telah di Upload : </strong> <?php echo $standar1[0]->filepath ;?>
        <br>
        <label class="label label-info">Atau ubah file dengan tombol upload file dibawah ini</label>
        <hr>
    <?php
}
?>

    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon glyphicon-open"></i>
        <span>Upload File</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" accept="application/pdf">
    </span>

    <!-- The global progress bar -->
  
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>





        <script>
        /*jslint unparam: true */
        /*global window, $ */
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                limitMultiFileUploads: 1,
                singleFileUploads: false,
                acceptFileTypes: /(pdf)|(rtf)$/i,  
                done: function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        //$('<p/>').text(file.name).appendTo('#files');

                        $('#files').html('<a href="<?php echo base_url();?>jqfu/server/php/files/'+file.name+'">'+file.name+'</a>');
                         $('#progress').css('visibility','hidden');
                         inserttodb('<?php echo base_url();?>jqfu/server/php/files/'+file.name);

                    });
                  //  console.log(e);
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                always: function (e, data) {
                    // data.errorThrown
                    // data.textStatus;
                    // data.jqXHR;
                    console.log(data.textStatus);
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });

        function inserttodb(filepath){
            $.ajax({
              method: "POST",
              url: "<?php echo base_url('newsubmission/savestandar1');?>",
              data: { sbms: "<?php echo $idsubmission;?>", fpath: filepath }
            })
              .done(function( msg ) {
                    location.reload();
              });
        }
        </script>
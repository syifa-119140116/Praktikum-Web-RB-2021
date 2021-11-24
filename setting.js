$(document).ready(function(){
        $('#batal').click(function(){
            $('#batal').hide();
            $('#edit').hide();
        });
        $('#tampil_data').load("tampil.php");
            $('#edit').click(function(){
                var data = $('#form_roti').serialize();
                $.ajax({
                    type : "POST",
                    url : "edit.php",
                    data : data,
                    cache : false,
                    success : function(data){
                        $('#tampil_data').load(tampil.php);
                    }
                });
            });
        $('#edit').click(function(){
            $('#batal').hide();
            $('#edit').hide();
        });
});
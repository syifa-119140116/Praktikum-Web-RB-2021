<table id="tabeldata">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>CRUD</th>
        </tr>
        <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from mahasiswa order by nim asc");

        while($data = mysqli_fetch_array($hasil)):
        ?>
        <tr>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['prodi']; ?></td>
            <td><?php echo $data['angkatan']; ?></td>
            <td><input id="btn_edit" type="button" value="Edit"><br><input id="btn_hapus" type="button" value="Hapus"></td>
        </tr>
        <?php endwhile; ?>
</table>

<script>
    $(document).ready(function(){

        $('#tabeldata').on('click','#btn_edit',function(){
            $('html, body').animate({scrollTop: 0});
            var baris = $(this).closest('tr').find("td:first").html();
            $('#nim').val(baris);
            $('#edit').show();
            $('#batal').show();
            $('#nim').show();
        });

        $('#tabeldata').on('click','#btn_hapus', function(){
            var id = $(this).closest('tr').find("td:first").html();
            var data = {nim:baris};
            $.ajax({
                type : "POST",
                url : "hapus.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load("tampil.php");
                }
            });
        });      
    });
</script>
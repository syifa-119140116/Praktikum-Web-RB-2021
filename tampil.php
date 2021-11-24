<table id="tabeldata">
        <tr>
            <th>ID</th>
            <th>Roti Tawar</th>
            <th>Roti Cokelat</th>
            <th>Roti Keju</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from toko_roti order by id asc");

        while($data = mysqli_fetch_array($hasil)):
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['tawar']; ?></td>
            <td><?php echo $data['cokelat']; ?></td>
            <td><?php echo $data['keju']; ?></td>
            <td><input id="btn_edit" type="button" value="Edit"><br><button type="submit" id="btn_hapus"><a <?php echo "href='hapus.php?id=".$data['id']."'";?> >Hapus</a></button></td>
        </tr>
        <?php endwhile; ?>
</table>

<script>
    $(document).ready(function(){

        $('#tabeldata').on('click','#btn_edit',function(){
            $('html, body').animate({scrollTop: 0});
            var baris = $(this).closest('tr').find("td:first").html();
            $('#id').val(baris);
            $('#edit').show();
            $('#batal').show();
        });    
    });
</script>
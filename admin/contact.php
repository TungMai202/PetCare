<?php
    include_once("header.php");
?>
<style>
    #content{
        margin-top:16px
    }

    .table{
        width: 100%;
        border-collapse: collapse;
        
    }
    .table th,
    .table td{
        border:1px solid #ccc;
        box-sizing: border-box;
        padding:10px
    }
</style>
<div style="clear:both">&ensp;</div>
<div id="content">
<?php
    if($get_contact->num_rows > 0){
        ?>
        <div style="clear:both">&ensp;</div>
        <div id="content">
            <table class="table table-border">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>TÊN KHÁCH HÀNG</td>
                        <td>EMAIL</td>
                        <td>NỘI DUNG</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        while ($item = mysqli_fetch_assoc($get_contact)) {
                            $i++;
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= isset($item['name']) ? $item['name'] : '' ?></td>
                                    <td><?= isset($item['email']) ? $item['email'] : '' ?></td>
                                    <td><?= isset($item['message']) ? $item['message'] : '' ?></td>
                                </tr>
                            <?php
                        }    
                    ?>
                </tbody>
            </table>
        </div>
            
        <?php
    }else{
        ?>
            <h3>Không có liên hệ!</h3>
        <?php
    }
?>
</div>
<?php
    include_once("footer.php");
?>
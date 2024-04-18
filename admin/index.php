<?php
    include_once("header.php");
?>
<style>
    #content{
        margin-top:50px
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
<?php
    if($get_order->num_rows > 0){
        ?>
        <div style="clear:both">&ensp;</div>
        <div id="content">
            <table class="table table-border">
                <thead>
                    <tr>
                        <td>Stt</td>
                        <td>Tên dịch vụ</td>
                        <td>Tên khách hàng</td>
                        <td>Số điện thoại</td>
                        <td>Email</td>
                        <td>Loại</td>
                        <td>Trạng thái</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        while ($item = mysqli_fetch_assoc($get_order)) {
                            $get_product = mysqli_query($conn,'SELECT * FROM product WHERE id = '.$item['id_product']);
                            $result_product = mysqli_fetch_assoc($get_product);
                            $i++;
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= isset($result_product['title']) ? $result_product['title'] : '' ?></td>
                                    <td><?= isset($item['fullname']) ? $item['fullname'] : '' ?></td>
                                    <td><?= isset($item['phone']) ? $item['phone'] : '' ?></td>
                                    <td><?= isset($item['email']) ? $item['email'] : '' ?></td>
                                    <td>
                                        <?php
                                            if($item['type'] == 1){
                                                print 'Tắm rửa toàn thân';
                                            }elseif($item['type'] == 2){
                                                print 'Cắt, tỉa lông theo yêu cầu';
                                            }elseif($item['type'] == 3){
                                                print 'Cắt, mài móng';
                                            }elseif($item['type'] == 4){
                                                print 'Massage thư giãn';
                                            }elseif($item['type'] == 5){
                                                print 'Vệ sinh tuyến mồ hôi';
                                            }elseif($item['type'] == 6){
                                                print 'Dịch vụ lưu trú';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if($item['status'] == 0){
                                                print 'Đang xử lý';
                                            }else{
                                                print 'Đã hoàn thành';
                                            }
                                        ?>
                                    </td>
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
            <h3>Không có đơn hàng!</h3>
        <?php
    }
?>


<?php
    include_once("footer.php");
?>
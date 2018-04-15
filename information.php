<?php
header("content-type:text/html;charset=utf-8");
$textrev = '<textarea style=\'overflow-x: hidden;overflow-y: hidden;border: 0rem;resize: none;width: 47rem;min-height: 70rem;font-size: 1rem;font-family: 微软雅黑;\' onfocus="this.blur()">'
.$_POST['formatcontent']
.'</textarea>';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="preview.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class='block'>
    <div class='head'>
        <image src='logo.jpg' alt='logo'/>
        <a>报价单号：<?php echo $_POST['quoteno'];?></a>
    </div>
    <div id='details'>
        <ul>
            <li>Attn: <?php echo $_POST['contact'];echo ('&nbsp;&nbsp;&nbsp;');echo $_POST['client'];?></li>
            <hr>
            <li>CC: <?php echo $_POST['cc'];?></li>
            <hr>
            <li>From: <?php echo $_POST['sender'];?></li>
            <hr>
            <li>Fax No.(from): <?php echo $_POST['fax'];?></li>
            <hr>
            <li>Tel No.: <?php echo $_POST['tel'];?></li>
            <hr>
            <li>E-mail: <?php echo $_POST['email'];?></li>
            <hr>
            <li>Date: <?php echo $_POST['dt'];?></li>
            <hr>
        </ul>
    </div>
    <div id='content'>
        <h>Quotation FAX报价单</h>
        <p>尊敬的<?php echo $_POST['contact'];?>:</p>
        <div>
            <?php echo $textrev;?>
        </div>
        <div id='price'>
            <p>附件：</p>
            <table>
                <tr>
                    <th>类别</th>
                    <th>备件费用</th>
                    <th>服务费用</th>
                </tr>
                <tr>
                    <td><?php echo $_POST['price0'];?></td>
                    <td><?php echo $_POST['price1'];?></td>
                    <td><?php echo $_POST['price2'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['price3'];?></td>
                    <td><?php echo $_POST['price4'];?></td>
                    <td><?php echo $_POST['price5'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['price6'];?></td>
                    <td><?php echo $_POST['price7'];?></td>
                    <td><?php echo $_POST['price8'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['price9'];?></td>
                    <td><?php echo $_POST['price10'];?></td>
                    <td><?php echo $_POST['price11'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['price12'];?></td>
                    <td><?php echo $_POST['price13'];?></td>
                    <td><?php echo $_POST['price14'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['price15'];?></td>
                    <td><?php echo $_POST['price16'];?></td>
                    <td><?php echo $_POST['price17'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['price18'];?></td>
                    <td><?php echo $_POST['price19'];?></td>
                    <td><?php echo $_POST['price20'];?></td>
                </tr>
                <tr><td colspan='3'><?php echo $_POST['valuation'];?></td></tr>
            </table>
        </div>
    </div>
</div>
</body>
<script type='text/javascript'>
window
</script>
</html>
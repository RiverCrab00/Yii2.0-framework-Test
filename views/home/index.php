<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2017/10/7
 * Time: 12:25
 */
use yii\helpers\Html;
?>
<div>
    <table border="1">
        <tr>
            <td>编号</td>
            <td>姓名</td>
            <td>性别</td>
            <td>省份</td>
            <td>系别</td>
        </tr>
        <?php foreach($data as $v):?>
        <tr>
            <td><?=$v['id']?></td>
            <td><?=$v['name']?></td>
            <td><?=$v['sex']?></td>
            <td><?=$v['city']?></td>
            <td><?=$v['dname']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>


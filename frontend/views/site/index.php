<?php

/* @var $this yii\web\View */
/* @var $Rvalues array */


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <table class="table table-striped table-bordered table-condensed table-hover">
            <?php
            foreach ($Rvalues as $rKey => $rValue) {
                echo '<tr>';
                echo "<td><h4>$rKey</h4> </td>";
                echo "<td><h4> $rValue </h4> </td>";
                echo '</tr>';
            }
            ?></table>

    </div>

</div>

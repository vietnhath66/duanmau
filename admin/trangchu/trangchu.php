<div class="col-md-8">
    <canvas id="myChart"></canvas>
    <canvas class="mt-5" id="myChart2"></canvas>
</div>

<?php
    $trung = countSP();
    $trung1 = countDM();
    $trung2 = countTK();
?>

<script>
    var trungcon =[
        <?php echo $trung;?>,
        <?php echo 1;?>,
        <?php echo 1;?>,
        <?php echo 1;?>
    ]
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <div class="row">
            <div class="frmtile">
                <h2>Thống kê theo danh mục</h2>
            </div>
                <div class="frmcontent">
                    <div class="mb frmdsloai">
                </div>
            </div>
        </div>
        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    foreach ($loadthongke_dm as $thongke) {
                        extract($thongke);
                        echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "],";
                    }
                    
                    ?>
                ]);
                // Set Options
                const options = {
                    title: '', 'width':700, 'height':700,
                    is3D: true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script> 
</div>
</body>
</html>
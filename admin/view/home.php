<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:1200px;"></canvas>
<style>
    #myChart {
        padding-left: 50px;
        padding-top: 10px;
    }
</style>
<script>
var xValues = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5","Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10","Tháng 11", "Tháng 12"];
var yValues = [55, 49, 44, 24, 15, 11, 3, 32, 9, 14, 23, 33];
var barColors = ["red", "green","blue","orange","brown","black", "yellow", "pink", "aqua","#708090", "#FFA07A", "#32CD32"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Thống kê đơn hàng năm 2023"
    }
  }
});
</script>

</body>
</html>
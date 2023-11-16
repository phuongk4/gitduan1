<?php
$thongtindanhsach=[
    [
        "sohieuchuyenbay"=> "VN001",
        "thoigiandi"=> "2022-03-03 12:00:00",
        "thoigianden"=> "2022-03-03 14:00:00",
        "noidi"=>"Quy Nhơn",
        "tonghanhkhach"=> "100",
        "noiden"=>"TPHCM",
    ],
    [
        "sohieuchuyenbay"=> "VN002",
        "thoigiandi"=> "2022-03-04 17:00:00",
        "thoigianden"=> "2022-03-04 19:00:00",
        "tonghanhkhach"=> "60",
        "noidi"=>"Hà Nội",
        "noiden"=>"Đà lạt",

    ],
    [
        "sohieuchuyenbay"=> "VN003",
        "thoigiandi"=> "2022-03-04 19:00:00",
        "thoigianden"=> "2022-03-04 21:00:00",
        "tonghanhkhach"=> "50",
        "noidi"=>"Hải phòng",
        "noiden"=>"Huế",
    ],
];
if (isset($_POST['sohieuchuyenbay']) && isset($_POST['thoigianden']) && isset($_POST['thoigiandi'])) {
    $sohieuchuyenbay = $_POST['sohieuchuyenbay'];
    $thoigiandi = strtotime($_POST['thoigiandi']);
    $thoigianden = strtotime($_POST['thoigianden']);
    foreach ($thongtindanhsach as $thongtin ){
        $thoigiandicb=strtotime($thongtin['thoigiandi']);
        $thoigiandencb=strtotime($thongtin['thoigianden']);
        if ( $sohieuchuyenbay==$thongtin['sohieuchuyenbay']){
            echo "<table border='1'>";
            echo "<tr>
                  <th>Số hiệu chuyến bay</th>
                  <th>Thời gian đi</th>
                  <th>Thời gian đến</th>
                  <th>Nơi đi</th>
                  <th>Nơi đến</th>
                  <th>Tổng hành khách</th>
                  <th>Trạng thái</th>
                  </tr>";
            if ($thoigiandi<$thoigiandicb && $thoigianden<$thoigiandicb){
                echo "<tr style='background: darkblue'>";
                echo "<td>". $thongtin['sohieuchuyenbay']."<br>"."</td>";
                echo "<td>" .$thongtin['thoigiandi']."<br>" ."</td>";
                echo "<td>".$thongtin['thoigianden']."<br>";"</td>";
                echo "<td>".$thongtin['noidi']."<br>";"</td>";
                echo "<td>".$thongtin['noiden']."<br>";"</td>";
                echo "<td>".$thongtin['tonghanhkhach']."<br>";"</td>";
                echo "<td>"."Chưa bay"."</td>";
                echo "</tr>";
            } elseif ($thoigiandi>$thoigiandencb && $thoigianden>$thoigiandencb){
                echo "<tr style='background: red'>";
                echo "<td>". $thongtin['sohieuchuyenbay']."<br>"."</td>";
                echo "<td>" .$thongtin['thoigiandi']."<br>" ."</td>";
                echo "<td>".$thongtin['thoigianden']."<br>";"</td>";
                echo "<td>".$thongtin['noidi']."<br>";"</td>";
                echo "<td>".$thongtin['noiden']."<br>";"</td>";
                echo "<td>".$thongtin['tonghanhkhach']."<br>";"</td>";
                echo "<td>"."Đã bay"."</td>";
                echo "</tr>";
            }else{
                echo "<tr style='background: yellow'>";
                echo "<td>".$thongtin['sohieuchuyenbay']."<br>"."</td>";
                echo "<td>" .$thongtin['thoigiandi']."<br>" ."</td>";
                echo "<td>" .$thongtin['thoigianden']."<br>" ."</td>";
                echo "<td>".$thongtin['noidi']."<br>";"</td>";
                echo "<td>".$thongtin['noiden']."<br>";"</td>";
                echo "<td>".$thongtin['tonghanhkhach']."<br>";"</td>";
                echo "<td>"."Đang bay"."</td>";
                echo "</tr>";
            }
        }
    }
}
?>


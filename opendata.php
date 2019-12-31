<?php
//初始化curl
$curl = curl_init();

//設定發出請求的瀏覽器
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

//設定https憑證,不做驗證
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

//設定跟隨重新導向
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// 重新導向時自動設定訪客來源 referer
curl_setopt($curl, CURLOPT_AUTOREFERER, true);

//將回傳資料寫入變數，而不是直接輸出
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_URL, "https://data.ntpc.gov.tw/api/v1/rest/datastore/382000000A-000119-001");

$data = curl_exec($curl);

curl_close($curl);

//將JSON文字轉為可使用的陣列
//true 轉陣列，false 轉物件
$json = json_decode($data, true);


?>
<?php
foreach ($json["result"]["records"] as $j) {
?>
    <tr>
        <td class="align-middle font-weight-bold" data-th="名稱"><?= $j['title'] ?></td>
        <td class="align-middle" data-th="特色"><?= $j['features'] ?></td>
        <td class="align-middle" data-th="電話"><?= $j['tel'] ?></td>
        <td class="align-middle" data-th="地址"><?= $j['address'] ?></td>
        <td class="align-middle">
            <button data-x="<?=$j['wgs84aX']?>" data-y="<?=$j['wgs84aY']?>" class="btn btn-outline-info btn-sm">
                <i class="fas fa-info-circle"></i>詳細資料
            </button>
        </td>
    </tr>
<?php
}
?>

<?php

$statusChange = '{"msgId":"uUp82ZYH","msgType":"serviceDeviceStatusChange","deviceId":"9762183844642","timestamp":1624999542861,"data":{"status":"close"}}';

$robotPower = '{"msgId":"fdRpBh89","msgType":"notifyRobotPower","robotId":"d4124386fdb6","groupId":"C5X2uUYQSi6pMVOZ_0_5836","deviceId":"9762183844642","timestamp":1624999599171,"data":{"chargeStage":"Charging","power":15}}';

$robotPose = '{"msgId":"6uQDX0qG","msgType":"notifyRobotPose","robotId":"d41243af477c","groupId":"C5X2uUYQSi6pMVOZ_0_5836","deviceId":"9762183844642","timestamp":1625001349458,"data":{"x":1.3146012305686143,"angle":-1.4916640486396557,"y":0.8175388702607096}}';

$delivaryTask = '{"msgId":"q4MxUSo1","msgType":"notifyDeliveryTask","robotId":"d41243af477c","groupId":"C5X2uUYQSi6pMVOZ_0_5836","deviceId":"9762183844642","timestamp":1625000304337,"data":{"trays":[{"destinations":[{"estimatedTime":3000,"destination":"mesa03","type":"manual","spendTime":118681,"status":"Arrived"}]},{"destinations":[{"estimatedTime":1083,"destination":"mesa01","completeType":"MANUAL","type":"manual","spendTime":5921,"status":"Complete"}]},{"destinations":[{"estimatedTime":4166,"destination":"Base","completeType":"MANUAL","type":"manual","spendTime":34461,"status":"Complete"}]},{"destinations":[]},{"destinations":[]}],"deliveryMode":"General"}}';

$response = [
  "code" => 1,
  'data' => $delivaryTask
];

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
echo json_encode($response);

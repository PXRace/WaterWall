<?php 
	// 读取json文件  string
	$jsonStr = file_get_contents("info/data.json");
	// 转化为 php数组 array
	$totalArr = json_decode($jsonStr);
	// 从数组中 随机获取 10个值 返回的 是一个 随机key 数组
	$randKeys = array_rand($totalArr,10);
	// print_r($randKeys);
	

	// 准备一个新的数组 php中的数组 长度 是可变的
	$newArr = array();
	// 使用 随机的key  去取 随机的值 count(数组) 可以获取 php中数组的长度
	// count(var)为php中获取数组的长度
	for ($i=0; $i <count($randKeys) ; $i++) {
		// 获取 索引数组中的 每一个key
		$key = $randKeys[$i];
		// 使用 key 从 总数组中 获取 key对应的值 对象
		$obj = $totalArr[$key];
		// 丢到一个 新的数组中
		$newArr[$i]=$obj;
	}
	// 测试结果
	// print_r($newArr);
	
	// 将这10个值 转化为 json 格式字符串 发回给浏览器
	echo json_encode($newArr);
 ?>
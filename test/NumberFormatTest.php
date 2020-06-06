<?php
/**
 * 数字格式化测试类
 * @author XinLiang
 */

namespace test;
require "vendor/autoload.php";
use youpinjie\NumberFormat;

$number = '102400010';
echo NumberFormat::byte_format($number);

//输出：97.7 MB
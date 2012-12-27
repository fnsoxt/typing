<?php
$str = <<<EOF
如果指定了可选的 split_length 参数，返回数组中的每个元素均为一个长度为 split_length 的字符块，否则每个字符块为单个字符。

如果 split_length 小于 1，返回 FALSE。如果 split_length 参数超过了 string 超过了字符串 string 的长度，整个字符串将作为数组仅有的一个元素返回。
EOF;
$ar = mb_str_split($str);
echo json_encode($ar);







function mb_str_split( $string ){
    return preg_split('/(?<!^)(?!$)/u', $string );
}

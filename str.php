<?php
$str = <<<EOF
EOF;
$ar = mb_str_split($str);
echo json_encode(['test' => $ar], JSON_UNESCAPED_UNICODE);

function mb_str_split( $string ){
    return preg_split('/(?<!^)(?!$)/u', $string );
}

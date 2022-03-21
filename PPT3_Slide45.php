<?php
$z = ' handal';

function a(){
    $a = 'saya';
    function b($a){
        $b = ' programmer';
        function c($b, $a){
            $c = ' web';
            global $z;
            echo $a, $b, $c, $z;
        }
        c($b, $a);
    }
    b($a);
}
a();
?>
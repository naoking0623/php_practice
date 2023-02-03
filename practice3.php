<?php
$neme = "なおき";

if ($neme == "なおき") {
echo "私は あなたの名前 です" ;
} else {
echo  "あなたの名前ではありません。";
 }

echo "課題2";
echo"\n";
for($i = 1; $i < 10001; $i++){
    echo $i;
｝

$fruits = array("りんご","ばなな","みかん","キューイ","さくらんぼ","メロン" );
foreach($fruits as $fruits){
    echo "要素は". $fruits;
    echo "\n";
}


$strat = 1;
$end = 100;
for($i = $strat; $i <= $end; $i++){
    if($i % 5 == 0 ){
        echo $i,"\n";
    }
}

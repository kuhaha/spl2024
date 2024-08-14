<?php
require_once("models/User.php");

echo '<h2 class="bg-warning text-primary">アカウント一覧</h2>';
echo '<table class="table table-hover">', PHP_EOL;

$fields = ['uid'=>'ユーザID', 'uname'=>'ユーザ名', 'urole'=>'種別'];
$t_fileds = array_map(fn($item) =>'<th>'.$item.'</th>', array_values($fields));
echo '<tr>', implode('', $t_fileds), '</tr>', PHP_EOL; 

$users = (new User())->getList();
foreach ($users as $user) {
    $t_fileds = array_map(fn($field) =>'<td>'.$user[$field].'</td>', array_keys($fields));
    echo "<tr>", implode('', $t_fileds), "</tr>", PHP_EOL;
}
echo '</table>';
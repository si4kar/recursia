<?php

$arr = ['a' => ['one', 'two', 'three'],
    'b' => ['four', 'five', 'six'],
    'c' => ['seven', 'eight', 'nine',
        'ten' => [1,2,
            3 => ['q', 'w', 'e']]]];

echo '<pre>';
print_r($arr);
echo '<br><br><br><br>';

function pr_r ($array)
{
    static $step =1;
    $string = '';
    $tab = '    ';
    $sep = str_repeat ($tab, $step);
    $sep2 = str_repeat($tab, $step+1);
    $level = false;
    static $p ='Array' . PHP_EOL . '(' . PHP_EOL;
  if (is_array($array)) {
      $string .= $p;
      $p = '';
  }
      foreach ($array as $k => $v) {
          $string .= $sep . '[' . $k . ']' . ' => ' . $v . PHP_EOL;
          if (is_array($v)) {
              if ($level === false) {
                  $step += 2;
                  $level = true;
                 }
              $string .= $sep2 . '(' . PHP_EOL;
              $string .= pr_r($v);
              $string .= $sep2 . ')' . PHP_EOL . PHP_EOL;

          }

      }

    return $string;
}
echo pr_r($arr);

echo '</pre>';
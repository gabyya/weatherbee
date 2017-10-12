<?php
  require_once 'app/key.php';
  require_once 'app/forecast.php';

  if( isset($_POST['submit']) && !empty($_POST['location'])){
    require_once 'views/results.php';
  } else {
    require_once 'views/home.php';
  }
?>

<?php
  $things = array(
    $hot = array(
      '<a data-pin-do="embedPin" data-pin-width="large" href="https://www.pinterest.com/pin/398779741996018653/"></a>',
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/YJ3qcTNtcFg" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/iIY3wA6yE_M" frameborder="0" allowfullscreen></iframe>',
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/vHDtNBh6aHs" frameborder="0" allowfullscreen></iframe>',
      'test'
    ),
    $cold = array(
      'cold 1',
      'cold 2',
      'cold 3',
      'cold 4',
      'cold 5'
    )
  );

  $temp = 32;

  if($temp > 80){
    echo $things[0][rand(0, 4)];
  } else {
     echo $things[1][rand(0, 4)];
  }


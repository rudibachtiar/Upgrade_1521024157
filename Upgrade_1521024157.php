<html>
<head> <title>Upgrade Nilai UTS(Rudi Bachtiar)</title>
</head>
<body>
<table border='1'>
  <tr>
    <th rowspan="2">INPUT</th>
    <th colspan="5">OUTPUT</th>
  </tr>
  <tr>
    <th>A</th>
    <th>E</th>
    <th>I</th>
    <th>U</th>
    <th>O</th>
  </tr>
  <tr>
    <td>
     <?php 
      $n="RUDI BACHTIAR";
      echo $n;
     ?>
    </td>
    <td>
     <?php 
      $a = substr_count($n,"A");
      echo $a;
     ?>
    </td>
    <td>
     <?php 
      $e = substr_count($n,"E");
      echo $e;     
      ?>
    </td>
    <td>
     <?php 
      $i = substr_count($n,"I");
      echo $i;
     ?>
    </td>
    <td>
     <?php 
       $u = substr_count($n,"U");
      echo $u;
     ?>
    </td>
    <td>
     <?php 
      $o = substr_count($n,"O");
      echo $o;
     ?>
    </td>
  </tr>
</table>
</body>
</html>

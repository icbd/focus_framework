<html>
<head>
    <title>junior1</title>
    
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="bookmark" href="/favicon.ico"/>
</head>

<body>

<h3>北京时间::<?php echo $now; ?></h3>
<table>
    <tr>
        <th>key</th>
        <th>value</th>
    </tr>

    <?php
    foreach ($keys as $k) {
        echo "<tr>";
        echo "<td>{$k}</td>";
        echo "<td>{$redis->get($k)}</td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
<html>
    <head>
        <meta  charset="utf-8">
        <link rel="stylesheet" href="multi.css">
        
        <h1>ตารางสูตรคูณ</h1>
        
    </head>
    <body>
    <div class = "box"></div>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <input type="number" name="number">
        <input type="submit" value="แสดงแม่สูตรคูณ">
    </form>
    <p>
    <?php
    isset( $_POST['number'] ) ? $number = $_POST['number'] : $number = "";
    if( !empty( $number ) ) {
        for( $i=1; $i<=24; $i++ ) {
            echo "<br/>{$number} x {$i} = ".( $number * $i );
        }
    }
    ?>
    </p>
    </body>
</html>
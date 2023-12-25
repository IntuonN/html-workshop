<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/mystyle/multistyle.css">
    <title>Multiplication Table</title>

    <h1>ตารางสูตรคูณ</h1>

</head>
<body>
 <div class = "box"></div>
    <form action="/multi" method="POST">
        @csrf
        <input type="number" name="number">
        {{-- <button type="submit">แสดงแม่สูตรคูณ</button> --}}
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

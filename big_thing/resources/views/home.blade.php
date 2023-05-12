<?php
 #die("this is php logic");
 $project_name = 'Simple<br>project';
?>
<!DOCTYpe html>
<html lang="en" >
    <head>
        <title>Home page</title>
</head>
<body>
    <!-- adding a variable with html in it from the phplogic into the html-->
<h1>Welcome to <b>{!! $project_name !!}</b></h1>
<p>Welcome to home of this project!</p>
<p><b>NAME:</b>{{ $name }} and <b>sex</b> is {{ $sex }}</p>
<?php print_r($colors) ?>
@if (1>2)
    <p>One is less than two</p>
           
 @else
        <p>One is not greater than two</p>
   
@endif
@foreach ($colors as $color)
    <p>{{ $color}} </p>
@endforeach
@for ($i = 0; $i < 100; $i++)
    <p>{{$i}}</p>
@endfor

</body>
</html>
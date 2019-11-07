<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Contact</title>
</head>
<body>
<h3>From {{$name}}</h3>
<h4>Contact Person: {{$contact_person}}</h4>
<h4>Address: {{$address}}</h4>
<h4>Contact Number: {{$telephone}}</h4>
<h4>Contact Mail: {{$email}}</h4>

@if($fax)
<h4>Fax: {{$fax}}</h4>
@endif
   {{ $content }} 
</body>
</html>
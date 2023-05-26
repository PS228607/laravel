<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Week1css/InfoBordeel.css">
    <title>Bordeel</title>
</head>
<body>
    <div>
        <h1>dit is een Infobordeelpagina</h1>
        <h3>dLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu purus vel metus bibendum vestibulum. Aliquam eu dapibus nunc, ut convallis magna. Etiam augue metus, varius non sapien non, mattis vestibulum ipsum. Nam faucibus urna ut congue vehicula. Aenean nec diam neque. Fusce non metus nec leo tincidunt lacinia sed quis magna. In urna sapien, tincidunt ac cursus quis, dignissim a ipsum. Nullam bibendum at diam ut laoreet. Pellentesque tristique fringilla tortor, eu elementum massa. Praesent scelerisque justo varius ligula elementum vulputate in et nisi. Maecenas consectetur placerat justo. Integer sed lacus risus. Curabitur ornare nisl vitae augue imperdiet rutrum. Pellentesque ornare interdum orci eget suscipit. Suspendisse porta pellentesque justo eu faucibus. Morbi non enim non tortor auctor dapibus ut et purus.</h3>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu purus vel metus bibendum vestibulum. Aliquam eu dapibus nunc, ut convallis magna. Etiam augue metus, varius non sapien non, mattis vestibulum ipsum. Nam faucibus urna ut congue vehicula. Aenean nec diam neque. Fusce non metus nec leo tincidunt lacinia sed quis magna. In urna sapien, tincidunt ac cursus quis, dignissim a ipsum. Nullam bibendum at diam ut laoreet. Pellentesque tristique fringilla tortor, eu elementum massa. Praesent scelerisque justo varius ligula elementum vulputate in et nisi. Maecenas consectetur placerat justo. Integer sed lacus risus. Curabitur ornare nisl vitae augue imperdiet rutrum. Pellentesque ornare interdum orci eget suscipit. Suspendisse porta pellentesque justo eu faucibus. Morbi non enim non tortor auctor dapibus ut et purus.</h6>
        <h2>Hier komt alle informatie van het Bordeel</h2>
    </div>

    @if ($ID == 1)
        Bordeel 1 werkt
    @elseif ($ID > 1)
        Bordeel 2 werkt
    @else
        Bordeel werkt niet
    @endif
</body>
</html>
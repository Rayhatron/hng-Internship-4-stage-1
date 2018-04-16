<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HNG Intership Stage 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/2d1c7583b1.css" media="all" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul class="topnav" id="myTopnav">
                <li>
                    <a href="#">HNG Intership 4 Stage 1</a>
                </li>
                <li class="icon">
                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </li>
            </ul>
        </nav>
        <div class="time">
            <p><?php echo date("H:i", time()); ?></p>
        </div>
    </header>
    <section class="todo">
        <nav class="todo-controller">
            <input type="button" value="+" class="btnNewItem">
            <h3>Todo</h3>
            <input type="button" value="-" class="btnDeleteItem">
        </nav>
        <ul class="items">
            <li class="item">
                <input type="checkbox" name="item-1" class="item-1">
                <p>Set up Slack profile</p>
            </li>
            <li class="item">
                <input type="checkbox" name="item-2" class="item-2">
                <p>Design this in Figma</p>
            </li>
            <li class="item">
                <input type="checkbox" name="item-3" class="item-3">
                <p>Bring it to life</p>
            </li>
            <li class="item">
                <input type="checkbox" name="item-4" class="item-4">
                <p>Submit a screenshot</p>
            </li>
            <li class="item">
                <input type="checkbox" name="item-5" class="item-5">
                <p>Watch Iron Man 3</p>
            </li>
        </ul>
    </section>
    <footer>
        <p>Made by Rayhatron</p>
    </footer>
</body>
</html>
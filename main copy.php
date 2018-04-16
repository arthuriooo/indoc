<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>INDOC</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href='./imports/normalize.css'>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script type='text/javascript' src='./imports/jquery-3.1.1.js'></script>
        <script type="text/javascript" src="./imports/jquery-css-transform.js"></script>
        <script type="text/javascript" src="./imports/jquery-animate-css-rotate-scale.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src='./imports/jquery.ui.touch-punch.js'></script>

        <link rel="stylesheet" type="text/css" href='./contentStyle.css'>
        <script type="text/javascript" src='./main_script.js'></script>
        <script type="text/javascript" src='./form_script.js'></script>
    </head>
    <body>
        
        <div id="whole">
            <!-- ГЛАВНЫЕ ЭЛЕМЕНТЫ -->
            <div id="mainPage">
                <div id="back">
                    <img id='backImg' src="./back.png">
                </div>
                <div id="gradientBack">
                    <div id="samGradient"></div>
                </div>
                <!-- верхнее меню -->
                <div id="menu">
                    <img id="messageBtn" src="./message.png"></img>
                    <div id="center">
                        <p id='centerLogo'>INDOC</p>
                        <p id="currentPage"></p>
                    </div>
                    <img id="profileBtn" src='./profile.png'></img>
                </div>
                <!-- основной контент -->
                <div id="content">
                    
                </div>
                <!-- поиск -->
                <div id="search">
                    <div id="searchButton">
                        <img id="searchBtn" src="./search2.png"></img>
                    </div>
                    <div id="searchPanel"></div>
                </div>
            </div>
            <!-- БОКОВЫЕ ПАНЕЛИ -->
            <!-- сообщения -->
            <div id="messages">
                <p id="messagesLogo">СООБЩЕНИЯ</p>
                <div id="noMes">
                    <p id="noMessages">У Вас пока нет сообщений<br/>Найдите врача, чтобы начать с ним диалог</p>
                    <p id="findDocInMes">НАЙТИ ВРАЧА</p>
                </div>

            </div>
            <!-- профиль -->
            <div id="profile">
                <p id="profileLogo">ПРОФИЛЬ</p>
                <img id="profilePhoto" src='./profileMain.png'></img>
                <p id="name">Артур<br/>Игнатьев</p>
                <div id="noProf">
                    <p id="noProfile">Профиль еще не заполнен</p>
                    <p id="fillTheProfile">ЗАПОЛНИТЬ ПРОФИЛЬ</p>
                </div>
            </div>
        </div>
    </body>
</html>
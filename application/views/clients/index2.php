<html>
<head>
    <style>
        #search {
            background-color: lightyellow;
            outline: medium none;
            padding: 8px;
            width: 300px;
            border-radius: 2px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: 2px solid orange;
        }

        ul {
            width: 300px;
            margin: 0px;
            padding-left: 0px;
        }

        ul li {
            list-style: none;
            background-color: lightgray;
            margin: 1px;
            padding: 1px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }
    </style>

    <script type="text/javascript" src="<?php echo $this->config->item('public'); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('public'); ?>js/json2.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('public'); ?>js/customAJAX.js"></script>

</head>
<body>
<div id="container">
    <p>Note:- Please start typing surname as "Chavan", "Patil"</p>
    <input type="text" name="search" id="search" />
    <ul id="finalResult"></ul>
</div>
</body>
</html>
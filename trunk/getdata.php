<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>


        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">


        $(document).ready(function()
            {
                $("#get").click(function()
                {
                                        var name = $("#name").val();
                    $('#1').load("getdata.php?name=" +name);
                });
            });
        </script>
    </head>
    <body>
         NAME : <input type="textbox" id="name" >
         <button id="get">Get Name Data</button> 
         <div id="1" name='divku'></div>
    </body>
</html>
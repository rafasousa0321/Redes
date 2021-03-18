<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Classes IP</title>
    </head>
    <body>
        <h1>Classes IP</h1>
        <h3>Digite o Endereço IP que pretende verificar</h3>
        <form action="processar_ip.php">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <input type="submit" value="Enviar">
        </form>
        <br>
        <br>
	    <h1>Protocolos</h1>
	    <h3>Selecione o protocolo</h3>
	    <form action="processar_protocolo.php">
  		    <select name="protocolo" id="cars">
		        <option value="dns">DNS</option>
		        <option value="ftp">FTP</option>
		        <option value="http">HTTP</option>
		        <option value="ip">IP</option>
  		    </select>
  		    <br><br>
  		    <input type="submit" value="Enviar">
	    </form>
    </body>
</html>
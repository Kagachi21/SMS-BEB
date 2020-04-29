<html>
<head>
    <style>
         input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
        body {
            background-image: url(1.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        p {
            color:white;
        }


    </style>
</head>
<body>
    <form method="post" action="proses.php">
     <p>
        <img src="Untitled2.PNG"
             style="float:left;width:130px;height:100px;">
    <p><strong><font color="white">SMS BEB</font></strong></p>
    <p><strong>SISTEM MONITORING SEKOLAH</strong></p>
    <p><strong>Berbasis Web</strong></p>


<div id="box1">
    <style>
        table, th, td {
            bolder: 1px solid white;
            bolder-collapse: collapse:
        }

        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>

    <h2 align="center"><font color="white">Admin Catatan BK</font></h2>
        <table width="40%" border="0" align="center" cellpadding="0">
            <tr>
                <td width="33%"><font color="white">Tanggal</font></td>
                <td width="3%"><font color="white">:</font></td>
                <td><input type="date" name="tgl" required></td>
            </tr>

            <tr>
                <td width="33%"><font color="white">NIS</font></td>
                <td width="3%"><font color="white">:</font></td>
                <td width="64%"><input name="nis" type="text" id="txtNIS"></input></td>
            </tr>

            <tr>
                <td><font color="white">Kasus</font></td>
                <td><font color="white">:</font></td>
                <td>
                    <select name="kasus" id="cboJob">
                        <option>Narkoba</option>
                        <option>Merokok</option>
                        <option>Pacaran</option>
                        <option>Hamil</option>
                        <option>Bolos </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><font color="white">Deskripsi</font></td>
                <td><font color="white">:</font></td>
                <td>
                    <textarea name="deskripsi" rows="5" cols="30"></textarea>
                </td>
            </tr>

            <tr>
                <td width="15%"><font color="white">Point</font></td>
                <td width="3%"><font color="white">:</font></td>
                <td width="64%"><input name="point" type="text" id="txtPoint"></input></td>
            </tr>


            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                        <input name="btnSubmit" type="Submit" id="btnSubmit"
                        value="Submit"> </input>
                    <input name="btnEdit" type="submit" id="Edit"
                           value="Edit"> </input>

                </td>
            </tr>

        </table>
      </div>
    </form>
  </body>
</html>

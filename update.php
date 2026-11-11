<!DOCTYPE html>
<html>
<head>
    <title>NI</title>
    <head>
        <body>

        <h2>hd </h2>
        <br/>
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>EDIT</h3>
            <form method= "post" action="update.php">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                         </td>
                          </tr>
                            <tr>
                   <td><input type="number" name="nama" value="<?php echo $d['nama']; ?>"></td>
                 </tr>
               <tr>
             <td>Alamat</td>
               </td>
                 </tr>
                   <tr>
                   <td><input type="number" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                  <tr>
                    <tr>
                     <td></td>
                         <td><input type ="submit" value= "SIMPAN"></td>
                           </tr>
                            </table>
                    </form>
                 <?php
        ?>
        </body>
        </html>
        


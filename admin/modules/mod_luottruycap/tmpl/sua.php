
<form action="index.php?page=luottruycap" method="post" name="form">
  <table cellpadding='1' cellspacing='1' width='100%'>
    <tr>
      <td colspan='6' align='center' class='title'><b>Thống kê lượt truy cập</b></td>
    </tr>
    <tr align=center>
      <td class='title'>Đang online</td>
      <td class='title'>Lượt truy cập</td>
    </tr>

    <tr align='center' class="trOdd" >
      <td class="trOdd" ><?php echo $online;?></td>
      <td class="trOdd" ><?php echo $luottruycap;?></td>
    </tr>
 
    
  </table>
</form>

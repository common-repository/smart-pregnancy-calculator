<form method="post" action="" autocomplete="off">
<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" id="main-WPBOX-manage-sheet-page">

<?php echo file_get_contents("https://wppluginbox.com/wpbox-announcements/index.php"); ?>

<h1 id="update-add-msg">Settings </h1>

<table style="width: 800px;">   
   <tr>
      <td>Show title <i class="fas fa-question-circle" title="Show detailed summary below bar chart"></i></td>
      <td><select type="text" class="khyzer" name="sofb_show_summary" id="sofb_show_summary" required>
         <option value="1">Yes</option>
         <option value="0">No</option>
      </select></td>
   </tr>

   
<tr style="height:20px;"><td colspan="2"></td></tr>
<tr><td colspan="2"><h1>Design Customization </h1></td></tr>

   <tr>
      <td>Set Theme Color <i class="fas fa-question-circle" title="This will effect input borders color & button color."></i></td>
      <td>
         <input type="text" class="khyzer color" name="sofb_theme_color" id="sofb_theme_color" value="#efa41c" style="width:100%;max-width:230px;" required>
         <input class="khyzer color-code" id="display-sofb_theme_color" readonly>
      </td>
   </tr>

   <tr>
      <td>Apply Shadow to form Area <i class="fas fa-question-circle" title="Use Shadow for calculator area. <br><br> If you don't need shadow, set this to 'No'"></i></td>
      <td><select type="text" class="khyzer" name="sofb_calc_shadow" id="sofb_calc_shadow" required>
         <option value="1">Yes</option>
         <option value="0">No</option>
      </select></td>
   </tr>

    <tr>
      <td>Form Width <i class="fas fa-question-circle" title="Choose width of Calculator area on your webpage. <br><br>Keep this default, if you don't want to change the calculator width on your webpage."></i></td>
      <td>
         <input type="text" class="khyzer" name="sofb_table-width" id="sofb_table-width" list="sofb_t-width" value="1199px" required>
         <datalist id="sofb_t-width">
            <option value="100%">100%</option>
            <option value="95%">95%</option>
            <option value="85%">85%</option>
            <option value="80%">80%</option>
            <option value="1500px">1500px</option>
            <option value="1200px">1200px</option>
         </datalist>
      </td>
   </tr>


</table>

<button type="submit" name="update-settings" value="1" id="update-settings" class="kzr-btn kzr-green" style="margin-top: 20px;display: none_;"> Update Settings</button>

</div>
</form>


<style type="text/css">
 .tooltip{
    background-color:black;
    color: white;
    font-size: 11px;
    border: 1px solid black;
    font-family: Century Gothic;
    border-radius: 4px;
    text-align: left;
  }

  .ui-widget.ui-widget-content {
    border: 1px solid #000000;
    text-align: left;
}

.ui-widget-shadow {
     -webkit-box-shadow: 0px 0px 0px #666666; 
     box-shadow: 0px 0px 0px #666666; 
}
</style>



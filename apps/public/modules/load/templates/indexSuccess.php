<div id="sf_admin_container">
<h2>Cargar archivo CSV</h2>
  <?php include_partial('global/flashes')?>
  <div id="sf_admin_content">
    <?php echo form_tag('load/index', 'multipart=true') ?>
    <table>
      <?php echo $form?>
      <tr>
        <td colspan="2">
          <input type="submit" value="Cargar archivo" onclick="return confirm('Continuar?')"/>
        </td>
      </tr>
    </table>
    </form>
  </div>
</div>

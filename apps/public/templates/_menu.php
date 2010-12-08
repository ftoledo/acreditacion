<script type="text/javascript">

  // initialise plugins
  jQuery(function(){
    jQuery('ul.sf-menu').superfish();
  });

</script>
<div id="menu">
<ul class="sf-menu">
  <li ><?php echo link_to("Inicio", "@homepage")?></li>
  <li ><a href="#">Utiles</a>
    <ul>
      <li><?php echo link_to("Load CSV","load/index")?></li>
    </ul>
  </li>
  <li ><?php echo link_to("Cerrar sesión", "@signout")?></li>
</ul> 
</div>
<br/><br/>
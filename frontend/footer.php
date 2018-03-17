    <script type="text/javascript">
jQuery(document).ready(function($){
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
  
  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index.php';
  }
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
});

</script>
<script type="text/javascript">
	
	$('#depa').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa1').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa2').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})

	$('#depa3').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa4').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa5').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa6').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa7').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa8').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa9').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa10').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa11').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa12').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})
	$('#depa13').click(function(e) {      
    location.href =  $(this).attr('data-href');
    e.preventDefault();

})	
</script>
</body>
<footer>
  <p class="temp-footer">Fundación Poma, impulsando el Progreso Social | Todos los derechos reservados 2017</p>
</footer>
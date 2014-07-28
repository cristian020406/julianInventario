

<script src="public/js/jquery-1.10.js"></script>
<script src="public/js/jquery.form.js"></script>
<script src="public/js/semantic.min.js"></script>
<script>
	$(document).on('ready',function  () {
		caja = $('#caja');
		mCargas = $('#montaC');

		caja.animate({width:'500px', height: '350px'}, 1500, function  () {
				$(this).animate({width:'450px', height: '300px'}, 1000);
		})
		mCargas.animate({width:'240px', height: '190px',opacity: 1}, 1500, function  () {
				$(this).animate({width:'250px', height: '200px'}, 1000,function  () {
					// $(this).css('transform','rotate(-45deg)',500);
					$(this).animate({
						left: '300px',
						transform: 'rotate(-45deg)'},
						2000, function() {
						/* stuff to do after animation is complete */
					});
				});
		})
		$('.field label').hide();
		$('.field').hide().slideDown(1500, function() {
			$('.field label').fadeIn(2000, function() {
				
			});
		});
	})
</script>
</body>
</html>
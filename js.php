<script type="text/javascript">
	// place your monkeys in this array
	var random_images_array = ['smile.gif', 'frown.gif', 'grim.gif', 'bomb.gif'];
    
	function getRandomImage(imgAr, path) {
    	path = path || 'images/'; // default path here
    	var num = Math.floor( Math.random() * imgAr.length );
    	var img = imgAr[ num ];
    	var imgStr = '<img src="' + path + img + '" alt = "">';
    	document.write(imgStr); document.close();
	}

</script>
	
<script type="text/javascript">

window.onload=function() {
  var E = document.getElementsByClassName("item");
  var m = E.length;
  var n = parseInt(Math.random()*m);
  for (var i=m-1;i>=0;i--) {
      var e = E[i];
      e.style.display='none';
  }
  E[n].style.display='';
}
</script>

<script type="text/javascript">
  function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

  $(document).ready(function(){
    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
  });

</script>


<script src="js/ScrollTrigger.min.js"></script>

<script src="js/ScrollTrigger.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
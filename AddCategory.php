 
<?php 

include_once('header.php');

?>
<input name=email type="text">
 <button>Add Category</button>
 
 <script>
$("button").click(function(){
  $.get("demo_test.asp",function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});
</script>
  
<?php 

include_once('footer.php');

?>
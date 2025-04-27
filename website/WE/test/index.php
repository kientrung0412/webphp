<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<script>
  $(document).ready(function(){
    $('.tim').click(function(){
      var txt = $('.txt').val();
      $.post('action.php', {data: txt}, function(data) {
        $('.thay').html(data);
        $(location).attr('href', 'view.php');
      });
    })
  })
</script>
<body>
  <form  method="get" accept-charset="utf-8">
    <button type="submit">sadghajshdj</button>
  </form>
 
</body>
</html>
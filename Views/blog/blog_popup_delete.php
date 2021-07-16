<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../../public/css/modaal.min.css">
</head>
<body>

  <a href="#modal" class="modal">Show</a>
  <div id="modal" style="display:none;">
    <div class="container">
      <div class="row">
        <div class="col">a</div>
      </div>
    </div>
  </div>

  <script src="../../public/js/jquery-3.5.1.js"></script>
  <script src="../../public/js/modaal.min.js"></script>
  <script>
  $(function(){
 $('.modal').modaal(
   
 );
});
</script>
</body>
</html>

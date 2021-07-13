<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../../public/js/animatedModal.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../../public/css/animate.min.css">
</head>
<body>
    <!--Call your modal-->
    <a id="demo01" href="#animatedModal">DEMO01</a>

    <!--DEMO01-->
    <div id="animatedModal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
        <div class="close-animatedModal">
            CLOSE MODAL
        </div>

        <div class="modal-content">
                  <!--Your modal content goes here-->
        </div>
    </div>
</body>
<script>
  $(function(){
 $("#demo01").animatedModal({
   modalTarget:'animatedModal',
   animatedIn: 'rotateInUpRight',
   animatedOut: 'flipOutY',
   animationDuration: '1s',
   color: '#DCDCDC',
   overflow: 'auto'
 });
});
</script>

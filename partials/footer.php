<script>
  //Danger zone, here take this shield to protect yourself: 🛡
  (function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
      titleScroller(text.substr(1) + text.substr(0, 1));
    }, 100);
  }(" GET YOUR NOBEL PRIZE WINNERS! "));
</script>
</body>
</html>

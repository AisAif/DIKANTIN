
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php if(isset($_GET['msg'])): ?>
        <div id="notif" style="position: fixed; bottom: 1em; right: 2em; padding: 0.4em; background-color: white; color: rgba(0, 0, 0, 0.9); box-shadow: 0px 2px 5px 1px rgba(0,0,0,0.75); -webkit-box-shadow: 0px 2px 5px 1px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 5px 1px rgba(0,0,0,0.75); border-radius: 4px;">
            <span>
                <?=$_GET['msg']?>
            </span>
            <span id="close_notif" style="border-left: 2px; border-color: black; border-style: solid; border-top: none; border-right: none; border-bottom: none; padding-left: 0.4em; padding-right: 0.1em; cursor: pointer; color: red;"> x </span>
        </div>
    <?php endif ?>
    <script>
        document.getElementById('close_notif').addEventListener('click', () => {
            document.getElementById('notif').style.display = "none";
        })
    </script>
</body>
</html>
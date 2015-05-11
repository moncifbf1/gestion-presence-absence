    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>></script>
    <script src=<?php echo base_url("assets/js/bootstrap.min.js"); ?>></script>
    <script>
        $(document).ready(function(){
            $('#AbsenceTable').dataTable();
        });
    </script>
</body>
</html>
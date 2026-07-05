
<script type ="text/javaScript">

    session('success')
        <script>
            toastr.success("{{ session('success') }}", "Success");
        </script>
    @endif

     session('info')
        <script>
            toastr.info("{{ session('info') }}", "Info");
        </script>
    @endif

    session('warning')
        <script>
            toastr.warning("{{ session('warning') }}", "Warning");
        </script>
    @endif

    session('error')
        <script>
            toastr.error("{{ session('error') }}", "Error");
        </script>
    @endif
</body>

</html>

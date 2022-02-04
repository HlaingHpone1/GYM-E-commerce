<!-- Footer End -->
    <script src="../../../js/bootstrap.js"></script>
	<script src="../../js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="../../js/datatables.min.js"></script>
	<script src="../../js/main.js"></script>


	<script type="text/javascript">
		var loader = document.getElementById("loader");
		window.addEventListener("load", function () {
			loader.style.display = "none";
		});
		let date = new Date();
		let utcyear = date.getUTCFullYear();
		document.getElementById("year").textContent = utcyear;
	
		
	</script>
</body>

</html>
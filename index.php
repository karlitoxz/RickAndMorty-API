<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rick and Morty</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
	<div class="container">
		<!-- Default box -->
			<div class="card mt-2">
				<div class="card-header">
					<span id="id"></span><h3 class="card-title" id="name"></h3>
					<img src="" alt="" class="rounded-circle" id="image">
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
							<i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
							<i class="fas fa-times"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<div id="gender"></div>
					<div id="species"></div>
					<div id="status"></div>
					<hr>
					<h5>Episodios</h5>
					<div id="episode"></div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					URL: <span class="mb-2" id="url"></span>
				</div>
				<!-- /.card-footer-->
			</div>
		<!-- /.card -->
	</div>
</body>
</html>
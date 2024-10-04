<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel - Toy Store</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">

</head>

<body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="text-center p-3 navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Toy Store</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-nav">
			<div class="nav-item text-nowrap button bg-primary rounded m-2">
				<a class="nav-link px-3" href="#">Sign out</a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
				<div class="position-sticky pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-light bg-dark active" aria-current="page" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true">
									<circle cx="9" cy="21" r="1"></circle>
									<circle cx="20" cy="21" r="1"></circle>
									<path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
								</svg>
								Products
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Dashboard</h1>
				</div>

				<!-- Add Toy Form -->
				<h2>Add a Toy</h2>
				<form method="POST" 	action="index.php">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="toyName" class="form-label">Toy Name</label>
							<input type="text" class="form-control" id="toyName" name="toyName" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="quantityAvailable" class="form-label">Quantity Available</label>
							<input type="number" class="form-control" id="quantityAvailable" name="quantityAvailable" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="toyDescription" class="form-label">Toy Description</label>
							<textarea class="form-control" id="toyDescription" name="toyDescription"></textarea>
						</div>
						<div class="col-md-6 mb-3">
							<label for="price" class="form-label">Price</label>
							<input type="text" class="form-control" id="price" name="price" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="productAddedBy" class="form-label">Added By</label>
							<input type="text" class="form-control" id="productAddedBy" name="productAddedBy" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="visibility" class="form-label">Visibility</label>
							<select class="form-select" id="visibility" name="visibility">
								<option value="visible">Visible</option>
								<option value="hidden">Hidden</option>
							</select>
						</div>
						<div class="col-md-6 mb-3 d-flex align-items-end">
							<button type="submit" name="addToy" class="btn btn-primary">Add Toy</button>
						</div>
					</div>
				</form>

				<h2>Section title</h2>
				<div class="table-responsive">
					<table class="table table-striped table-sm">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Header</th>
								<th scope="col">Header</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1,001</td>
								<td>random</td>
							</tr>
							<tr>
								<td>1,002</td>
								<td>placeholder</td>
							</tr>
						</tbody>
					</table>
				</div>
			</main>


		</div>
	</div>
</body>

</html>
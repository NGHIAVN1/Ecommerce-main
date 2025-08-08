<?php
include 'config.php';
include 'lib/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   

</script>
</head>
<body>
  <div class="grid-container" id="grid-container-sidebar" >
    <header>
      <nav>
        <?php include 'nav.php'; ?>
      </nav>
    </header>
	<aside>
    <?php include 'sidebar.php'; ?>
	</aside>
    <main> 
      <div class="container">
        <h4>Dashboard</h4>
      </div>       
      <!-- <div class="row">
        <div class="col-12 col-sm-6 col-xxl-3 d-flex "> 
          <div class="card illustration flex-fill">
            <div class="card-body p-0 d-flex flex-fill ">
              <div class="row g-0 w-100">
                <div class="col-6">
                  <div class="p-3 m-1">
                    <h4>Welcome Back, Chris!</h4>
                    <p class="mb-0">AppStack Dashboard</p>
                  </div>
                </div>
                <div class="col-6 align-self-end">
                  <img src="img/customer-support.png" class="img-fluid" alt="Illustration">
                </div>
            </div>
            </div>

          </div>
        </div>
      
        <div class="col-12 col-sm-6 col-xxl-3 d-flex ">
          <div class="card flex-fill">
            <div class="card-body align-items-start">
              <div class="flex-grow-1">
                sdfsd
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xxl-3 d-flex ">
          <div class="card flex-fill">
            sdfsa
          </div>
        </div>

        <div class="col-12 col-sm-6 col-xxl-3 d-flex ">
          <div class="card flex-fill">
            fdsadsafas
          </div>
        </div>
      </div> -->
    <div class="row">
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card illustration flex-fill">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row g-0 w-100">
										<div class="col-6">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text">Welcome Back, Chris!</h4>
												<p class="mb-0">AppStack Dashboard</p>
											</div>
										</div>
										<div class="col-6 align-self-end text-end">
											<img src="img/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">$ 24.300</h3>
											<p class="mb-2">Total Earnings</p>
											<div class="mb-0">
												<span> +5.35% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="dollar-sign" class="lucide lucide-dollar-sign align-middle text-success"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">43</h3>
											<p class="mb-2">Pending Orders</p>
											<div class="mb-0">
												<span> -4.25% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="shopping-bag" class="lucide lucide-shopping-bag align-middle text-danger"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">$ 18.700</h3>
											<p class="mb-2">Total Revenue</p>
											<div class="mb-0">
												<span> +8.65% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="dollar-sign" class="lucide lucide-dollar-sign align-middle text-info"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

    </main>
      <!-- <footer>
        <p>© 2025 E-commerce Admin Dashboard</p>
      </footer> -->
</div>
<script src="js/state.js"></script>

</script>
</body>

</html>
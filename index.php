<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./vendor/bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/bootstrap.css">
	<link href="./vendor/bootswatch.scss" rel="stylesheet/scss" type="text/css">
	<link href="./vendor/variables.scss" rel="stylesheet/scss" type="text/css">
  </head>
  <body>
    <header>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Navbar</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarColor03">
		      <ul class="navbar-nav me-auto">
		        <li class="nav-item">
		          <a class="nav-link active" href="#">Home
		            <span class="visually-hidden">(current)</span>
		          </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Features</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Pricing</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">About</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
		          <div class="dropdown-menu">
		            <a class="dropdown-item" href="#">Action</a>
		            <a class="dropdown-item" href="#">Another action</a>
		            <a class="dropdown-item" href="#">Something else here</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item" href="#">Separated link</a>
		          </div>
		        </li>
		      </ul>
		      <div class="d-flex">
		        <a href="./register.php" class="btn btn-outline-primary my-2 me-sm-2">Register</a>
		        <a href="./login.php" class="btn btn-outline-primary my-2 my-sm-2">Login</a>
		      </div>
		    </div>
		  </div>
		</nav>
    </header>
			<div class="container my-5 py-5 z-depth-1">
				  <section class="text-center px-md-5 mx-md-5 dark-grey-text">
				    
				    <div class="row mb-5">
				      <div class="col-md-4 mx-auto">
				        <div class="view mb-4 pb-2">
				          <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid" alt="smaple image">
				        </div>
				      </div>
				    </div>

				    <h3 class="font-weight-bold mb-4 pb-2">Lorem ipsum dolor sit amet</h3>
				    
				    <p class="text-center mx-auto mb-4 pb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto explicabo.</p>
				    
				    <button type="button" class="btn btn-deep-purple btn-rounded">Design your site now</button>

				  </section>
				</div>

				<div class="container mb-5 my-5 z-depth-1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title mb-4">Our Features</h4>
                <p class="text-muted para-desc mx-auto mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card service-wrapper rounded border-0 shadow p-4">
                <div class="icon text-center text-custom h1 shadow rounded bg-white">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><rect width="20" height="15" x="2" y="3" class="uim-tertiary" rx="3"></rect><path class="uim-primary" d="M16,21H8a.99992.99992,0,0,1-.832-1.55469l4-6a1.03785,1.03785,0,0,1,1.66406,0l4,6A.99992.99992,0,0,1,16,21Z"></path></svg></span>
                </div>
                <div class="content mt-4">
                    <h5 class="title">Fully Responsive</h5>
                    <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                    <div class="mt-3">
                        <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="big-icon h1 text-custom">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><rect width="20" height="15" x="2" y="3" class="uim-tertiary" rx="3"></rect><path class="uim-primary" d="M16,21H8a.99992.99992,0,0,1-.832-1.55469l4-6a1.03785,1.03785,0,0,1,1.66406,0l4,6A.99992.99992,0,0,1,16,21Z"></path></svg></span>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card service-wrapper rounded border-0 shadow p-4">
                <div class="icon text-center text-custom h1 shadow rounded bg-white">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M15,2c-3.3772,0.00142-6.27155,2.41462-6.88025,5.73651c2.90693-1.59074,6.553-0.52375,8.14374,2.38317c0.98206,1.79462,0.98206,3.96594,0,5.76057c3.8013-0.69634,6.31837-4.3424,5.62202-8.14369C21.27662,4.41261,18.37925,1.99872,15,2z"></path><circle cx="7" cy="17" r="5" class="uim-primary"></circle><path class="uim-tertiary" d="M11,7c-3.08339,0.00031-5.66461,2.33759-5.97,5.40582c2.5358-1.08949,5.47469,0.08297,6.56418,2.61877c0.54113,1.25947,0.54113,2.68593,0,3.94541c3.29729-0.32786,5.7045-3.26663,5.37664-6.56392C16.66569,9.33735,14.08386,6.99972,11,7z"></path></svg></span>
                </div>
                <div class="content mt-4">
                    <h5 class="title">Fresh Layouts</h5>
                    <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                    <div class="mt-3">
                        <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="big-icon h1 text-custom">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M15,2c-3.3772,0.00142-6.27155,2.41462-6.88025,5.73651c2.90693-1.59074,6.553-0.52375,8.14374,2.38317c0.98206,1.79462,0.98206,3.96594,0,5.76057c3.8013-0.69634,6.31837-4.3424,5.62202-8.14369C21.27662,4.41261,18.37925,1.99872,15,2z"></path><circle cx="7" cy="17" r="5" class="uim-primary"></circle><path class="uim-tertiary" d="M11,7c-3.08339,0.00031-5.66461,2.33759-5.97,5.40582c2.5358-1.08949,5.47469,0.08297,6.56418,2.61877c0.54113,1.25947,0.54113,2.68593,0,3.94541c3.29729-0.32786,5.7045-3.26663,5.37664-6.56392C16.66569,9.33735,14.08386,6.99972,11,7z"></path></svg></span>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card service-wrapper rounded border-0 shadow p-4">
                <div class="icon text-center text-custom h1 shadow rounded bg-white">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M6,23H2a.99974.99974,0,0,1-1-1V16a.99974.99974,0,0,1,1-1H6a.99974.99974,0,0,1,1,1v6A.99974.99974,0,0,1,6,23Z"></path><path class="uim-tertiary" d="M14,23H10a.99974.99974,0,0,1-1-1V10a.99974.99974,0,0,1,1-1h4a.99974.99974,0,0,1,1,1V22A.99974.99974,0,0,1,14,23Z"></path><path class="uim-primary" d="M22,23H18a.99974.99974,0,0,1-1-1V2a.99974.99974,0,0,1,1-1h4a.99974.99974,0,0,1,1,1V22A.99974.99974,0,0,1,22,23Z"></path></svg></span>
                </div>
                <div class="content mt-4">
                    <h5 class="title">Minimalism Feast</h5>
                    <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                    <div class="mt-3">
                        <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="big-icon h1 text-custom">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M6,23H2a.99974.99974,0,0,1-1-1V16a.99974.99974,0,0,1,1-1H6a.99974.99974,0,0,1,1,1v6A.99974.99974,0,0,1,6,23Z"></path><path class="uim-tertiary" d="M14,23H10a.99974.99974,0,0,1-1-1V10a.99974.99974,0,0,1,1-1h4a.99974.99974,0,0,1,1,1V22A.99974.99974,0,0,1,14,23Z"></path><path class="uim-primary" d="M22,23H18a.99974.99974,0,0,1-1-1V2a.99974.99974,0,0,1,1-1h4a.99974.99974,0,0,1,1,1V22A.99974.99974,0,0,1,22,23Z"></path></svg></span>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card service-wrapper rounded border-0 shadow p-4">
                <div class="icon text-center text-custom h1 shadow rounded bg-white">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-tertiary" d="M20 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.02883 1.02883 0 0 1 19.29 9.29a1.04667 1.04667 0 0 1 1.41992 0 1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 20 11zM19 6.5a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 19 6.5zM20 4a.98979.98979 0 0 1-.91992-1.37988A1.02883 1.02883 0 0 1 19.29 2.29a1.04669 1.04669 0 0 1 1.41992 0 1.02883 1.02883 0 0 1 .21.33008A.98919.98919 0 0 1 20.71 3.71a1.16044 1.16044 0 0 1-.33008.21A.9994.9994 0 0 1 20 4zM7.03027 6.24023a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 8 7H8A.99122.99122 0 0 1 7.03027 6.24023zm4-1a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 12 6h0A1.00294 1.00294 0 0 1 11.03027 5.24023zm4-1a.99816.99816 0 0 1 .7295-1.21h0a1.00272 1.00272 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 16 5h0A.99122.99122 0 0 1 15.03027 4.24023zM4 8A.99042.99042 0 0 1 3 7a.83154.83154 0 0 1 .08008-.37988A1.02883 1.02883 0 0 1 3.29 6.29 1.04669 1.04669 0 0 1 4.71 6.29a1.02883 1.02883 0 0 1 .21.33008A.99013.99013 0 0 1 4 8zM4 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.14718 1.14718 0 0 1 3.29 9.29 1.04667 1.04667 0 0 1 4.71 9.29a1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 4 11zM15 10a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 15 10zm-4 0a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 11 10zM7 10A1.0032 1.0032 0 0 1 8 9H8a1.0032 1.0032 0 0 1 1 1H9a1.0032 1.0032 0 0 1-1 1H8A1.0032 1.0032 0 0 1 7 10z"></path><polygon class="uim-primary" points="20 14 20 21 4 17 4 14 20 14"></polygon><path class="uim-primary" d="M20,22a.97427.97427,0,0,1-.24219-.03027l-16-4A.99961.99961,0,0,1,3,17V14a.99943.99943,0,0,1,1-1H20a.99943.99943,0,0,1,1,1v7a1.0005,1.0005,0,0,1-1,1ZM5,16.21875l14,3.5V15H5Z"></path></svg></span>
                </div>
                <div class="content mt-4">
                    <h5 class="title">Modern Workflow</h5>
                    <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                    <div class="mt-3">
                        <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="big-icon h1 text-custom">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-tertiary" d="M20 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.02883 1.02883 0 0 1 19.29 9.29a1.04667 1.04667 0 0 1 1.41992 0 1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 20 11zM19 6.5a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 19 6.5zM20 4a.98979.98979 0 0 1-.91992-1.37988A1.02883 1.02883 0 0 1 19.29 2.29a1.04669 1.04669 0 0 1 1.41992 0 1.02883 1.02883 0 0 1 .21.33008A.98919.98919 0 0 1 20.71 3.71a1.16044 1.16044 0 0 1-.33008.21A.9994.9994 0 0 1 20 4zM7.03027 6.24023a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 8 7H8A.99122.99122 0 0 1 7.03027 6.24023zm4-1a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 12 6h0A1.00294 1.00294 0 0 1 11.03027 5.24023zm4-1a.99816.99816 0 0 1 .7295-1.21h0a1.00272 1.00272 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 16 5h0A.99122.99122 0 0 1 15.03027 4.24023zM4 8A.99042.99042 0 0 1 3 7a.83154.83154 0 0 1 .08008-.37988A1.02883 1.02883 0 0 1 3.29 6.29 1.04669 1.04669 0 0 1 4.71 6.29a1.02883 1.02883 0 0 1 .21.33008A.99013.99013 0 0 1 4 8zM4 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.14718 1.14718 0 0 1 3.29 9.29 1.04667 1.04667 0 0 1 4.71 9.29a1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 4 11zM15 10a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 15 10zm-4 0a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 11 10zM7 10A1.0032 1.0032 0 0 1 8 9H8a1.0032 1.0032 0 0 1 1 1H9a1.0032 1.0032 0 0 1-1 1H8A1.0032 1.0032 0 0 1 7 10z"></path><polygon class="uim-primary" points="20 14 20 21 4 17 4 14 20 14"></polygon><path class="uim-primary" d="M20,22a.97427.97427,0,0,1-.24219-.03027l-16-4A.99961.99961,0,0,1,3,17V14a.99943.99943,0,0,1,1-1H20a.99943.99943,0,0,1,1,1v7a1.0005,1.0005,0,0,1-1,1ZM5,16.21875l14,3.5V15H5Z"></path></svg></span>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card service-wrapper rounded border-0 shadow p-4">
                <div class="icon text-center text-custom h1 shadow rounded bg-white">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path><polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon><path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path><path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path></svg></span>
                </div>
                <div class="content mt-4">
                    <h5 class="title">Unique Features</h5>
                    <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                    <div class="mt-3">
                        <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="big-icon h1 text-custom">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path><polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon><path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path><path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path></svg></span>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card service-wrapper rounded border-0 shadow p-4">
                <div class="icon text-center text-custom h1 shadow rounded bg-white">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path><path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path></svg></span>
                </div>
                <div class="content mt-4">
                    <h5 class="title">Support 24/7</h5>
                    <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted by the when looking at its layout.</p>
                    <div class="mt-3">
                        <a href="javascript:void(0)" class="text-custom">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="big-icon h1 text-custom">
                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-primary" d="M12,6a.99974.99974,0,0,1,1,1v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12V7A.99974.99974,0,0,1,12,6Z"></path><path class="uim-tertiary" d="M2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm9-5a1,1,0,0,1,2,0v4.42249l2.09766,1.2113a1.00016,1.00016,0,0,1-1,1.73242l-2.59766-1.5A1.00455,1.00455,0,0,1,11,12Z"></path></svg></span>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
<style type="text/css">
	
	body{margin-top:20px;
background:#eee;
}
.service-container {
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-container .icon {
  margin-top: 5%;
  font-size: 38px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-container .number-icon .icon-2 {
  height: 70px;
  width: 70px;
  line-height: 80px;
  border-radius: 64% 36% 55% 45% / 76% 72% 28% 24% !important;
  border-color: #f89d36 !important;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-container .number-icon .icon-2 i {
  font-size: 30px;
}

.service-container .number-icon .number {
  position: absolute;
  top: 0;
  right: 70px;
  left: 0;
  height: 35px;
  width: 35px;
  margin: 0 auto;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-container .number-icon .number span {
  line-height: 30px;
}

.service-container .content .number {
  font-size: 40px;
  color: #dee2e6;
}

.service-container .content .title {
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-container.hover-bg {
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-container.hover-bg .smooth-icon {
  position: absolute;
  bottom: -40px;
  right: -20px;
  font-size: 60px;
  color: #f8f9fa;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
}

.service-container.hover-bg:hover {
  background-color: #f89d36;
}

.service-container.hover-bg:hover .content .title {
  color: #ffffff !important;
}

.service-container.hover-bg:hover .content .serv-pera {
  color: #fafafb !important;
}

.service-container.hover-bg:hover .smooth-icon {
  font-size: 100px;
  opacity: 0.2;
  bottom: -20px;
  right: 10px;
}

.service-container:hover {
  background-color: #ffffff;
  -webkit-box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
          box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
}

.service-container:hover .icon {
  color: #f89d36;
  -webkit-animation: mover 1s infinite alternate;
          animation: mover 1s infinite alternate;
}

.service-container:hover .number-icon .icon-2 {
  background-color: #f89d36;
  border-radius: 50% !important;
}

.service-container:hover .number-icon .icon-2 i {
  color: #ffffff !important;
}

.service-container:hover .number-icon .number {
  color: #ffffff;
  background: #f89d36 !important;
  border-color: #ffffff !important;
}

.service-container:hover .content .title {
  color: #f89d36;
}

.service-container a:hover,
.service-container a .title:hover {
  color: #f89d36 !important;
}

@-webkit-keyframes mover {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
  }
}

@keyframes mover {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
  }
}

.service-wrapper {
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-wrapper .icon {
  width: 60px;
  height: 60px;
  line-height: 45px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-wrapper .content .title {
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  font-weight: 500;
}

.service-wrapper .big-icon {
  position: absolute;
  right: 0;
  bottom: 0;
  opacity: 0.05;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.service-wrapper:hover {
  -webkit-box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
          box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
  background: #ffffff;
  -webkit-transform: translateY(-8px);
          transform: translateY(-8px);
  border-color: transparent !important;
}

.service-wrapper:hover .icon {
  background: #0062ff !important;
  color: #ffffff !important;
}

.service-wrapper:hover .big-icon {
  z-index: -1;
  opacity: 0.1;
  font-size: 160px;
}

.text-custom {
    color: #0062ff !important;
}

.uim-svg {
    display: inline-block;
    height: 1em;
    vertical-align: -0.125em;
    font-size: inherit;
    fill: var(--uim-color, currentColor);
}


</style>

  <!--Section: Content-->
  <section class="dark-grey-text p-5">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-5 mb-4 mb-md-0">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/undraw_connected_world_wuay.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-7 mb-lg-0 mb-4">

        <!-- Form -->
        <form class="" action="">

          <!-- Section heading -->
          <h3 class="font-weight-bold my-3">Subscribe</h3>
          
          <p class="text-muted mb-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae, fuga similique quos aperiam tenetur quo ut rerum debitis.</p>
 
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Enter your email address" aria-label="Enter your email address"
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-md btn-primary rounded-right m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">Button</button>
            </div>
          </div>
          <small class="form-text black-text"><strong>* Leave your email addres to be notified first.</strong></small>
          
        </form>
        <!-- Form -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    
  </section>
  <!--Section: Content-->


</div>
    <footer class="footer py-3 bg-light">
	  <!-- Copyright -->
	  <div class="text-center p-3 text-dark">
	    © 2023 Copyright.
	  </div>
	  <!-- Copyright -->
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>



	
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Ndejje University Teaching Hospital</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    img {
      border-radius: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 60px;

    }

    #middle {
      background-image: url("data:image/jpeg;base64,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");
      background-repeat: no-repeat;
      background-size: auto;

    }
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="https://admissions.ndu.ac.ug/resources/images/logos/ndejje.png">
          <strong> Ndejje University Teaching Hospital</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main id="middle">

    <section  class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>
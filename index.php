<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Togle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                    <use href="#sun-fill"></use>
                </svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark"
                    aria-pressed="true">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                    <use href="#moon-stars-fill"></use>
                </svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                    aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                    <use href="#circle-half"></use>
                </svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
    </ul>
</div>

<?php include 'template/titlebar.php' ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FYdx0OVE4AKc%2Fmaxresdefault.jpg&f=1&nofb=1&ipt=60b91527241bf04beb2b1362a8263375ee2cd51f91062cd0ce272a8aded2ef1d&ipo=images"
                     alt="ligma doc" width="100%">
                <p>bofa</p>
            </div>

            <div class="col">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.909EfdUswZohkuufJI61-AHaHa%26pid%3DApi&f=1&ipt=f26093b68a1b07abb9a12c3101aa526502ed1928e9a9a2d33dc09c4df4d3e52c&ipo=images"
                     alt="steve" width="100%">
                <p>steve</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>WHICH IMAGE IS BETTER</h2>
                <form action="formsubmit.php">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="chosen" id="bofa" value="bofa">
                        <label class="form-check-label" for="bofa">
                            bofa
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="chosen" id="steve" value="steve">
                        <label class="form-check-label" for="steve">
                            steve
                        </label>
                    </div>
                    <input type="submit">
                </form>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rEq1Z0bjdwc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


</body>
</html>
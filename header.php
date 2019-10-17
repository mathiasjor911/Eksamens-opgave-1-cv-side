<meta charset="utf-8" />
<meta name="author" content="Mathias Jørgensen" />
<meta name="copyright" content="Mathias Jørgensen" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Normalize CSS -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto+Mono:300,400,500&display=swap" rel="stylesheet">

<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- Egen CSS -->
<link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="navbar">
        <div class="wrapper">
            <div class="logo">
                <a href="/">Mathias Jørgensen</a>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'/projekter') !== false) {echo 'active';} ?>" href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="<?php if (stripos($_SERVER['REQUEST_URI'],'/foto') !== false) {echo 'active';} ?>" href="/foto">Foto</a>
                    </li>
                    <li>
                        <a classclass="<?php if (stripos($_SERVER['REQUEST_URI'],'/om') !== false) {echo 'active';} ?>" href="/om">Om mig</a>
                    </li>
                </ul>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="mail"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github"></i>
                    </a>
                </div>
            </div>
            <div class="nav-menu">
                <i data-feather="menu"></i>
            </div>
        </div>
    </nav>
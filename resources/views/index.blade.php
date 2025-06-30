<!-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelApp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container p-5">
        <center> 
        
        <div class="card" style="width:400px; height:250px !important">
            <p class=""> Welcome {{$data->email}}, your session has started! </p>

        </div>
        <center> 
    </div>

    </body>
</html>
.......................................

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | LaravelApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(120deg, #f1f2f6, #dff9fb);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome-card {
            width: 100%;
            max-width: 480px;
            margin: auto;
            margin-top: 80px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        .welcome-card h4 {
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card welcome-card text-center p-4">
        <h4 class="text-primary">Hi there, {{ $data->email }}!</h4>
        <p class="mt-3">🎉 You’ve successfully signed in — welcome to our app!</p>
        <p class="text-muted">Feel free to explore, experiment, and make the most out of this session. You’re exactly where you need to be.</p>
        <hr>
        <p style="font-size: 0.9rem;">
            Disclaimer: 
        </p>
    </div>
</div>

</body>
</html>
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | LaravelApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome-card {
            max-width: 500px;
            margin: 60px auto 30px;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        .resource-grid .card {
            transition: transform 0.2s;
            border-radius: 12px;
        }
        .resource-grid .card:hover {
            transform: scale(1.03);
        }
        .footer-note {
            font-size: 0.85rem;
            color: #6c757d;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card welcome-card text-center p-4">
        <h4 class="text-primary">Hello, {{ $data->email }} 👋</h4>
        <p class="mt-2">Welcome to your session dashboard — let’s build something amazing today.</p>
        <p class="text-muted mb-1">🔐 Authenticated via Cognito | 🧠 Secure & personalized</p>
    </div>

    <h5 class="text-center mt-4 mb-3 text-secondary">✨ Explore these awesome destinations:</h5>

    <div class="row row-cols-1 row-cols-md-3 g-4 resource-grid justify-content-center">
        <div class="col">
            <a href="https://aws.amazon.com/free" target="_blank" class="text-decoration-none">
                <div class="card text-center h-100 p-3">
                    <h6>🛠 AWS Free Tier</h6>
                    <p class="text-muted small">Launch EC2, Lambda & more for free.</p>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="https://laravel.com/docs" target="_blank" class="text-decoration-none">
                <div class="card text-center h-100 p-3">
                    <h6>📘 Laravel Docs</h6>
                    <p class="text-muted small">Master routes, controllers, and Eloquent.</p>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="https://roadmap.sh/devops" target="_blank" class="text-decoration-none">
                <div class="card text-center h-100 p-3">
                    <h6>🚀 DevOps Roadmap</h6>
                    <p class="text-muted small">Visual learning path for cloud & CI/CD tools.</p>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="https://machinelearningmastery.com" target="_blank" class="text-decoration-none">
                <div class="card text-center h-100 p-3">
                    <h6>🤖 ML Mastery</h6>
                    <p class="text-muted small">Intuitive ML concepts for devs like you.</p>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="https://dev.to" target="_blank" class="text-decoration-none">
                <div class="card text-center h-100 p-3">
                    <h6>📝 Dev.to</h6>
                    <p class="text-muted small">Write. Read. Connect with the dev community.</p>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="https://www.behavioraleconomics.com/the-be-list/" target="_blank" class="text-decoration-none">
                <div class="card text-center h-100 p-3">
                    <h6>🔍 Behavioral Science List</h6>
                    <p class="text-muted small">Tech meets empathy? Right up your alley.</p>
                </div>
            </a>
        </div>
    </div>

    <div class="footer-note">
        <!-- Disclaimer: This page is intended for development and demo purposes only. User data is not stored or reused. -->
        <p class="mt-4">Crafted with ❤️ for learning & exploration. Need help? Reach out to your future self — you already know more than you think.</p>
    </div>
</div>

</body>
</html>


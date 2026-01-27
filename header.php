<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerix Development | Advanced Scripts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root { --primary-color: #0d6efd; --dark-bg: #121212; }
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .navbar { background-color: rgba(255, 255, 255, 0.95); border-bottom: 1px solid #eee; }
        .hero-section { background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%); color: white; padding: 100px 0; }
        .card { border: none; transition: transform 0.3s; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .card:hover { transform: translateY(-5px); }
        .footer { background: #121212; color: #888; padding: 40px 0; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="index.php">ZERIX <span class="text-dark">DEVELOPMENT</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="clients.php">Clients</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white ms
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Barber Prime | Barbearia de identidade</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilizacao.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
  :root {
    --navy-premium: #0A1A2F;
    --gold-classic: #D4A857;
    --silver-clean: #E5E5E5;
    --leather-brown: #5A3E2B;
    --black-steel: #111111;

    --graphite-gray: #2E2E2E;
    --coffee-brown: #3B2F2F;
    --medium-blue: #153A63;
    --dark-gold: #A07A3A;

    --gradient-dark: linear-gradient(135deg, #0A1A2F, #111111);
    --gradient-gold: linear-gradient(135deg, #D4A857, #A07A3A);

    --text-light: #F5F5F5;
    --text-dark: #1A1A1A;
    --text-gold: #D4A857;

    --border-gold: #D4A857;
    --border-dark: #0A1A2F;
  }

  
  body {
    color: var(--text-light);
    background-color: var(--navy-premium);
    font-family: "Inter", sans-serif;
  }

  
  .navbar {
    background-color: var(--black-steel) !important;
  }

  
  .card {
    background-color: var(--black-steel);
    border: 1px solid var(--border-gold);
    color: var(--text-gold);
    border-radius: 12px;
    transition: transform 0.2s ease, border-color 0.2s ease;
  }

  
  .card:hover {
    transform: translateY(-5px);
    border-color: var(--gold-classic);
  }

  
  .card-title {
    color: var(--gold-classic);
  }

  
  .price {
    font-weight: 700;
    color: var(--gold-classic);
  }
</style>

</head>
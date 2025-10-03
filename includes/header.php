<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
include '../functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - RT 13 RW 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }
        /* Sidebar */
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #2e7d32;
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: margin 0.3s ease;
            z-index: 1000;
        }
        #sidebar .sidebar-header {
            padding: 1.25rem;
            background: #1b5e20;
            text-align: center;
        }
        #sidebar ul.components {
            padding: 1rem 0;
        }
        #sidebar ul li {
            padding: 0.5rem 1.5rem;
        }
        #sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 6px;
            transition: background 0.2s;
        }
        #sidebar ul li a:hover,
        #sidebar ul li.active a {
            background: #4caf50;
        }
        /* Konten */
        #content {
            padding: 1.5rem;
            transition: margin 0.3s ease;
        }
        /* Navbar atas di mobile */
        .top-navbar {
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
        }
        /* Responsive: HP */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content {
                margin-left: 0;
            }
            #content.sidebar-active {
                margin-left: 250px;
            }
            .top-navbar {
                padding: 0.75rem;
            }
            h2 {
                font-size: 1.5rem;
            }
            .card {
                margin-bottom: 1rem;
            }
        }
        /* Desktop */
        @media (min-width: 769px) {
            #content {
                margin-left: 250px;
            }
        }
    </style>
</head>
<body>

<div class="wrapper d-flex">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Konten Utama -->
    <div id="content">
        <!-- Navbar Atas (Mobile Only) -->
        <nav class="top-navbar d-flex justify-content-between align-items-center d-md-none">
            <button id="sidebarCollapse" class="btn btn-success btn-sm">
                <i class="fas fa-bars"></i>
            </button>
            <span class="fw-bold text-success">Admin RT 13</span>
        </nav>

        <!-- Konten Halaman -->
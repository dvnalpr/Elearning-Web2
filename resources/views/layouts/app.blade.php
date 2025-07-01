<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Koleksi Buku Vintage')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(45deg, #f4f1e8, #e8dcc0);
            min-height: 100vh;
            color: #5d4e37;
            line-height: 1.6;
        }

        .header p {
            color: #a0522d;
            font-style: italic;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 6px 20px rgba(93, 78, 55, 0.15);
            border: 1px solid #d2b48c;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .btn-primary {
            background: linear-gradient(45deg, #8b4513, #a0522d);
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #a0522d, #cd853f);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: linear-gradient(45deg, #daa520, #b8860b);
            color: white;
        }

        .btn-secondary:hover {
            background: linear-gradient(45deg, #b8860b, #daa520);
            transform: translateY(-2px);
        }

        .btn-danger {
            background: linear-gradient(45deg, #a0522d, #8b4513);
            color: white;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #8b4513, #654321);
            transform: translateY(-2px);
        }

        .btn-success {
            background: linear-gradient(45deg, #228b22, #32cd32);
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #8b4513;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #d2b48c;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #8b4513;
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border-left-color: #28a745;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(93, 78, 55, 0.15);
        }

        .table th {
            background: linear-gradient(45deg, #8b4513, #a0522d);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        .table td {
            padding: 15px;
            border-bottom: 1px solid #e8dcc0;
        }

        .table tr:hover {
            background: rgba(139, 69, 19, 0.05);
        }

        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .page-link {
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #d2b48c;
            border-radius: 6px;
            color: #8b4513;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .page-link:hover {
            background: #8b4513;
            color: white;
        }

        .page-link.active {
            background: #8b4513;
            color: white;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .table {
                font-size: 14px;
            }
            
            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📚 Koleksi Buku Vintage</h1>
            <p>Kelola koleksi buku klasik Anda dengan elegan</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
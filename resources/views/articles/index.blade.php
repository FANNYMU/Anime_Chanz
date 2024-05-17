<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: rgb(18, 18, 18);
        }
        img:hover {
            transform: scale(0.9);
            cursor: zoom-in;
        }
        .navbar {
            background: #1a1a1a;
        }
        .card {
            background: rgb(18, 18, 18);
            border: none;
            color: rgb(232, 232, 232);
        }
        .card-img-container {
            width: 100%;
            height: 570px;
            overflow: hidden;
            border-radius: 6px;
        }
        .card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-light" href="index.html">Home</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-light" href="#">About</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link active text-light" data-bs-toggle="modal" data-bs-target="#addItem">Upload</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" href="#">Product</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Of Navbar -->

<div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="cardContainer">
        <!-- Existing cards go here -->

        @foreach ($items as $item)
            <div class="col">
                <div class="card h-100">
                    <a href="{{ $item->image_url }}">
                        <div class="card-img-container">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="...">
                        </div>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <!-- Add delete button here -->
                        <form action="{{ route('delete.image', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="modal fade" id="addItem" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" accept="image/*" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="imageURL" class="form-label">URL Video</label>
                        <input type="url" name="imageURL" id="imageURL" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

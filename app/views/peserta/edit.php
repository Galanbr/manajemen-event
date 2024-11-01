<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Peserta</h1>

        <div class="card mt-4">
            <div class="card-body">
                <form action="/peserta/update?id=<?php echo $peserta['id']; ?>" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $peserta['nama']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Kontak</label>
                        <input type="text" name="contact" class="form-control" value="<?php echo $peserta['kontak']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/index" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

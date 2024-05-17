<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
<!-- upload.blade.php -->
<form id="uploadForm" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input id="imageUpload" type="file" name="image" accept="image/*" required>
    <textarea id="description" name="description" rows="4" placeholder="Enter description..." required></textarea>
    <button type="submit">Upload</button>
</form>




</body>

<script>
    // Simpan data ke localStorage setelah pengguna mengunggah
document.getElementById("uploadForm").addEventListener("submit", function(event) {
  event.preventDefault();

  const imageFile = document.getElementById("imageUpload").files[0];
  const description = document.getElementById("description").value;

  const newEntry = {
    imageURL: URL.createObjectURL(imageFile), // URL gambar lokal
    description: description,
    // Anda mungkin ingin menambahkan videoURL juga, jika relevan
  };

  localStorage.setItem("newEntry", JSON.stringify(newEntry));

  // Clear form fields if needed
  document.getElementById("uploadForm").reset();
});

</script>

</html>

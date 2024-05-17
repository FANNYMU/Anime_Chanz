<!-- gallery.blade.php -->
@foreach ($images as $image)
    <div>
        <img src="{{ asset($image->image_url) }}" alt="{{ $image->description }}">
        <p>{{ $image->description }}</p>
    </div>
@endforeach

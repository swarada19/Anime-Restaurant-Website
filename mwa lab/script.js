// JavaScript for dynamic gallery loading

// Sample gallery images (replace with actual images)
const galleryImages = [
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    // Add more images as needed
];

const galleryContainer = document.getElementById('gallery-images');

// Load gallery images
galleryImages.forEach(image => {
    const img = document.createElement('img');
    img.src = 'images/' + image; // Assuming images are stored in an 'images' folder
    img.alt = 'Artwork';
    galleryContainer.appendChild(img);
});

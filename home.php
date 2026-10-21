<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1"><i class="bi bi-shield-lock-fill text-primary me-2"></i>Welcome to SmaDool</h2>
                <p class="text-muted mb-0">We sell smart door locks for your home. Choose the unlock method and door type that suits you.</p>
            </div>
            <div class="col-auto">
                <a href="products.php" class="btn btn-primary"><i class="bi bi-box-seam me-1"></i>View Products</a>
            </div>
        </div>
    </div>
</div>

<div id="homeCarousel" class="carousel slide mb-4 shadow-sm" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-fingerprint fs-1"></i>
                <h4 class="mt-2">Fingerprint &amp; Passcode</h4>
                <p class="mb-4">Unlock the door with your fingerprint or a passcode.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-credit-card fs-1"></i>
                <h4 class="mt-2">Key Card &amp; Passcode</h4>
                <p class="mb-4">Unlock the door with your key card or a passcode.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-phone fs-1"></i>
                <h4 class="mt-2">Smart App (Wi-Fi/Bluetooth)</h4>
                <p class="mb-4">Lock and unlock the door from your phone.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-person-bounding-box fs-1"></i>
                <h4 class="mt-2">Face Recognition</h4>
                <p class="mb-4">The door opens when it recognises your face.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<h4 class="mb-3" id="brands">Our Brands</h4>
<div class="row g-3 mb-4">
    <?php foreach (['Xiaomi', 'Samsung', 'Philips', 'Aqara'] as $brand): ?>
        <div class="col-6 col-md-3">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5 class="mb-0"><?= $brand ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="mb-3"><i class="bi bi-unlock text-primary me-2"></i>Unlock Methods</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Fingerprint &amp; Passcode</li>
                    <li class="list-group-item">Key Card &amp; Passcode</li>
                    <li class="list-group-item">Smart App (Wi-Fi/Bluetooth)</li>
                    <li class="list-group-item">Face Recognition</li>
                    <li class="list-group-item">All in One</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="mb-3"><i class="bi bi-door-closed text-primary me-2"></i>Door Types</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Wooden Door</li>
                    <li class="list-group-item">Security Door</li>
                    <li class="list-group-item">Glass Door</li>
                    <li class="list-group-item">Aluminium Door</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
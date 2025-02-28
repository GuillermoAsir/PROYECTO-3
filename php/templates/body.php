<body>

<div class="container">
        <h1>Personajes de Dragon Ball</h1>

        <form action="" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nombre..." value="<?= htmlspecialchars($searchTerm) ?>">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <div class="row">
            <?php foreach ($filteredCharacters as $character): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $character->getImage() ?>" class="card-img-top" alt="<?= $character->getName() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $character->getName() ?></h5>
                            <p class="card-text">
                                <strong>Ki:</strong> <?= $character->getKi() ?><br>
                                <strong>Max Ki:</strong> <?= $character->getMaxKi() ?><br>
                                <strong>Raza:</strong> <?= $character->getRace() ?><br>
                                <strong>Género:</strong> <?= $character->getGender() ?><br>
                                <strong>Descripción:</strong> <?= $character->getDescription() ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  <?php
  Instances::addProdInstance();
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
        
            <div class="card">
                <div class="card-header">Ajouter un produit</div>
                <div class="card-body bg-light">
                    <a href="dashboard" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <label for="titre">titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre" required>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="text" name="image" class="form-control" placeholder="Image" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">desc</label>
                            <input type="text" name="desc" class="form-control" placeholder="desc" required>
                        </div>
                        <div class="form-group">
                            <label for="prix">prix</label>
                            <input type="number" name="prix" class="form-control" placeholder="Prix" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$prod= Instances::getProdInstance();
Instances::editProdInstance();
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
        
            <div class="card">
                <div class="card-header">Modifier un produit</div>
                <div class="card-body bg-light">
                    <a href="dashboard" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <label for="titre">titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="titre" value="<?php echo($prod["titre"])?>" required>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="text" name="image" class="form-control" placeholder="image" value="<?php echo($prod["image"])?>" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">desc</label>
                            <input type="text" name="desc" class="form-control" placeholder="description" value="<?php echo($prod["description"])?>" required>
                        </div>
                        <div class="form-group">
                            <label for="prix">prix</label>
                            <input type="number" name="prix" class="form-control" placeholder="prix" value="<?php echo($prod["prix"])?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
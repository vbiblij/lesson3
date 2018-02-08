<?php
	require_once 'templates/header.php';
	
	if (isset($_POST)){
		\App\Topic::insert($_POST);
	}
	
	$topics = \App\Topic::find();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Topics
                </div>
                <div class="panel-body">
				
				  <?php foreach($topics as $key => $topic){ ?>
                    <div class="<?= ($key % 2 == 0) ? row_easy : row_hard; ?>">
                        <a href="/lesson3/topic.php?id=<?= $topic['id']; ?>"><?= $topic['name']; ?></a>
                    </div>
				  <?php } ?>

                    <div class="row_form">
                        <form method="post" class="form-group" action="">
                            <div class="form-group">
                                <label for="text">New topic</label>
                                <input class="form-control" name="name" title="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
	require_once 'templates/footer.php';
?>
<?php
	require_once 'templates/header.php';
	
	$topic_id = $_GET['id'];
	
	if (isset($_POST)){
		\App\Message::insert($_POST);
	}
		
	$topic = \App\Topic::findOne("`id` = $topic_id");
	$messages = \App\Message::find("`topic_id` = $topic_id");
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Topic : <?= $topic['name']; ?>
                </div>
                <div class="panel-body">
				
				  <?php foreach($messages as $key => $message){ ?>
                    <div class="<?= ($key % 2 == 0) ? row_easy : row_hard; ?>">
                        <?= $message['message']; ?>
                    </div>
				  <?php } ?>
				  
                    <div class="row_form">
                        <form method="post" class="form-group" action="">
                            <div class="form-group">
                                <label for="text">New message in topic : <?= $topic['name']; ?></label>
                                <input class="form-control" name="message" title="">
                                <input type="hidden" name="topic_id" value="<?= $topic['id']; ?>">
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

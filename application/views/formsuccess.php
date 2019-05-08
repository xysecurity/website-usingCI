<html>
<head>
<title>My Form</title>
</head>
<body>

<h3>Your form was successfully submitted!</h3>

<p><?php echo anchor('form', 'Try it again!'); ?></p>

</body>
</html>
<form method="post" action="<?php echo $this->config->item('base_url'); ?>php/registerIndi.php" id="individualpage" name="individualpage" onSubmit="return regisindi('individualpage')">
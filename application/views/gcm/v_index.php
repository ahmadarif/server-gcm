<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GCM Push Notification Test</title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-roboto.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>/assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Google Cloud Messaging</strong><br>Push Notification Test</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 form-box">
                    	<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Silahkan gunakan untuk keperluan testing <strong>GCM</strong></h3>
                                <p>Dibuat menggunakan <strong>Codeigniter</strong> dan <strong>Bootstrap CSS</strong></p>
                                
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>

                        <div class="form-bottom">
                            <?php if ($this->session->flashdata('status') == 'Berhasil'): ?>
                            <div class="alert alert-success" role="alert">Pesan berhasil dikirim!</div>
                            <?php elseif ($this->session->flashdata('status') == 'Gagal'): ?>
                            <div class="alert alert-danger" role="alert">Pesan tidak berhasil dikirim!</div>
                            <?php endif ?>
                            
		                    <form role="form" action="<?php echo base_url('GcmController/send') ?>" method="post" class="login-form">
		                    	<div class="form-group">
		                        	<input type="text" name="apiKey" placeholder="GCM API Key" class="form-control" value="<?php if ($this->session->flashdata('apiKey')) echo $this->session->flashdata('apiKey') ?>">
		                        </div>

		                        <div class="form-group">
		                        	<input type="text" name="regToken" placeholder="Registration Token" class="form-control" value="<?php if ($this->session->flashdata('regToken')) echo $this->session->flashdata('regToken') ?>">
		                        </div>

		                        <div class="form-group">
		                        	<textarea name="message" placeholder="Message" class="form-control"><?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message') ?></textarea>
		                        </div>

		                        <button type="submit" class="btn">Send message</button>
		                    </form>
	                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="<?php echo base_url() ?>/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/scripts.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <?= $this->Html->css('dist/components/reset.css'); ?>
  <?= $this->Html->css('dist/components/site.css'); ?>
  <?= $this->Html->css('dist/components/container.css'); ?>
  <?= $this->Html->css('dist/components/grid.css'); ?>
  <?= $this->Html->css('dist/components/header.css'); ?>
  <?= $this->Html->css('dist/components/image.css'); ?>
  <?= $this->Html->css('dist/components/menu.css'); ?>
  <?= $this->Html->css('dist/components/divider.css'); ?>
  <?= $this->Html->css('dist/components/segment.css'); ?>
  <?= $this->Html->css('dist/components/form.css'); ?>
  <?= $this->Html->css('dist/components/input.css'); ?>
  <?= $this->Html->css('dist/components/button.css'); ?>
  <?= $this->Html->css('dist/components/list.css'); ?>
  <?= $this->Html->css('dist/components/message.css'); ?>
  <?= $this->Html->css('dist/components/icon.css'); ?>
  <?= $this->Html->script('dist/components/jquery.min.js'); ?>
  
   

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>



<?= $content_for_layout; ?>
	
  	<!--< ?= $this->Html->script('dist/components/form.js'); ?> -->
  	<?= $this->Html->script('dist/components/transition.js'); ?>
</body>
</html>

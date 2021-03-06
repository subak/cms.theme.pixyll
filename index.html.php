<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?= $this->tag('title', join(' | ', $this->context('title', true, true))) ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->tag('meta', ['name'=>'description','content'=>$this->context('description')]) ?>
  <?= $this->tag('meta', ['name'=>'author','content'=>$this->context('author')]) ?>

  <?= $this->tag('link', ['res'=>'canonical','href'=>$this->context('uri')]) ?>

  <!-- Custom CSS -->
  <?= $this->tag('link', ['href' => $this->rel('/css/pixyll.css'), 'type' => 'text/css', 'rel' => 'stylesheet']) ?>
  <?= $this->tag('link', ['href' => $this->rel('/css/pixyll.override.css'), 'type' => 'text/css', 'rel' => 'stylesheet']) ?>

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Merriweather:900,900italic,300,300italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:900,300' rel='stylesheet' type='text/css'>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-29319562-2', 'auto');
    ga('send', 'pageview');

  </script>
</head>

<body class="site">

<div class="site-wrap">
  <header class="site-header px2 px-responsive">
    <div class="mt2 wrap">
      <div class="measure">
        <?= $this->link_to($this->context('title', false), '/', ['class' => 'site-title']) ?>

        <div class="clearfix"></div>
      </div>
    </div>
  </header>

  <div class="post p2 p-responsive wrap" role="main">
    <div class="measure">
      <?= $this->include() ?>
    </div>
  </div>
</div>

<footer class="center">
  <div class="measure">
    <small>
      (C)2015 tk84.
    </small>
  </div>
</footer>

</body>
</html>

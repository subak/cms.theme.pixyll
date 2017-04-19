<div class="post-header mb2">
  <?= $this->tag('h1', $this->entry_title($this->id())) ?>
  <?= $this->tag('span', $this->created()->format('Y-m-d'), ['class' => 'post-meta']) ?>
  <br>

  <a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="_tk84">Tweet</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  <!--<span class="post-meta small">-->
    <!--2 minute read-->
  <!--</span>-->
</div>

<div>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- ブログ -->
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-0197736592215392"
       data-ad-slot="3397251058"
       data-ad-format="auto"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>

<article class="post-content">
  <?= $this->entry_body($this->id()) ?>
</article>

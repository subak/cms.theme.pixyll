<div class="home">
  <div class="posts">
    <?= $this->each($this->ids(), function ($i, $id) { ?>

    <div class="post py3">
      <?= $this->tag('p', $this->created($id)->format('Y-m-d'), ['class' => 'post-meta']) ?>

      <?= $this->link_to(function ($args) { ?>
      <?= $this->tag('h1', $this->entry_title($args['id']), ['class' => 'post-title']) ?>
      <? }, $this->entry_uri($id), ['class' => 'post-link'], ['id' => $id]) ?>

      <article class="post-content">
        <?= $this->entry_body($id, ['excerpt' => $this->entry_context($id)->get('excerpt')]) ?>
      </article>
    </div>

    <? }) ?>
  </div>

  <div class="pagination clearfix mb1 mt4">
    <div class="left">
      <? if ($page=$this->prev_page()): ?>
      <?= $this->link_to('Newer', $page == 1 ? '/' : "/page/${page}/", ['class' => 'pagination-item']) ?>
      <? else: ?>
      <span class="pagination-item disabled">Newer</span>
      <? endif; ?>
    </div>

    <div class="right">
      <? if ($page=$this->next_page()): ?>
      <?= $this->link_to('Older', "/page/${page}/", ['class' => 'pagination-item']) ?>
      <? else: ?>
      <span class="pagination-item disabled">Older</span>
      <? endif; ?>
    </div>
  </div>
</div>

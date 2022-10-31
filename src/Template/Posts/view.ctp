<?= $this->Html->css('bar.css') ?>
<nav class="large-4 medium-4 columns" id="actions-sidebar" style="background: #F1F6FA;">
  <div class="profile">


<img src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg" alt="">
<div class="username"><?=$user->username?></div>
<div class="email"><?=$user->email?></div>
</div>
  <div class="account"><p style="color:#ccc;">ACCOUNT</p>
      <p class="item"> <i class="fa-regular fa-user my_style"></i> <?= $this->Html->link(__('Overview'), ['controller' => 'Users', 'action' => 'index', $user->id]) ?></p>
      <p class="item"> <span class="material-symbols-outlined my_style">settings</span> <?= $this->Html->link(__('Setting'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?></p>

  </div>
  <div class="dashboard"><p style="color:#ccc;">DASHBOARD</p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Headers'), ['controller' => 'Headers', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Press'), ['controller' => 'Pres', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Article'), ['controller' => 'Articles', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Displays'), ['controller' => 'Displays', 'action' => 'index']) ?></p>

  </div>
  <div class="logout">
    <p><span class="material-symbols-outlined my_style">exit_to_app</span> <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></p>

  </div>
</nav>

<div class="users view large-9 medium-8 columns content">
  <div class="back"><i class="fa-solid fa-backward"></i>
    <?= $this->Html->link(__('BACK'), ['controller' => 'Posts', 'action' => 'index']) ?>
  </div>
    <h3><?= h($posts->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($posts->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('body ') ?></th>
            <td><?= h($posts->body ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('img') ?></th>
            <td><?= h($posts->my_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('slug') ?></th>
            <td><?= h($posts->my_slug) ?></td>
        </tr>

    </table>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $posts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>
                </td>
            </tr>

        </table>

    </div>
</div>

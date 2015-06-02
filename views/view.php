<div class="container">
  <div class="jumbotron text-center">
    <h1>Books List</h1>
  </div>

  <ul class="breadcrumb">
    <li><a href="<?= $site['base_url'] ?>">Home</a></li>
    <li>View</li>
  </ul>
</div>

<div class="container">

<p>
  <a href="<?= $site['base_url'] ?>/create" class="btn btn-primary">Create</a>
</p>

  <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datas as $data): ?>
        <tr>
          <td><?= $data['id'] ?></td>
          <td><?= htmlentities($data['title']) ?></td>
          <td>
            <a class="btn btn-default btn-sm" href="<?= $site['base_url'] ?>/update/<?= $data['id'] ?>">Update</a>
            <a class="btn btn-danger btn-sm" href="<?= $site['base_url'] ?>/delete/<?= $data['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table> 
</div>
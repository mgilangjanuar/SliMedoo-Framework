<div class="container">
  <div class="jumbotron text-center">
    <h1>Update Title</h1>
  </div>

  <ul class="breadcrumb">
    <li><a href="<?= $site['base_url'] ?>">Home</a></li>
    <li><a href="<?= $site['base_url'] ?>/view">View</a></li>
    <li>Update</li>
  </ul>
</div>

<div class="container">
  <form class="form-horizontal" method="post">
    <fieldset>
      <legend>Book Store Form</legend>

      <div class="form-group">
        <label class="col-lg-2 control-label">Title</label>
        <div class="col-lg-10">
          <input name="title" type="text" class="form-control" placeholder="Title" value="<?= $book['title'] ?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="<?= $site['base_url'] ?>/view" class="btn btn-default">Cancel</a>
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
      </div>

    </fieldset>
  </form>
</div>
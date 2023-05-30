<!doctype html>
<html lang="ja">
<head>
<?php include("./html/meta.htm"); ?>
  <title>拾得物管理システム</title>
</head>

<body>
  <?php include("./html/header.htm"); ?>
  
  <div class="container">
    <div class="row">
      <div class="col p-5 text-white rounded mt-3 bg-success">
        <h1 class="display-4 fst-italic">拾得物管理システム</h1>
        <hr>
        <p>このシステムは文教大学湘南キャンパスの施設内における拾得物を管理するためのシステムです．プロジェクト演習BCの授業において学習用の演習システムとして開発を行います．</p>
      </div>
    </div>

    <div class="row mt-3">
      <div class="card col m-1">
        <div class="card-body">
          <h5 class="card-title">拾得者（ユーザ）登録</h5>
          <hr>
          <p class="card-text">拾得物の登録を行う際に必要となるユーザの情報を登録するための機能です</p>
          <a href="v_fuser_reg.php" class="btn btn-success">登録する</a>
        </div>
      </div>
      <div class="card col m-1">
        <div class="card-body">
          <h5 class="card-title">拾得物登録</h5>
          <hr>
          <p class="card-text">拾得物が発生した際に，拾得物の情報をシステムに登録するための機能です</p>
          <a href="v_fitem_reg.php" class="btn btn-success">登録する</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="card col m-1">
        <div class="card-body">
          <h5 class="card-title">拾得物検索機能</h5>
          <hr>
          <p class="card-text">システムに登録されている拾得物のデータを対象として検索するための機能です</p>
          <a href="v_fitem_search.php" class="btn btn-success">検索する</a>
        </div>
      </div>
      <div class="card col m-1">
        <div class="card-body">
          <h5 class="card-title">遺失物捜索依頼</h5>
          <hr>
          <p class="card-text">施設内で何か物を無くした際に，遺失物の捜索依頼を出すための機能です</p>
          <a href="v_litem_frequest.php" class="btn btn-success">依頼する</a>
          <a href="v_frequest_list.php" class="btn btn-success">一覧</a>
        </div>
      </div>
    </div>

  </div>

  <?php include("./html/footer.htm"); ?>
</body>
</html>

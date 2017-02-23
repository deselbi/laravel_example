<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <form method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input type="text" class="form-control" id="postTitle" name="title" aria-describedby="postTitleHelp">
                <small id="postTitleHelp" class="form-text text-muted">Post title help.</small>
            </div>

            <div class="form-group">
                <label for="postBody">Post Body</label>
                <textarea class="form-control" id="postBody" name="body" rows="3"
                          aria-describedby="postBodyHelp"></textarea>
                <small id="postBodyHelp" class="form-text text-muted">Post body help.</small>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="publish" class="form-check-input">
                    Check me out
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
</body>
</html>